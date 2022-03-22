<div>
    <!-- JumboTron Intro -->
    <div class="bg-white">
        <x-section>
            <div class="grid grid-cols-2">
                <div class="col-span-2 md:col-span-1 h-96 md:h-auto bg-cover" style="background-image: url('/images/cover.jpg');">
                    <!-- bg image -->
                </div>
                <div class="col-span-2 md:col-span-1 flex flex-col bg-black p-6 lg:p-20">
                    <div class="flex flex-col border-l-4 border-spa-200 text-white text-3xl lg:text-4xl">
                        <div class="pl-4">Helping People Feel</div class="pl-4">
                        <div class="pl-4">Beautiful And Confident</div>
                    </div>

                    <div class="mt-8 font-mont text-white leading-6">
                        We strive for excellence through seeking continuous growth and education to perfect our craft and deliver the highest level of care. We are compassionate and believe in leading with integrity. We put our patient’s needs first and are passionate about creating natural-looking results. We have created a loving and accepting environment to help you look and feel your best!
                    </div>
                </div>
            </div>
        </x-section>
    </div>

    <!-- Service We Provide -->
    <div class="bg-gray-50">
        <x-section title="Services We Provide">
            <div class="grid grid-cols-3 gap-3">
                <div class="col-span-3 sm:col-span-1">
                    <a href="/services#medical" class="cursor-pointer">
                        <div class="overflow-hidden">
                            <img src="images/med.png" alt="Service We Provide" class="transition opacity-70 duration-700 ease-in-out hover:scale-110 hover:opacity-100" loading="lazy">
                        </div>
                        <div class="mt-2 tracking-widest">MEDICAL</div>
                    </a>
                </div>
                <div class="col-span-3 sm:col-span-1">
                    <a href="/services#spa" class="cursor-pointer">
                        <div class="overflow-hidden">
                            <img src="images/spa.png" alt="Service We Provide" class="transition opacity-70 duration-700 ease-in-out hover:scale-110 hover:opacity-100" loading="lazy">
                        </div>
                        <div class="mt-2 tracking-widest">SPA</div>
                    </a>
                </div>
                <div class="col-span-3 sm:col-span-1">
                    <a href="/services#injectables" class="cursor-pointer">
                        <div class="overflow-hidden">
                            <img src="images/inject.png" alt="Service We Provide" class="transition opacity-70 duration-700 ease-in-out hover:scale-110 hover:opacity-100" loading="lazy">
                        </div>
                        <div class="mt-2 tracking-widest">INJECTABLES</div>
                    </a>
                </div>
            </div>
        </x-section>
    </div>

    <!-- Tonya -->
    <div class="bg-spa-200 pt-16">
        <x-section>
            <div class="grid grid-cols-3">
                <div class="col-span-3 sm:col-span-1 bg-white bg-contain" style="background-image: url('images/marble_background.jpg');">
                    <img src="images/employees/tonya.png" alt="">
                </div>
                <div class="col-span-3 sm:col-span-2 flex flex-wrap content-center sm:justify-center order-last sm:order-first bg-black text-white">
                    <div class="p-4">
                        <div class="text-4xl font-bold font-mont mb-2">Owner/Founder</div>
                        <div>
                            <div class="lg:text-lg">Owner/Founder</div>
                            <div class="lg:text-lg">Licensed Esthetician</div>
                            <div class="lg:text-lg">AICC Master Permanent Makeup Artist</div>
                            <div class="lg:text-lg">Certified Permanent Makeup Trainer</div>
                            <div class="lg:text-lg">Certified Dermaplane Pro Trainer</div>
                            <div class="lg:text-lg">Skincare Specialist</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mt-6 justify-center md:justify-end">
                <button class="bg-black text-white rounded-md px-2 py-3 w-full sm:w-auto text-xl font-mont tracking-wider font-bold">Meet Our Team</button>
            </div>
        </x-section>
    </div>

    <!-- Featured Specials * Alpine Intersect -->
    <div>
        <x-section title="Our Featured Specials">
            <div x-data="{ shown: false }" x-intersect="shown = true">
                <div x-show="shown" x-transition.duration.4000ms>
                    <div class="grid grid-cols-6 gap-3">
                        @foreach($specials as $special)
                            <div class="col-span-6 sm:col-span-3 md:col-span-2">
                                <a href="/specials/#featured" class="cursor-pointer">
                                    <div class="relative">
                                        <img src="{{ $special->image == null ? '/images/services/landscape_missing.jpg' : Storage::url($special->image->url) }}" alt="Featured Special">
                                        <div class="absolute bottom-0 text-center py-8 text-3xl bg-spa-200 w-full text-white tracking-wider bg-opacity-50 font-semibold">
                                            {{ $special->name }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </x-section>
    </div>

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

    <!-- Reviews -->
    <div class="bg-white py-20">
        <x-section title="Don't Take Our Word For It">
            <div>
                <div class="mb-12">
                    <div class="text-center">Here’s what our patients have to say about this service.</div>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    @forelse ($reviews as $review)
                        <x-review :review="$review"></x-review>
                    @empty
                        <div class="col-span-2 lg:col-span-1 bg-yellow-200">
                            <div class="flex flex-row">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current h-24 w-24">
                                        <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M256 31.1c-141.4 0-255.1 93.12-255.1 208c0 49.62 21.35 94.98 56.97 130.7c-12.5 50.37-54.27 95.27-54.77 95.77c-2.25 2.25-2.875 5.734-1.5 8.734c1.249 3 4.021 4.766 7.271 4.766c66.25 0 115.1-31.76 140.6-51.39c32.63 12.25 69.02 19.39 107.4 19.39c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM127.1 271.1c-17.75 0-32-14.25-32-31.1s14.25-32 32-32s32 14.25 32 32S145.7 271.1 127.1 271.1zM256 271.1c-17.75 0-31.1-14.25-31.1-31.1s14.25-32 31.1-32s31.1 14.25 31.1 32S273.8 271.1 256 271.1zM383.1 271.1c-17.75 0-32-14.25-32-31.1s14.25-32 32-32s32 14.25 32 32S401.7 271.1 383.1 271.1z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col space-y-6 px-6">
                                    <div>
                                        No reviews for this service yet...
                                    </div>
                                    <div class="text-xl">
                                        - No Reviews
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </x-section>
    </div>

</div>