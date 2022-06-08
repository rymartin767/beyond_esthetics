<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @production
            <title>{{ config('app.name') }}</title>
        @else
            <title>BEMS Development</title>
        @endproduction

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @include('layouts.favicons')

        @livewireStyles

        <!-- Scripts -->
        @stack('scripts')
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="min-h-screen flex flex-col font-mont overflow-x-hidden">
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
                <div>
                    {{ $slot }}
                </div>
            </main>

            @include('layouts.elements.footer')
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
