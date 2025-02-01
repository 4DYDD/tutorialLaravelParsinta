<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Controllers\HomeController::class);
Route::get('/about', Controllers\AboutController::class);
Route::get('/contact', Controllers\ContactController::class);
Route::get('/gallery', Controllers\GalleryController::class);
Route::get('/articles', Controllers\ArticleController::class);

Route::resource('users', Controllers\UserController::class);

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

// $table->string('meta_title')->nullable();
// $table->dropColumn('meta_title');