<x-app-layout title="Create User">
    <x-slot:heading>Create User</x-slot:heading>

    <form action="/users" method="post" class="space-y-6">
        @csrf
        <div>
            @error('name')
                <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
            @enderror
            <label for="name">Name</label>
            <input class="block px-4 py-2 mt-1 border rounded shadow shadow-gray-400" autocomplete="off" type="text"
                name="name" id="name">
        </div>
        <div>
            @error('username')
                <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
            @enderror
            <label for="name">Username</label>
            <input class="block px-4 py-2 mt-1 border rounded shadow shadow-gray-400" autocomplete="off" type="text"
                name="username" id="username">
        </div>
        <div>
            @error('email')
                <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
            @enderror
            <label for="email">Email</label>
            <input class="block px-4 py-2 mt-1 border rounded shadow shadow-gray-400" autocomplete="off" type="email"
                name="email" id="email">
        </div>
        <div>
            @error('password')
                <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
            @enderror
            <label for="password">Password</label>
            <input class="block px-4 py-2 mt-1 border rounded shadow shadow-gray-400" autocomplete="off" type="password"
                name="password" id="password">
        </div>
        <div>
            <x-button>submit</x-button>
        </div>
    </form>
</x-app-layout>
