<x-app-layout>
    @section('title', 'Beyond Esthetics Med Spa | Our Featured Specials & Memberships')

    <!-- Memberships -->
    <x-section title="Our Memberships" class="">
        <div class="grid grid-cols-3 gap-6">
            <!-- Medical -->
            <div class="col-span-3 lg:col-span-1">
                <div class="flex flex-col">
                    <div class="overflow-hidden">
                        <img src="/images/specials/medical_membership.jpg" alt="Medical Membership" class="transition duration-700 ease-in-out hover:scale-110" loading="lazy">
                    </div>
                    <div class="shadow-md px-6">
                        <div class="py-6 text-xl font-black">Included Free Every Month:</div>
                        <div class="">
                            <ul class="space-y-2 list-disc list-inside">
                                <li>Free Cryo/Dermaplane Facial</li>
                                <li>Free Product Of The Month</li>
                            </ul>
                        </div>
                        <div class="py-6 text-xl font-black">Available To Purchase Services:</div>
                        <ul class="space-y-2 list-disc list-inside">
                            <li>25% Off Laser Hair Removal</li>
                            <li>25% Off Morpheus8</li>
                            <li>25% Off Any Brand Filler {full syringe}</li>
                            <li>25% Off Skincare Products</li>
                            <li>25% Off IPL Photofacial</li>
                            <li>25% Off Microneedling</li>
                            <li>25% Off Threads</li>
                            <li>25% Off Chemical Peels</li>
                            <li>50% Off Opus Plasma</li>
                            <li>50% Off Inbody Scans</li>
                            <li>50% Off AquaFirme Facial</li>
                            <li>50% off Emsculpt</li>
                            <li>50% Off Cryo Body Treatments</li>
                            <li>50% Off Hollywood Spectra</li>
                            <li>50% Off Sculpt</li>
                            <li>50% Off Plasma IQ Pen</li>
                        </ul>
                        <div class="flex justify-between items-center border-t-2 border-spa-100 mt-3 py-3 text-lg lg:text-xl text-spa-200 font-bold">
                            <div>$125/Monthly</div>
                            <div class=""><a href="https://www.vagaro.com/beyondestheticsspa/memberships" target="_blank" class="hover:text-black">Get Enrolled!</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Spa -->
            <div class="col-span-3 lg:col-span-1">
                <div class="flex flex-col">
                    <div class="overflow-hidden">
                        <img src="/images/specials/spa_membership.jpg" alt="Spa Membership" class="transition duration-700 ease-in-out hover:scale-110" loading="lazy">
                    </div>
                    <div class="shadow-md px-6">
                        <div class="py-6 text-lg lg:text-xl font-black">Included Free Every Month:</div>
                        <div class="">
                            <ul class="space-y-2 list-disc list-inside">
                                <li>Free 30 Minute Dermaplane Facial</li>
                                <li>Free Product Of The Month</li>
                            </ul>
                        </div>
                        <div class="py-6 text-lg lg:text-xl font-black">Available To Purchase Services:</div>
                        <ul class="space-y-2 list-disc list-inside">
                            <li>20% Off Hollywood Spectra Facial</li>
                            <li>20% Off Microneedling</li>
                            <li>20% Off Inbody Scan</li>
                            <li>20% Off Cryo Facial</li>
                            <li>20% Off Chemical Peels</li>
                            <li>20% Off AquaFirme Facial</li>
                            <li>20% Off Any Brand Filler {full syringe}</li>
                            <li>20% Off Skincare Products</li>
                        </ul>
                        <div class="flex justify-between items-center border-t-2 border-spa-100 mt-3 py-3 text-xl text-spa-200 font-bold">
                            <div>$75/Monthly</div>
                            <div class=""><a href="https://www.vagaro.com/beyondestheticsspa/memberships" target="_blank" class="hover:text-black">Get Enrolled!</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Injects -->
            <!-- Tox Club Removed -->
        </div>
    </x-section>

    <!-- Specials -->
    <x-section title="Our Featured Specials" class="bg-gray-" id="featured">
        <div x-data="{ shown: false }" x-intersect="shown = true">
            <div x-show="shown" x-transition.duration.5000ms>
                <div class="grid grid-cols-3 gap-6">
                    @forelse ($specials as $special)
                        <x-special :special="$special"></x-special>
                    @empty
                        <div class="col-span-2 text-center text-3xl">
                            New Specials Coming! Check back soon!
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </x-section>

</x-app-layout>