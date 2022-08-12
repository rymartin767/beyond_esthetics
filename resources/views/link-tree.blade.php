<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @yield('title', 'Beyond Esthetics Med Spa | Linktree')
        </title>

        @include('layouts.favicons')

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body>
        <div class="min-h-screen flex flex-col font-mont">
            <main class="bg-spa-200 pt-12 flex-1">
                <div class="max-w-sm mx-auto flex flex-col space-y-6">
                    <img src="/images/logo.svg" alt="">
                    <a href="/">
                        <div class="cursor-pointer bg-black text-white rounded-full px-2 py-6 text-center">@beyondestheticsmedspa</div>
                    </a>
                    <a href="https://www.facebook.com/BeyondEstheticsMansfield">
                        <div class="cursor-pointer bg-spa-200 border border-white text-white rounded-full px-2 py-6 text-center">FACEBOOK</div>
                    </a>
                    <a href="https://www.instagram.com/beyondesthetics">
                        <div class="cursor-pointer bg-spa-200 border border-white text-white rounded-full px-2 py-6 text-center">INSTAGRAM</div>
                    </a>
                    <a href="/specials">
                        <div class="cursor-pointer bg-spa-200 border border-white text-white rounded-full px-2 py-6 text-center">SPECIALS</div>
                    </a>
                    <a href="/services">
                        <div class="cursor-pointer bg-spa-200 border border-white text-white rounded-full px-2 py-6 text-center">SERVICES</div>
                    </a>
                    <a href="/about-us">
                        <div class="cursor-pointer bg-spa-200 border border-white text-white rounded-full px-2 py-6 text-center">ABOUT US</div>
                    </a>
                </div>
            </main>
        </div>
    </body>

</html>