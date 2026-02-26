<!DOCTYPE html>
<html lang="id" x-data x-init="$store.darkMode.init()">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Neuralis — Bandana Cerdas untuk Kesehatan Otak')</title>
    <meta name="description" content="@yield('meta_description', 'Neuralis adalah bandana cerdas dengan fitur health-care dan penanganan ADHD menggunakan teknologi EEG, SpO2, dan sensor detak jantung.')">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700&display=swap" rel="stylesheet" />

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-surface text-neutral-800 dark:bg-surface-dark dark:text-neutral-100 antialiased transition-colors duration-300 overflow-x-hidden">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
