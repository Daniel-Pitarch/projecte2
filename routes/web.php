<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);
Route::put('/posts/{post}/soft-delete', [PostController::class, 'softDelete'])
    ->name('posts.softDelete');