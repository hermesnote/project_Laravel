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

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="container mx-auto mt-10 p-5">
        <h1 class="text-3xl font-bold text-center text-blue-600">Welcome to {{ config('app.name', 'Laravel') }}</h1>
        <p class="text-center text-gray-700 mt-5">This is a simple page styled with Tailwind CSS.</p>
        <div class="mt-10 text-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Tailwind Button
            </button>
        </div>
    </div>
</body>
</html>
