<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" sizes="57x57" href="/favicon-57x57.png" type="image/png" />
<link rel="apple-touch-icon" sizes="60x60" href="/favicon-60x60.png" type="image/png" />
<link rel="apple-touch-icon" sizes="72x72" href="/favicon-72x72.png" type="image/png" />
<link rel="apple-touch-icon" sizes="114x114" href="/favicon-114x114.png" type="image/png" />
<link rel="apple-touch-icon" sizes="120x120" href="/favicon-120x120.png" type="image/png" />
<link rel="apple-touch-icon" sizes="144x144" href="/favicon-144x144.png" type="image/png" />
<link rel="apple-touch-icon" sizes="152x152" href="/favicon-152x152.png" type="image/png" />
<link rel="apple-touch-icon" sizes="180x180" href="/favicon-180x180.png" type="image/png" />
<link rel="icon" sizes="16x16" href="/favicon-16x16.png" type="image/png" />
<link rel="icon" sizes="32x32" href="/favicon-32x32.png" type="image/png" />
<link rel="icon" sizes="96x96" href="/favicon-96x96.png" type="image/png" />
<link rel="icon" sizes="192x192" href="/favicon-192x192.png" type="image/png" />
<link rel="icon" sizes="512x512" href="/favicon-512x512.png" type="image/png" />
<link rel="manifest" href="/manifest.json" />
<meta name="theme-color" content="#FFFFFF" />
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="/favicon-512x512.png" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
