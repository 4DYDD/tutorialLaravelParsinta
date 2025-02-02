<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function loginForm()
    {
        return view('auth.login', [
            'user' => new User(),
            'page_meta' => (object) [
                'title' => 'Login',
                'method' => 'POST',
                'url' => route('login'),
                'page' => 'login',
            ]
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back();
    }
}
