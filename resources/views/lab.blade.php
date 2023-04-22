<x-app-layout>
    <x-section title="Macbook">
        <div>Hello from Jo's smacbook</div>
        <div>PHP Version: {{ phpversion() }}</div>
        <div>Laravel Version: {{ app()->version() }}</div>
    </x-section>
    <x-section title="Fonts">
        <div class="max-w-5xl mx-auto flex flex-col space-y-8">
            <div class="font-mont">
                <div class="text-4xl mb-4">Montserrat</div>
                <div class="flex flex-col space-y-2 text-3xl">
                    <div class="font-thin">Give thanks for each day for 100.</div>
                    <div class="font-light">Give thanks for each day for 300.</div>
                    <div class="font-normal">Give thanks for each day for 400.</div>
                    <div class="font-medium">Give thanks for each day for 500.</div>
                    <div class="font-semibold">Give thanks for each day for 600.</div>
                </div>
            </div>
            <div class="font-work">
                <div class="text-4xl mb-4">Work Sans</div>
                <div class="flex flex-col space-y-2 text-3xl">
                    <div class="font-bold">Give thanks for each day for 700.</div>
                    <div class="font-extrabold">Give thanks for each day for 800.</div>
                    <div class="font-black">Give thanks for each day for 900.</div>
                </div>
            </div>
            <div class="font-sac">
                <div class="text-4xl mb-4">Sacramento</div>
                <div class="flex flex-col space-y-2 text-3xl">
                    <div class="font-normal">Give thanks for each day for 400.</div>
                </div>
            </div>
        </div>
    </x-section>

    <x-section title="Backgrounds">
        <div class="grid grid-cols-4 gap-3">
            <div class="col-span-1 h-44 bg-contain shadow-md" style="background-image: url('images/logo_bg.png');"></div>
            <div class="col-span-1 h-44 bg-contain shadow-md" style="background-image: url('images/logo-bg-purple.jpg');"></div>
            <div class="col-span-1 h-44 bg-contain shadow-md" style="background-image: url('images/marble_background.jpg');"></div>
        </div>
    </x-section>

    <x-section title="Mobile">
        <div class="flex items-center justify-center bg-gray-900 py-6">
            <div x-data="{ isMenuOpen: false }" class="relative mr-56">
                <div x-show="isMenuOpen" x-transition:enter="transition ease-in-out duration-300" x-transition:enter-start="opacity-0 transform scale-x-0 -translate-x-1/2" x-transition:enter-end="opacity-100 transform scale-x-100 translate-x-0" x-transition:leave="transition ease-in-out duration-300" x-transition:leave-start="opacity-100 transform scale-x-100 translate-x-0" x-transition:leave-end="opacity-0 transform scale-x-0 -translate-x-1/2" class="absolute inset-y-0 left-1/2 h-20 flex items-center pl-12 pr-3 space-x-2 bg-gray-800 rounded-tr-full rounded-br-full">
                    <button class="h-16 w-16 inline-flex items-center justify-center text-blue-600 hover:bg-white hover:bg-opacity-5 rounded-full">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-12 w-12">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    <button class="h-16 w-16 inline-flex items-center justify-center text-blue-600 hover:bg-white hover:bg-opacity-5 rounded-full">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-12 w-12">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </button>
                    <button class="h-16 w-16 inline-flex items-center justify-center text-blue-600 hover:bg-white hover:bg-opacity-5 rounded-full">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-12 w-12">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </button>
                </div>
                <button class="relative h-20 w-20 inline-flex items-center justify-center bg-gray-800 hover:bg-gray-700 rounded-tl-full rounded-bl-full focus:outline-none transition-all duration-300" :class="isMenuOpen ? 'bg-blue-600 hover:bg-blue-600' : 'rounded-tr-full rounded-br-full'" @click="isMenuOpen = !isMenuOpen">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-12 w-12 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="py-24">
            <div class="text-center">Horizontal Scroll</div>
            <div class="flex overflow-x-auto flex-nowrap bg-pink-300 scroll-smooth snap-x snap-center">
                <div class="min-w-full bg-yellow-100">
                    <h2>Card</h2>
                </div>
                <div class="min-w-full bg-yellow-200">
                    <h2>Card</h2>
                </div>
                <div class="min-w-full bg-yellow-300">
                    <h2>Card</h2>
                </div>
                <div class="min-w-full bg-yellow-400">
                    <h2>Card</h2>
                </div>
                <div class="min-w-full bg-yellow-500">
                    <h2>Card</h2>
                </div>
                <div class="min-w-full bg-yellow-100">
                    <h2>Card</h2>
                </div>
                <div class="min-w-full bg-yellow-100">
                    <h2>Card</h2>
                </div>
            </div>
        </div>
    </x-section>
</x-app-layout>