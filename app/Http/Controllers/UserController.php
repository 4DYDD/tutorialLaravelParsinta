<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __invoke()
    {
        $users = User::query()->latest()->paginate(5);
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        // $title = 'Halo Gais';
        // $text = 'jadi somwan ternyata punya sebuah buku yang ingin diberikan kepada somtim, dan ternyata benda yang ingin diberikan itu adalah buku merah yang punya kekuatan sihir, dengan buku itu somtim bisa menjarah planet lain dan menjadi alien jahat seperti adudu dan mengalahkan thanos';
        // $data = [
        //     'title' => $title,
        //     'slug' => str($title)->slug(),
        //     'teaser' => str($text)->limit(150),
        //     'body' => $text,
        // ];
        // Article::create($data);

        return view('users.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request->only('name', 'username', 'email', 'password'));

        try {
            User::query()->create($request->all());
            return redirect('/users');
        } catch (Exception $e) {
            return redirect('/users');
        }
    }
}
