<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', Controllers\HomeController::class);
Route::get('/about', Controllers\AboutController::class);
Route::get('/contact', Controllers\ContactController::class);
Route::get('/gallery', Controllers\GalleryController::class);
Route::get('/users', Controllers\UserController::class);




// home
// about
// contact
// gallery

// $table->string('meta_title')->nullable();
// $table->dropColumn('meta_title');