<x-app-layout title="Users">
    <x-slot:heading>Users</x-slot:heading>

    <div>{{ $user->name }}</div>
    <div>{{ $user->username }}</div>
    <div>{{ $user->email }}</div>
</x-app-layout>
