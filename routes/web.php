<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);
Route::put('/posts/{post}/soft-delete', [PostController::class, 'softDelete'])
    ->name('posts.softDelete');
Route::put('/posts/{post}/destroy-many', [PostController::class, 'destroyMany'])
    ->name('posts.destroyMany');

Route::resource('courses', CourseController::class);
Route::resource('students', StudentController::class);

// Authentication (username + password only)
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');