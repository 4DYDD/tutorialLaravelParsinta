@props([
    'type' => 'submit',
    'as' => 'button',
])

@php
    $classes =
        'block px-3 py-2 text-sm font-medium text-center text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600';
@endphp

@if ($as == 'button')
    <button {{ $attributes }} type="{{ $type }}" class="{{ $classes }}">
        {{ $slot }}
    </button>
@else
    <a {{ $attributes->merge(['class' => $classes]) }} class="{{ $classes }}">
        {{ $slot }}
    </a>
@endif
