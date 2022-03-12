<div>
    <!-- JumboTron Intro -->
    <div class="bg-white">
        <x-section>
            <div class="grid grid-cols-2">
                <div class="col-span-3 md:col-span-1">
                    <img src="images/cover.jpg" alt="Tonya Goulding, Owner">
                </div>
                <div class="col-span-3 md:col-span-1 flex flex-col bg-black p-6 lg:p-20">
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

    <!-- Tonya + Employees -->
    <div class="bg-gradient-to-r from-spa-200 to-spa-100 py-6 sm:py-18">
        <x-section title="Meet Our Team">
            <!-- Tonya -->
            <div class="grid grid-cols-3 font-mont" style="background-image: url('images/marble_background.jpg')">
                <div class="col-span-3 lg:col-span-2">
                    <div class="flex flex-col p-8">
                        <div class="text-5xl">Tonya Goulding</div>
                        <div class="flex flex-col space-y-1 mt-3 border-l-4 pl-3 border-spa-200">
                            <div>Owner/Founder</div>
                            <div>Licensed Esthetician</div>
                            <div>AICC Master Permanent Makeup Artist</div>
                            <div>Certified Permanent Makeup Trainer</div>
                            <div>Certified Dermaplane Pro Trainer</div>
                            <div>Skincare Specialist</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 lg:col-span-1 order-first lg:order-last">
                    <img src="images/employees/tonya.png" alt="Tonya Goulding, Owner/Founder">
                </div>
            </div>

            <!-- Employees -->
            <div class="grid grid-cols-12 gap-3 mt-12">
                @forelse ($employees as $employee)
                    <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 flex flex-col flex-wrap bg-white rounded-br-3xl overflow-hidden">
                        <a href="/about#{{ $employee->name }}">
                            <div>
                                @livewire('image', ['database_image_url' => is_null($employee->image) ? '/images/employees/coming_soon.png' : $employee->image->url, 'alt' => $employee->name])
                                <!-- <img src="{{ is_null($employee->image) ? '/images/employees/coming_soon.png' : Storage::url($employee->image->url) }}" alt="{{ $employee->name }}"> -->
                            </div>
                            <div>
                                <div class="p-4 font-mont">
                                    <div class="text-xl font-bold mb-2">{{ $employee->name }}</div>
                                    @foreach (explode('-', $employee->title) as $title)
                                        <div class="text-xs tracking-wide mb-1">{{ $title }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                <div>
                    No Employees Found.
                </div>
                @endforelse
            </div>
        </x-section>
    </div>

    <!-- Featured Specials -->
    <div class="bg-gray-50">
        <x-section title="Our Featured Specials">
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

    <!-- Reviews -->
    <div class="bg-white py-20">
        <x-section title="Don't Take Our Word For It">
            <div>
                <div class="mb-12">
                    <div class="text-center">Here’s what our patients have to say about their experience.</div>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    @forelse ($reviews as $review)
                    <x-review :review="$review"></x-review>
                    @empty
                    <div class="col-span-2 lg:col-span-1 bg-yellow-200">
                        <div class="flex flex-row">
                            <div class="bg-pink-200">
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