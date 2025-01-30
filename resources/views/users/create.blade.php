{{-- @php
    $randName = [
        'Akai',
        'Aldous',
        'Alpha',
        'Alucard',
        'Angela',
        'Argus',
        'Atlas',
        'Aurora',
        'Aulus',
        'Badang',
        'Balmond',
        'Bane',
        'Barats',
        'Baxia',
        'Beatrix',
        'Belerick',
        'Benedetta',
        'Brody',
        'Bruno',
        'Carmilla',
        'Cecilion',
        "Chang'e",
        'Claude',
        'Clint',
        'Cyclops',
        'Diggie',
        'Dyrroth',
        'Esmeralda',
        'Estes',
        'Eudora',
        'Fanny',
        'Faramis',
        'Floryn',
        'Franco',
        'Freya',
        'Gatotkaca',
        'Gloo',
        'Gord',
        'Granger',
        'Grock',
        'Guinevere',
        'Gusion',
        'Hanabi',
        'Hanzo',
        'Harley',
        'Harith',
        'Hayabusa',
        'Helcurt',
        'Hilda',
        'Hylos',
        'Irithel',
        'Jawhead',
        'Johnson',
        'Kadita',
        'Kagura',
        'Kaja',
        'Karina',
        'Karrie',
        'Khaleed',
        'Khufra',
        'Kimmy',
        'Lancelot',
        'Lapu-Lapu',
        'Layla',
        'Leomord',
        'Lesley',
        'Ling',
        'Lolita',
        'Luo Yi',
        'Lunox',
        'Martis',
        'Masha',
        'Mathilda',
        'Melissa',
        'Mia',
        'Minotaur',
        'Minsitthar',
        'Moskov',
        'Nana',
        'Natan',
        'Natalia',
        'Odette',
        'Paquito',
        'Pharsa',
        'Phylax',
        'Popol & Kupa',
        'Rafaela',
        'Roger',
        'Ruby',
        'Saber',
        'Selena',
        'Silvanna',
        'Sun',
        'Thamuz',
        'Terizla',
        'Tigreal',
        'Uranus',
        'Vale',
        'Valir',
        'Vexana',
        'Wanwan',
        'X.Borg',
        'Yi Shun-shin',
        'Yin',
        'Yu Zhong',
        'Yve',
        'Zhask',
        'Zilong',
    ];

    $name = $randName[array_rand($randName)];
@endphp --}}

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
