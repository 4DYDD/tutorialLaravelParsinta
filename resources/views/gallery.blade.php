<x-app-layout title="gallery" :datas="$datas">
    <x-slot name="heading">Gallery</x-slot>

    <ul>
        @foreach ($datas as $data)
            <li>
                <span>
                    {{ $data->id }}.
                </span>

                <span>
                    {{ $data->name }}
                </span>

                |

                <span>
                    {{ $data->username }}
                </span>

                |

                <span>
                    {{ $data->email }}
                </span>
            </li>
            </li>
        @endforeach
    </ul>
</x-app-layout>
