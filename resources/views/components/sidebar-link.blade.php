@props(['active'])

@php
$classes = ($active ?? false)
            ? 'group flex items-center rounded-lg p-2 text-base font-medium text-gray-900 focus:outline-none border-l-4 border-transparent border-primary-500 bg-gray-50'
            : 'group flex items-center rounded-lg p-2 text-base font-medium text-gray-500 focus:outline-none border-l-4 border-transparent hover:border-primary-500 hover:bg-gray-50';
$icon_classes = ($active ?? false)
                ? 'h-6 w-6 text-gray-900 transition duration-75'
                : 'h-6 w-6 text-gray-500 transition duration-75'
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <svg class='{{ $icon_classes }}' aria-hidden="true" fill="currentColor" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
        {{ $icon }}
    </svg>
    <span class="ml-3">{{ $slot }}</span>
</a>
