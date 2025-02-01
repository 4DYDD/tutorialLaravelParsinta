@props([
    'type' => 'submit',
    'as' => 'button',
    'color' => 'indigo',
])

@php
    $classes = "block transall px-3 py-2 text-sm font-medium text-center text-white bg-$color-600 rounded-md shadow-sm hover:bg-$color-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-$color-600";
@endphp

@if ($as == 'button')
    <button {{ $attributes->merge(['class' => $classes]) }} type="{{ $type }}" class="{{ $classes }}">
        {{ $slot }}
    </button>
@else
    <a {{ $attributes->merge(['class' => $classes]) }} class="{{ $classes }}">
        {{ $slot }}
    </a>
@endif
