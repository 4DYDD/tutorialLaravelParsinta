<x-app-layout title="Users">
    <x-slot:heading>Users</x-slot:heading>

    {{-- <ul>
        @foreach ($users as $user)
            <li>
                <span>
                    {{ $user->id }}.
                </span>

                <span>
                    {{ $user->name }}
                </span>

                |

                <span>
                    {{ $user->username }}
                </span>

                |

                <span>
                    {{ $user->email }}
                </span>
            </li>
            </li>
        @endforeach
    </ul> --}}

    {{-- <table>
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d M Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}

    <x-section-title>
        <x-slot:title>Users</x-slot:title>
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
            <x-table.thead />
            <x-table.tbody :users="$users" />
        </x-table>

    </div>
</x-app-layout>
