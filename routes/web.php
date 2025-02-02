<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('/', Controllers\HomeController::class)->middleware('auth');
Route::get('/about', Controllers\AboutController::class)->middleware('auth');
Route::get('/contact', Controllers\ContactController::class)->middleware('auth');
Route::get('/gallery', Controllers\GalleryController::class)->middleware('auth');
Route::get('/articles', Controllers\ArticleController::class)->middleware('auth');

Route::resource('users', Controllers\UserController::class)->middleware('auth');

Route::get('login', [Controllers\LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('login', [Controllers\LoginController::class, 'authenticate'])->middleware('guest');

Route::post('logout', Controllers\LogoutController::class)->name('logout')->middleware('auth');

// Route::get('/users', Controllers\UserController::class);
// Route::get('/users/{user:id}/show', [Controllers\UserController::class, 'show']);
// Route::get('/users/create', [Controllers\UserController::class, 'create']);
// Route::get('/users/{user:id}/edit', [Controllers\UserController::class, 'edit']);


// Route::post('/users', [Controllers\UserController::class, 'store']);
// Route::put('/users/{user:id}', [Controllers\UserController::class, 'update']);
// Route::delete('/users/{user:id}', [Controllers\UserController::class, 'destroy']);





// home
// about
// contact
// gallery
