@props(['active'])

@php
    $classes = 'inline-flex w-full items-center text-sm font-semibold transition-colors duration-150 hover:text-gray-800';
    $classes = $active ? $classes . ' text-gray-800 hover:text-gray-800' : $classes;
@endphp

@if ($active)
    <span class="absolute inset-y-0 left-0 w-1 rounded-br-lg rounded-tr-lg bg-primary-600" aria-hidden="true"></span>
@endif

<a {{ $attributes->merge(['class' => $classes]) }}>
    <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
        {{ $icon }}
    </svg>
    <span class="ml-4">{{ $slot }}</span>
</a>
