<x-app-layout>
    <!-- TEAM PHOTO -->
    <div class="bg-gray-100 min-h-screen sm:min-h-0 py-8 px-4 sm:px-0">
        TEAM PHOTO
    </div>

    <!-- MISSION STATEMENT -->
    <div x-data="{ shown: false }" x-intersect="shown = true" class="min-h-screen sm:min-h-0 py-8 px-4 sm:px-0">
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

    <!-- FAQs -->
    <div x-data="{ shown: false }" x-intersect="shown = true" class="min-h-screen sm:min-h-0 py-8 px-4 sm:px-0">
        <div x-show="shown" x-transition.duration.5000ms>    
            @include('layouts.elements.faq', compact('faqs'))
        </div>
    </div>
</x-app-layout>