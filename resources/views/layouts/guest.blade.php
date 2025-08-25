<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon-32x32.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-100 dark:bg-gray-900">
    
    {{-- Header / Logo --}}
    <header class="w-full py-4 bg-white shadow-md dark:bg-gray-800">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-6">
            <a href="/">
                <img src="{{ asset('K.png') }}" alt="Company Logo" class="w-32 h-32 object-contain">
            </a>
            <nav>
                <a href="/contact" class="text-gray-800 dark:text-gray-200 hover:text-blue-600 px-4">Contact</a>
            </nav>
        </div>
    </header>

    {{-- Main Content --}}
    <main class="flex-1 w-full">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="w-full py-6 bg-white dark:bg-gray-800 mt-12 shadow-inner">
        <div class="max-w-7xl mx-auto text-center text-gray-600 dark:text-gray-300">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>
    </footer>

</body>
</html>
