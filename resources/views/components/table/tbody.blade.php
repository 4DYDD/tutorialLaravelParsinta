@if ($page == 'users')
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($users as $user)
            <tr>
                <td class="py-4 pl-4 pr-3 text-sm font-medium text-center text-gray-900 whitespace-nowrap">
                    {{ $loop->iteration + $users->perPage() * $users->currentPage() - $users->perPage() }}
                </td>
                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                    {{ $user->name }}
                </td>
                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">Penduduk Land Of Dawn
                </td>
                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                    {{ $user->email }}
                </td>
                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                    {{ $user->created_at->format('j F Y') }}
                </td>
                <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">

                    <x-button href="/users/{{ $user->id }}/show" as='a' color="indigo"
                        class="inline-block cursor-pointer">Show</x-button>

                    <x-button href="/users/{{ $user->id }}/edit" as='a' color="orange"
                        class="inline-block cursor-pointer">Edit</x-button>

                    <form class="inline-block" action="/users/{{ $user->id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <x-button color="red" class="inline-block">Delete</x-button>
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
@elseif ($page == 'articles')
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($articles as $article)
            <tr>
                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                    {{ $article->title }}
                </td>
                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                    {{ $article->teaser }}
                </td>
                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                    {{ $article->body }}
                </td>
                <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">,
                            Lindsay
                            Walton</span></a>
                </td>
            </tr>
        @endforeach
    </tbody>


@endif
