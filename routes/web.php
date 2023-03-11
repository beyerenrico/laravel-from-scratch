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
    $posts = Post::latest()->get();

    return view('posts', [
        'posts' => $posts,
        'categories' => Category::all(),
        'count' => count($posts)
    ]);
})->name('home');

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
})->name('post');

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => 'All posts from category: ',
        'currentCategory' => $category,
        'entity' => $category,
        'posts' => $category->posts,
        'categories' => Category::all(),
        'count' => count($category->posts)
    ]);
})->name('category');

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'title' => 'All posts of user: ',
        'entity' => $user,
        'posts' => $user->posts,
        'categories' => Category::all(),
        'count' => count($user->posts)
    ]);
})->name('author');
