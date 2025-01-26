<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/gallery', fn() => view(
    'gallery',
    [
        'datas' => User::all()
    ]
));


// [
//     ['id' => '1', 'name' => 'John Doe'],
//     ['id' => '2', 'name' => 'Jane Doe'],
// ]


// home
// about
// contact
// gallery
