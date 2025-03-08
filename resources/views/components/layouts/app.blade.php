<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Lanza Pe'}} | {{ __('Online Store') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @livewireStyles
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        
        .icon {
            mask-image: url("{{ asset('img/icons.svg') }}");
        }
    </style>
</head>

<body>
    <x-front-header />
    {{ $slot }}
    <x-front-footer />
    @livewireScripts
    @stack('scripts')
</body>

</html>
