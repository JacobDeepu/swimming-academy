<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <main class="h-auto p-4 pt-20 md:ml-64">
                <div class="flex justify-between sm:px-6 lg:px-8">
                    <!-- Page Heading -->
                    <h2 class="text-xl font-semibold leading-tight text-gray-800">
                        {{ __('Dashboard') }}
                    </h2>
                    <!-- Page Breadcrumb -->
                    <div class="flex">
                        <ol class="inline-flex items-center space-x-1 rtl:space-x-reverse md:space-x-2">
                            <li class="inline-flex items-center">
                                <a class="inline-flex items-center text-sm font-medium text-primary-700 hover:text-blue-600" href="{{ route('dashboard') }}">
                                    Home
                                </a>
                            </li>
                            @php
                                $uris = explode('/', request()->route()->uri);
                            @endphp
                            @foreach ($uris as $uri)
                                @if ($loop->last)
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg class="mx-1 h-3 w-3 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg>
                                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">{{ Str::ucfirst($uri) }}</span>
                                        </div>
                                    </li>
                                @else
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg class="mx-1 h-3 w-3 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg>
                                            <span class="ms-1 text-sm font-medium text-primary-500 md:ms-2">{{ Str::ucfirst($uri) }}</span>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ol>
                    </div>
                </div>
                <!-- Page Content -->
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
