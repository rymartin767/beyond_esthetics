<div>
    <!-- JumboTron Intro -->
    <div class="bg-white">
        <x-section>
            <div class="grid grid-cols-2">
                <div class="col-span-3 lg:col-span-1 bg-spa-200">
                    <img src="images/cover.jpg" alt="Tonya Goulding, Owner">
                </div>
                <div class="col-span-3 lg:col-span-1 flex flex-col bg-black p-6 lg:p-24">
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
    <div class="bg-white">
        <x-section title="Services We Provide">
            <div class="grid grid-cols-3 gap-3">
                <div class="col-span-3 sm:col-span-1">
                    <a href="/services#medical" class="cursor-pointer">
                        <div class="overflow-hidden">
                            <img src="images/med.png" alt="Service We Provide" class="transition opacity-70 duration-700 ease-in-out hover:scale-125 hover:opacity-100">
                        </div>
                        <div class="mt-2 tracking-widest">MEDICAL</div>
                    </a>
                </div>
                <div class="col-span-3 sm:col-span-1">
                    <a href="/services#spa" class="cursor-pointer">
                        <div class="overflow-hidden">
                            <img src="images/spa.png" alt="Service We Provide" class="transition opacity-70 duration-700 ease-in-out hover:scale-125 hover:opacity-100">
                        </div>
                        <div class="mt-2 tracking-widest">SPA</div>
                    </a>
                </div>
                <div class="col-span-3 sm:col-span-1">
                    <a href="/services#injectables" class="cursor-pointer">
                        <div class="overflow-hidden">
                            <img src="images/inject.png" alt="Service We Provide" class="transition opacity-70 duration-700 ease-in-out hover:scale-125 hover:opacity-100">
                        </div>
                        <div class="mt-2 tracking-widest">INJECTABLES</div>
                    </a>
                </div>
            </div>
        </x-section>
    </div>

    <!-- Employees -->
    <div class="bg-spa-100">
        <x-section>
            <!-- Tonya -->
            <div class="grid grid-cols-3">
                <!-- Tonya Left -->
                <div class="col-span-3 lg:col-span-2 order-last lg:order-first flex flex-wrap content-center">
                    <div class="bg-black text-white p-8">
                        <div class="border-l-4 border-black">
                            <div class="font-mont text-5xl">Tonya Goulding</div>
                            <div class="pl-4 border-l-4 border-spa-200">
                                <div class="mt-4 font-mont text-sm lg:text-xl tracking-wide">
                                    <div>Owner/Founder</div>
                                    <div>Licensed Esthetician</div>
                                    <div>AIIC Master Certified Permanent Makeup Artist</div>
                                    <div>Certified Permanent Makeup Trainer</div>
                                    <div>Certified Dermaplane Pro Trainer</div>
                                    <div>Skincare Specialist</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tonya Image Right -->
                <div class="col-span-3 lg:col-span-1 mb-3 lg:mb-0">
                    <img src="images/tonya.png" alt="Tonya Goulding, Owner">
                </div>
            </div>

            <!-- Employees -->
            <div class="grid grid-cols-4 gap-3 mt-12">
                @forelse ($employees as $employee)
                    <div class="col-span-2 sm:col-span-1 flex flex-col flex-wrap bg-white">
                        <div>
                            <img src="{{ is_null($employee->image) ? '/images/employees/coming_soon.png' : Storage::url($employee->image->url) }}" alt="{{ $employee->name }}">
                        </div>
                        <div>
                            <div class="p-4 font-mont bg-white">
                                <div class="text-xl">{{ $employee->name }}</div>
                                <div>
                                    @forelse ($employee->qualifications as $qual)
                                        <span class="uppercase mr-2">{{ $qual }}</span>
                                    @empty
                                        <span></span>
                                    @endforelse
                                </div>
                                @foreach (explode('-', $employee->title) as $title)
                                    <div class="text-xs tracking-wider">{{ $title }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @empty
                    <div>
                        No Employees Found.
                    </div>
                @endforelse
            </div>
        </x-section>
    </div>

    
</div>