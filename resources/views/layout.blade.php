<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark:bg-black">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @vite('resources/css/app.css')
    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">
    <div class="relative p-4 dark:bg-black dark:text-white">
        <nav class="flex gap-2">
            <a href="{{ route('home.index') }}">Home</a>
            <a href="{{ route('guitars.index') }}">Guitars</a>
            <a href="{{ route('home.about') }}">About</a>
            <a href="{{ route('home.contact') }}">Contact</a>
        </nav>
    </div>
    <div
        class="relative flex flex-col items-start justify-center max-h-screen min-h-[95vh] bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 pt-0">
        @yield('content')
    </div>

    @yield('scripts')
</body>

</html>
