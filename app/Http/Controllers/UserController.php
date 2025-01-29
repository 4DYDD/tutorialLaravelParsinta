<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);

        // $users = DB::table('users')->get();
        // $users = DB::table('users')->find(6);
        // $users = DB::table('users')->get()->toArray();

        // return $users;
        // dd($users);

        // return User::get();
        // return User::query()->findMany([1, 4, 6]);
        // return User::query()->findMany([1, 6, 4]);

        // return Article::query()->get();
        // return Article::query()->select('title', 'slug')->get();
    }
}
