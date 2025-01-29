<x-app-layout>
    <x-slot:heading>Dashboard</x-slot:heading>
    <div class="">Home</div>

    @isset($title)
        <div>
            samting terdeteksi cuy ({{ $title }})
        </div>
    @endisset

</x-app-layout>
