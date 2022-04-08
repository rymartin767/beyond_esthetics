<x-app-layout>

    <!-- TEAM PHOTO -->
    <div class="bg-cover" style="background-image: url('images/logo-bg-purple.jpg');">
        <div class="grid grid-cols-2 h-96">
            <div class="col-span-1"></div>
            <div class="col-span-1 h-full bg-white">

            </div>
        </div>
    </div>

    <!-- WE EMPOWER -->
    <x-section class="bg-black">
        <div x-data="{ shown: false }" x-intersect="shown = true">
            <div x-show="shown" x-transition.duration.4000ms class="max-w-7xl mx-auto">
                <div class="text-5xl text-white font-semibold">
                    <div class="flex flex-col space-y-2 sm:space-y-0 sm:space-x-2 sm:flex-row justify-center">
                        <div>We Assist.</div>
                        <div>We Empower.</div>
                        <div>We Inspire.</div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>
    
    <!-- MISSION STATEMENT -->
    <div class="bg-white py-6">
        <div class="bg-gray-100 py-6">
            <div class="flex flex-col max-w-5xl mx-auto text-center text-lg font-semibold">
                <div>
                    Beyond Esthetics means 'seeing beyond with what the natural eye sees'. Sometimes the most effective way to help a client is simply listening to a need or giving someone a hug. 
                </div>
                <div class="mt-4">
                    Knowing that the best treatment is sometimes good old-fashioned TLC, Tonya's husband Steve came up with the tagline, "Come get some TLC from TLG".
                </div>
                <div class="mt-4">
                    Beyond Esthetics started with just Tonya and has grown to over 20 employees and two locations. Come see us today!
                </div>
            </div>
        </div>
    </div>

    <!-- BIOs -->
    <x-section title="Get To Know Us" class="bg-spa-100">
        <div class="grid grid-cols-12 gap-6">
            <!-- Tonya first -->
            <div class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3 bg-white">
                <div class="flex flex-col">
                    <img src="{{ $tonya->image == null ? '' : Storage::url($tonya->image->url) }}" alt="">
                    <div class="flex flex-col space-y-3 p-2">
                        <div class="text-2xl font-bold">{{ $tonya->name }}</div>
                        <div class="text-slate-700">
                            @foreach (explode('-', $tonya->title) as $title)
                                <div class="text-xs tracking-wide mb-1">{{ $title }}</div>
                            @endforeach
                        </div>
                        <div x-data="{ showBio: false }" class="flex flex-col space-y-3">
                            <div @click="showBio = ! showBio" class="flex justify-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" x-show="showBio == false" class="fill-current text-spa-200 h-4 w-4"><!--! Font Awesome Pro 6.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" x-show="showBio == true" class="fill-current text-spa-200 h-4 w-4"><!--! Font Awesome Pro 6.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M352 352c-8.188 0-16.38-3.125-22.62-9.375L192 205.3l-137.4 137.4c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25C368.4 348.9 360.2 352 352 352z"/></svg>
                            </div>
                            <div x-show="showBio" x-transition x-cloak class="text-sm h-48 overflow-y-auto filament-description">
                                {!! $tonya->bio !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($employees as $employee)
                <div class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3 bg-white">
                    <div class="flex flex-col">
                        <img src="{{ $employee->image == null ? '' : Storage::url($employee->image->url) }}" alt="">
                        <div class="flex flex-col space-y-3 p-2">
                            <div class="text-2xl font-bold">{{ $employee->name }}</div>
                            <div class="text-slate-700">
                                @foreach (explode('-', $employee->title) as $title)
                                    <div class="text-xs tracking-wide mb-1">{{ $title }}</div>
                                @endforeach
                            </div>
                            <div x-data="{ showBio: false }" class="flex flex-col space-y-3">
                                <div @click="showBio = ! showBio" class="flex justify-center cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" x-show="showBio == false" class="fill-current text-spa-200 h-4 w-4"><!--! Font Awesome Pro 6.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" x-show="showBio == true" class="fill-current text-spa-200 h-4 w-4"><!--! Font Awesome Pro 6.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M352 352c-8.188 0-16.38-3.125-22.62-9.375L192 205.3l-137.4 137.4c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25C368.4 348.9 360.2 352 352 352z"/></svg>
                                </div>
                                <div x-show="showBio" x-transition x-cloak class="text-sm h-48 overflow-y-auto filament-description">
                                    {!! $employee->bio !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
    
</x-app-layout>