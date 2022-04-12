<x-app-layout>
    <x-section title="Join Our Newsletter Group!">
        <div class="max-w-3xl mx-auto h-60 bg-gray-100" x-data="{ shown: false }" x-intersect="shown = true">
            <div 
                x-show="shown"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-50"
                x-transition:enter-end="opacity-100 scale-100"
            >
                alpine
            </div>
            <div 
                x-show="shown"
                x-transition:enter="transition ease-out duration-400"
                x-transition:enter-start="opacity-0 scale-50"
                x-transition:enter-end="opacity-100 scale-100"
            >
                alpine line two
            </div>
            <div 
                x-show="shown"
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 scale-50"
                x-transition:enter-end="opacity-100 scale-100"
            >
                alpine line number three
            </div>
        </div>
    </x-section>
</x-app-layout>