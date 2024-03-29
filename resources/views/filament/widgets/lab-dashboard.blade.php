<x-filament::widget>
    <x-filament::card>
        <div class="h-20 flex items-center space-x-4 rtl:space-x-reverse">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-10 w-10"><!--! Font Awesome Pro 6.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M437.2 403.5L319.1 215L319.1 64h7.1c13.25 0 23.1-10.75 23.1-24l-.0002-16c0-13.25-10.75-24-23.1-24H120C106.8 0 96.01 10.75 96.01 24l-.0002 16c0 13.25 10.75 24 23.1 24h7.1L128 215l-117.2 188.5C-18.48 450.6 15.27 512 70.89 512h306.2C432.7 512 466.5 450.5 437.2 403.5zM137.1 320l48.15-77.63C189.8 237.3 191.9 230.8 191.9 224l.0651-160h63.99l-.06 160c0 6.875 2.25 13.25 5.875 18.38L309.9 320H137.1z"/></svg>

            <div>
                <h2 class="text-lg sm:text-xl font-bold tracking-tight">
                    Lab
                </h2>
                    

                <p class="text-sm">
                    <div>
                        PHP: {{ phpversion() }} | Laravel: {{ app()->version() }}
                    </div>
                    <div>
                        Site Version: {{ config('general.admin.version') }}
                    </div>
                    <a href="{{ route('lab') }}" class="text-gray-600 hover:text-primary-500 focus:outline-none focus:underline">
                        Go To The Lab
                    </a>
                </p>
            </div>
        </div>
    </x-filament::card>
</x-filament::widget>