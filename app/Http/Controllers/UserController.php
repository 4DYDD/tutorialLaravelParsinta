<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __invoke()
    {
        // $users = User::all();
        // return view('users');

        $users = DB::table('users')->get();
        // $users = DB::table('users')->find(6);
        // $users = DB::table('users')->get()->toArray();

        // return $users;
        dd($users);
    }
}
