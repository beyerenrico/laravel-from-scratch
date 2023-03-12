<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');

Route::get('register', [RegisterController::class, 'create'])->name('register.create')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->name('register.store')->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->name('session.create')->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->name('session.store')->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->name('session.destroy')->middleware('auth');
