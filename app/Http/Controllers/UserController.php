<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.form', [
            'user' => new User(),
            'page_meta' => (object) [
                'title' => 'Create User',
                'method' => 'POST',
                'url' => route('users.store'),
                'page' => 'create',
            ]
        ]);
    }

    public function edit(User $user)
    {
        return view('users.form', [
            'user' => $user,
            'page_meta' => (object) [
                'title' => 'Edit User',
                'method' => 'PUT',
                'url' => route('users.update', $user->id),
                'page' => 'edit',
            ]
        ]);
    }


    public function store(UserRequest $request)
    {
        User::create($request->validated());

        return to_route('users.index');
    }


    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());

        return to_route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return to_route('users.index');
    }


    public function show($text)
    {
        $user = User::where('username', $text)->first();
        return view('users.show', ['user' => $user]);
    }
}
