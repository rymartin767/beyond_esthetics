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
        <div class="min-h-screen flex flex-col font-mont overflow-x-hidden">
            <main class="bg-spa-200 pt-12 flex-1">
                <div class="max-w-sm mx-auto flex flex-col space-y-6 px-3">
                    <img src="/images/logo.svg" alt="">
                    <a href="/">
                        <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">WEBSITE</div>
                    </a>
                    <a href="{{ route('ppt') }}">
                        <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">PRE/POST CARE TREATMENTS</div>
                    </a>
                    <a href="mailto:beyondestheticsspa@gmail.com?subject = Consultation Request">
                        <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">SCHEDULE A CONSULTION</div>
                    </a>
                    <a href="https://www.vagaro.com/beyondestheticsspa/book-now">
                        <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">SCHEDULE AN APPOINTMENT</div>
                    </a>
                    <a href="https://alastin.com/BeyondEsthetics">
                        <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">SHOP ALASTIN</div>
                    </a>
                    <a href="{{ route('payment-plans') }}">
                        <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">PAYMENT PLANS</div>
                    </a>
                    <a href="https://www.instagram.com/beyondesthetics/?hl=en">
                        <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">INSTAGRAM</div>
                    </a>
                    <a href="https://www.facebook.com/BeyondEstheticsMansfield/">
                        <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">FACEBOOK</div>
                    </a>
                    <a href="https://www.youtube.com/channel/UCmSteVt8iblyoZyRRKhrFFw">
                        <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">YOUTUBE</div>
                    </a>
                    <a href="mailto:beyondestheticsspa@gmail.com?">
                        <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">EMAIL US</div>
                    </a>
                    <a href="https://beyondestheticsmedspa.com/training">
                        <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">PERMANENT MAKEUP TRAINING</div>
                    </a>
                    <a href="https://beyondestheticsmedspa.com/training">
                        <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">DERMAPLANE PRO TRAINING</div>
                    </a>
                </div>
            </main>
        </div>
    </body>

</html>