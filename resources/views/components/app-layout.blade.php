<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @isset($title)
            {{ $title }} / Laravel 11
        @else
            Laravel 11
        @endisset

    </title>
    {{-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Ubuntu&display=swap"
        rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="h-full">


    <div class="min-h-full">


        {{-- NAVBAR --}}
        <x-navbar />
        {{-- NAVBAR --}}


        {{-- HEADER --}}
        @isset($heading)
            <x-header>
                {{ $heading }}
            </x-header>
        @endisset
        {{-- HEADER --}}


        {{-- MAIN --}}
        <x-main>{{ $slot }}</x-main>
        {{-- MAIN --}}


    </div>


</body>

</html>
