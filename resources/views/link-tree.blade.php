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
        <main class="bg-spa-200 py-12 flex-1 bg-contain" style="background-image: url('images/logo_bg.png');">
            <!-- Mobile -->
            <div class="flex flex-col lg:hidden max-w-sm mx-auto space-y-6 px-3">
                <img src="/images/logo.svg" alt="">
                <a href="/">
                    <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">WEBSITE</div>
                </a>
                <a href="{{ route('specials') }}">
                    <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">MONTHLY SPECIALS</div>
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

            <!-- Desktop -->
            <div class="hidden lg:block lg:p-12">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-4 gap-6">
                        <div class="col-span-4">
                            <img src="/images/logo.svg" alt="">
                        </div>
                        <a href="/">
                            <div class="flex flex-wrap content-center justify-center cursor-pointer bg-white dark:bg-black border-2 border-white text-black dark:text-white h-full px-2 py-6 text-center">WEBSITE</div>
                        </a>
                        <a href="{{ route('specials') }}">
                            <div class="cursor-pointer bg-black border-2 border-white text-white rounded-full px-2 py-6 text-center">MONTHLY SPECIALS</div>
                        </a>
                        <a href="{{ route('ppt') }}">
                            <div class="flex flex-wrap content-center justify-center cursor-pointer bg-white dark:bg-black border-2 border-white text-black dark:text-white h-full px-2 py-6 text-center">PRE/POST CARE TREATMENTS</div>
                        </a>
                        <a href="mailto:beyondestheticsspa@gmail.com?subject = Consultation Request">
                            <div class="flex flex-wrap content-center justify-center cursor-pointer bg-white dark:bg-black border-2 border-white text-black dark:text-white h-full px-2 py-6 text-center">SCHEDULE A CONSULTION</div>
                        </a>
                        <a href="https://www.vagaro.com/beyondestheticsspa/book-now">
                            <div class="flex flex-wrap content-center justify-center cursor-pointer bg-white dark:bg-black border-2 border-white text-black dark:text-white h-full px-2 py-6 text-center">SCHEDULE AN APPOINTMENT</div>
                        </a>
                        <a href="https://alastin.com/BeyondEsthetics">
                            <div class="flex flex-wrap content-center justify-center cursor-pointer bg-white dark:bg-black border-2 border-white text-black dark:text-white h-full px-2 py-6 text-center">SHOP ALASTIN</div>
                        </a>
                        <a href="{{ route('payment-plans') }}">
                            <div class="flex flex-wrap content-center justify-center cursor-pointer bg-white dark:bg-black border-2 border-white text-black dark:text-white h-full px-2 py-6 text-center">PAYMENT PLANS</div>
                        </a>
                        <a href="https://www.instagram.com/beyondesthetics/?hl=en">
                            <div class="flex flex-wrap content-center justify-center cursor-pointer bg-white dark:bg-black border-2 border-white text-black dark:text-white h-full px-2 py-6 text-center">INSTAGRAM</div>
                        </a>
                        <a href="https://www.facebook.com/BeyondEstheticsMansfield/">
                            <div class="flex flex-wrap content-center justify-center cursor-pointer bg-white dark:bg-black border-2 border-white text-black dark:text-white h-full px-2 py-6 text-center">FACEBOOK</div>
                        </a>
                        <a href="https://www.youtube.com/channel/UCmSteVt8iblyoZyRRKhrFFw">
                            <div class="flex flex-wrap content-center justify-center cursor-pointer bg-white dark:bg-black border-2 border-white text-black dark:text-white h-full px-2 py-6 text-center">YOUTUBE</div>
                        </a>
                        <a href="mailto:beyondestheticsspa@gmail.com?">
                            <div class="flex flex-wrap content-center justify-center cursor-pointer bg-white dark:bg-black border-2 border-white text-black dark:text-white h-full px-2 py-6 text-center">EMAIL US</div>
                        </a>
                        <a href="https://beyondestheticsmedspa.com/training">
                            <div class="flex flex-wrap content-center justify-center cursor-pointer bg-white dark:bg-black border-2 border-white text-black dark:text-white h-full px-2 py-6 text-center">PERMANENT MAKEUP TRAINING</div>
                        </a>
                        <a href="https://beyondestheticsmedspa.com/training">
                            <div class="flex flex-wrap content-center justify-center cursor-pointer bg-white dark:bg-black border-2 border-white text-black dark:text-white h-full px-2 py-6 text-center">DERMAPLANE PRO TRAINING</div>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>