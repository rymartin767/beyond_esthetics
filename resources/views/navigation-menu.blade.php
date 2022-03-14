<nav x-data="{ open: false }" class="bg-spa-200">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 lg:px-8 h-16">
        <div class="flex flex-row">
            <!-- Left Menu -->
            <div class="flex-1">
                <div class="hidden lg:flex lg:items-center lg:justify-around h-full">
                    <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('HOME') }}
                    </x-jet-nav-link>

                    <x-jet-nav-link href="{{ route('services') }}" :active="request()->routeIs('services')">
                        {{ __('SERVICES') }}
                    </x-jet-nav-link>

                    <x-jet-nav-link href="{{ route('specials') }}" :active="request()->routeIs('specials')">
                        {{ __('SPECIALS') }}
                    </x-jet-nav-link>

                    <x-jet-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                        {{ __('ABOUT US') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <!-- Center Logo -->
            <div class="py-2 hidden lg:block">
                <div class="border-2 border-white">
                    <img src="/images/logo.svg" alt="Beyond Esthetics Logo" class="h-10 w-10">
                </div>
            </div>

            <!-- Right Menus -->
            <div class="flex-1">
                <div class="flex justify-end lg:justify-between h-full">

                    <!-- Nav Links -->
                    <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-around h-full">
                        <x-jet-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <x-jet-nav-link class="cursor-pointer">
                                    {{ __('RESOURCES') }}
                                </x-jet-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                <x-jet-dropdown-link href="{{ route('home') }}">
                                    {{ __('Pre/Post Treatment') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('home') }}">
                                    {{ __('FAQs') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('home') }}">
                                    {{ __('Terms of Service') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('home') }}">
                                    {{ __('Before/After Photos') }}
                                </x-jet-dropdown-link>
                            </x-slot>
                        </x-jet-dropdown>

                        <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('shop')">
                            {{ __('SHOP') }}
                        </x-jet-nav-link>

                        <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('contact')">
                            {{ __('NEWSLETTER') }}
                        </x-jet-nav-link>

                        <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('contact')">
                            {{ __('TRAINING') }}
                        </x-jet-nav-link>
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="hidden lg:flex lg:items-center">
                        @auth
                            <div class="ml-3 relative">
                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        </button>
                                        @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ Auth::user()->name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                        @endif
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Account') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('Profile') }}
                                        </x-jet-dropdown-link>

                                        @admin
                                        <x-jet-dropdown-link href="{{ route('filament.pages.dashboard') }}">
                                            {{ __('Admin') }}
                                        </x-jet-dropdown-link>
                                        @endadmin

                                        <div class="border-t border-gray-100"></div>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-jet-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                        @endauth
                    </div>

                    <!-- Hamburger -->
                    <div class="flex items-center lg:hidden pt-3">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none transition-all">
                            <svg class="h-6 w-6 fill-current text-pink" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="bg-white">
        <div class="pt-2 pb-3 space-y-1" x-show="open" x-transition.duration.500ms x-cloak>
            <x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('HOME') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('services') }}" :active="request()->routeIs('services')">
                {{ __('SERVICES') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('specials') }}" :active="request()->routeIs('specials')">
                {{ __('SPECIALS') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                {{ __('ABOUT US') }}
            </x-jet-responsive-nav-link>
        </div>

        @auth
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                    @endif

                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-jet-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-jet-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth
    </div>

</nav>