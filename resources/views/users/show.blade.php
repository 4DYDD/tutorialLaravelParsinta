<x-app-layout title="Users">
    <x-slot:heading>Users</x-slot:heading>

    @foreach ($users as $user)
        <div>{{ $user->name }}</div>
        <div>{{ $user->username }}</div>
        <div>{{ $user->email }}</div>
    @endforeach
</x-app-layout>
