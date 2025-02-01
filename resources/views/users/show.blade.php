<x-app-layout title="Users">
    <x-slot:heading>Users</x-slot:heading>

    <div>name &raquo; {{ $user->name }}</div>
    <div>username &raquo; {{ $user->username }}</div>
    <div>email &raquo; {{ $user->email }}</div>

    <br>

    <form action="/users/{{ $user->id }}" method="post">
        @csrf
        @method('DELETE')

        <x-button>Delete</x-button>
    </form>
</x-app-layout>
