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

    <table>
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
                    {{-- <td>{{ $user->created_at->format('d M Y' ) }}</td> --}}
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
