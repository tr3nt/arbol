<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Nájera' }}</title>

        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body>

        <main>
            {{ $slot }}
        </main>

        @vite('resources/js/app.js')
        @livewireStyles
    </body>
</html>
