<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    $posts = Post::with('category', 'user')->get();

    return view('posts', [
        'posts' => $posts,
        'count' => count($posts)
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    $posts = Post::with('category', 'user')->whereBelongsTo($category)->get();

    return view('posts', [
        'title' => 'All posts from category: ',
        'entity' => $category,
        'posts' => $posts,
        'count' => count($posts)
    ]);
});

Route::get('/authors/{user}', function (User $user) {
    $posts = Post::with('category', 'user')->whereBelongsTo($user)->get();

    return view('posts', [
        'title' => 'All posts of user: ',
        'entity' => $user,
        'posts' => $posts,
        'count' => count($posts)
    ]);
});
