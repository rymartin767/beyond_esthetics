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
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="min-h-screen flex flex-col bg-white">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <x-jet-banner />

            <!-- Page Content -->
            <main class="flex-1">
                <div class="">
                    {{ $slot }}
                </div>
            </main>

            <footer class="bg-gray-500">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    &copy; 2022 Sandy Martin | NT4C
                </div>
            </footer>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
