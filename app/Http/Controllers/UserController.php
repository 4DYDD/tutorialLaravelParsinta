<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function __invoke()
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
                'url' => "/users",
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
                'url' => "/users/$user->id",
                'page' => 'edit',
            ]
        ]);
    }


    public function store(UserRequest $request)
    {
        User::create($request->validated());

        return redirect('/users');
    }


    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect('/users');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users');
    }


    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }
}
