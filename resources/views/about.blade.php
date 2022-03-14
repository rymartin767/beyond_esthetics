<x-app-layout>

    <!-- TEAM PHOTO -->
    <x-section class="bg-pink-200">
        TEAM PHOTO
    </x-section>

    <!-- MISSION STATEMENT -->
    <x-section>
        <div x-data="{ shown: false }" x-intersect="shown = true">
            <div x-show="shown" x-transition.duration.4000ms class="max-w-7xl mx-auto">
                <div class="text-5xl text-blue-500 font-semibold text-center">
                    <div class="flex flex-col space-y-2 sm:space-y-0 sm:space-x-2 sm:flex-row">
                        <div>We Assist.</div>
                        <div>We Empower.</div>
                        <div>We Inspire.</div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>
    
    <!-- FAQs -->
    <x-section>
        <div x-data="{ shown: false }" x-intersect="shown = true">
            <div x-show="shown" x-transition.duration.5000ms>    
                @include('layouts.elements.faq', compact('faqs'))
            </div>
        </div>
    </x-section>
    
</x-app-layout>