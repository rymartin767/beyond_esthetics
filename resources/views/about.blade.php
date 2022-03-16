<x-app-layout>

    <!-- TEAM PHOTO -->
    <x-section class="bg-gradient-to-r from-gray-50 to-gray-400">
        <div class="text-center text-2xl font-semibold">TEAM PHOTO HERE</div>
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
    <x-section title="All The Details" class="bg-gray-100">
        <div x-data="{ shown: false }" x-intersect="shown = true">
            <div x-show="shown" x-transition.duration.5000ms>    
                @include('layouts.elements.faq', [
                    'faqs' => $faqs->chunk(ceil($faqs->count() / 2))
                ])
            </div>
        </div>
    </x-section>

    <!-- BIOs -->
    <x-section title="Get To Know Us" class="bg-spa-100">
        <div class="grid grid-cols-12 gap-6">
            @foreach ($employees as $employee)
                <div class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3 bg-white">
                    <div class="flex flex-col">
                        <img src="/images/employees/tonya.png" alt="">
                        <div class="flex flex-col space-y-3 p-2">
                            <div class="text-2xl font-bold">{{ $employee->name }}</div>
                            <div class="text-slate-700">
                                @foreach (explode('-', $employee->title) as $title)
                                    <div class="text-xs tracking-wide mb-1">{{ $title }}</div>
                                @endforeach
                            </div>
                            <div class="text-sm h-48 overflow-y-auto filament-description">
                                {!! $employee->bio !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-section>
    
</x-app-layout>