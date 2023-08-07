<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>
                @yield('title', 'Full Service Med Spa in Ontario | Beyond Esthetics Med Spa')
            </title>

        @include('layouts.favicons')
        
        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        @stack('alpine-intersect-plugin')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('scripts')

        <!-- Custom Widget -->
        <script type="text/javascript" src="https://firebasestorage.googleapis.com/v0/b/deardoc-embed-codes.appspot.com/o/Beyond%20Esthetics%2FBeyond%20Esthetics%20-%20Tonya%20Goulding%2Fcode.js?alt=media&token=1ef74658-8a90-4731-be6d-a202f5610141 (https://firebasestorage.googleapis.com/v0/b/deardoc-embed-codes.appspot.com/o/Beyond%20Esthetics%2FBeyond%20Esthetics%20-%20Tonya%20Goulding%2Fcode.js?alt=media&token=1ef74658-8a90-4731-be6d-a202f5610141)"></script>
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
