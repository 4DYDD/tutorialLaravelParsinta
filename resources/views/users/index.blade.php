<x-app-layout title="Users">
    <x-slot:heading>Users</x-slot:heading>

    <x-section-title>
        <x-slot:title>Users</x-slot:title>
        <x-slot:button>
            <x-button as="a" color="green" href="{{ route('users.create') }}">Add User</x-button>
        </x-slot:button>
        <x-slot:description>
            A list of all the users in your account including their name,
            title,
            email and role.
        </x-slot:description>
    </x-section-title>


    <div class="flow-root mt-8">


        {{-- PAGINATION --}}
        {{ $users->links() }}
        <br>
        {{-- PAGINATION --}}


        <x-table>
            <x-table.thead page='users' />
            <x-table.tbody page='users' :users="$users" />
        </x-table>

    </div>
</x-app-layout>
