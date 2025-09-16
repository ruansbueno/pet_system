<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Pet System') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('components.application-header', ['location' => 'dashboard'])
        <main class="mx-auto w-full md:max-w-7xl px-2 py-5">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="bg-red-100 p-3 mb-3 rounded-md border border-red-600">{{ $error }}</p>
                @endforeach
            @endif

            @include('components.form-create')
        </main>
    </body>
</html>
