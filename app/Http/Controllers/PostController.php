<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);



        /* 
            unfillable in Post model 
        */
        // $newpost = new Post;  
        //    $newpost->title ='123';
        //     $newpost->short_content = '123';
        //     $newpost->content = '123';
        //     $newpost->phoFto = 'save.photo.png';
        //     $newpost->save();
        //     return "success";


        /*
            with fillable in Post model 
         */
        // $posts = Post::create([
        //     'title' => 'London to Paris',
        //     'short_content' => 'London',
        //     'content' => 'Paris',
        //     'photo' => 'photo.png'
        // ]);
        // $posts->save();
        // return "success";

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // 1 - usul
        // return view('posts.show', [$post]);
        // 2 - usul
        return view('posts.show')->with([
            'post' => $post,
            'recent_posts' => Post::latest()->get()->except($post->id)->take(5)

            /* Post.php papkasidan 
            * latest() - oxirgilaridan olib kelsin
            * take(5) tasini olib kelsin
            * except($post->id) - korilayotgan malumot id si dan tawqari kelsin 
            */
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
