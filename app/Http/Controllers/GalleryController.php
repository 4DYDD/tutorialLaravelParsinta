<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __invoke()
    {
        return view(
            'gallery',
            [
                'datas' => User::all()
            ]
        );
    }
}
