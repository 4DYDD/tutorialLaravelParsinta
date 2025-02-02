<x-app-layout title="{{ $page_meta->title }}">
    <x-slot:heading>{{ $page_meta->title }}</x-slot:heading>

    <form action="{{ $page_meta->url }}" method="post" class="space-y-6">
        @method($page_meta->method)
        @csrf

        @if ($page_meta->page != 'login')
            <div>
                @error('name')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
                <label for="name">Name</label>
                <input value="{{ old('name', $user->name ?? '') }}"
                    class="block px-4 py-2 mt-1 border rounded shadow shadow-gray-400" autocomplete="off" type="text"
                    name="name" id="name">
            </div>
            <div>
                @error('username')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
                <label for="name">Username</label>
                <input value="{{ old('username', $user->username ?? '') }}"
                    class="block px-4 py-2 mt-1 border rounded shadow shadow-gray-400" autocomplete="off" type="text"
                    name="username" id="username">
            </div>
        @endif

        <div>
            @error('email')
                <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
            @enderror
            <label for="email">Email</label>
            <input value="{{ old('email', $user->email ?? '') }}"
                class="block px-4 py-2 mt-1 border rounded shadow shadow-gray-400" autocomplete="off" type="email"
                name="email" id="email">
        </div>

        <div>
            @error('password')
                <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
            @enderror
            <label for="password">Password</label>
            <input value="{{ old('password', '') }}" class="block px-4 py-2 mt-1 border rounded shadow shadow-gray-400"
                autocomplete="off" type="password" name="password" id="password"
                placeholder="{{ $user->password ? 'new password' : '' }}">
        </div>

        <div>
            <x-button>submit</x-button>
        </div>
    </form>
</x-app-layout>
