<x-app-layout>
    <x-slot name="heading">Dashboard</x-slot>
    <div class="">Home</div>

    @isset($title)
        samting terdeteksi cuy ({{ $title }})
    @endisset

</x-app-layout>
