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


Route::get('/users', Controllers\UserController::class);
Route::get('/users/create', [Controllers\UserController::class, 'create']);
Route::post('/users', [Controllers\UserController::class, 'store']);

Route::get('/users/{user:name}', [Controllers\UserController::class, 'show']);





// home
// about
// contact
// gallery

// $table->string('meta_title')->nullable();
// $table->dropColumn('meta_title');