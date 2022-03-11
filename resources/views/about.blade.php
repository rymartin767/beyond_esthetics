<x-app-layout>
    <div class="bg-gray-100 h-96">
        TEAM PHOTO
    </div>
    <div class="h-96 bg-gray-200">
        MISSION STATEMENT
    </div>
    <div class="h-96 bg-gray-300">
        OUR FOUNDER
    </div>
    <div class="h-96 bg-gray-400">
        <div x-data="{ shown: false }" x-intersect="shown = true">
            <div x-show="shown" x-transition>
                I'm in the viewport!
            </div>
        </div>
    </div>
</x-app-layout>