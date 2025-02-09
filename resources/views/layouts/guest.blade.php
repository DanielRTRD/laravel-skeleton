<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @vite('resources/css/app.css')
        @livewireStyles

        <!-- Scripts -->
        @vite('resources/js/app.js')
        @production
            <script defer data-domain="{{ request()->getHost() }}" src="https://plausible.io/js/plausible.js"></script>
        @endproduction
    </head>
    <body class="{{ config('app.debug') ? 'debug-screens' : '' }}">
        <div class="font-sans antialiased text-gray-900">
            {{ $slot }}
        </div>

        @livewireScripts
        @livewire('livewire-ui-modal')
    </body>
</html>
