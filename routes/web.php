<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/About', [PageController::class, 'about'])->name('about');
Route::get('/Services', [PageController::class, 'services'])->name('services');
Route::get('/Project', [PageController::class, 'project'])->name('project');
Route::get('/Blog', [PageController::class, 'blog'])->name('blog');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');



// Route::get('posts', [PostController::class, 'index']);
Route::resource('posts', PostController::class); 