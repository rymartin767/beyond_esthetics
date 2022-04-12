<x-app-layout>

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
                            <li>10% off Laser Hair Removal</li>
                            <li>15% Off Morpheus8</li>
                            <li>15% off Any Brand Filler {full syringe}</li>
                            <li>20% Off Skincare Products</li>
                            <li>25% Off IPL + Opus</li>
                            <li>50% Off Microneedling</li>
                            <li>50% Off Microneedling w/ PRP</li>
                            <li>50% Off Chemical Peels</li>
                            <li>50% Off Cryo Chamber</li>
                            <li>50% Off Inbody Scans</li>
                            <li>50% Off Injectable Supplements</li>
                            <li>65% off Emsculpt</li>
                            <li>65% Off Cryo Body Treatments</li>
                            <li>$9 Per Unit Botox/Jeuveau</li>
                            <li>$3 Per Unit Dysport</li>
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
                            <li>$15 Injectable Supplements</li>
                            <li>$35 Cryo Chamber</li>
                            <li>$35 Inbody Scan</li>
                            <li>$50 Cryo Facial</li>
                            <li>$150 Chemical Peels</li>
                            <li>$150 Microneedling</li>
                            <li>$10 Per Unit Botox/Jeuveau</li>
                            <li>$3.33 Per Unit Dysport</li>
                            <li>10% Off Any Brand Filler {full syringe}</li>
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
            <div class="col-span-3 lg:col-span-1">
                <div class="flex flex-col">
                    <div class="overflow-hidden">
                        <img src="/images/specials/tox_membership.jpg" alt="Injectables Membership" class="transition duration-700 ease-in-out hover:scale-110" loading="lazy">
                    </div>
                    <div class="shadow-md px-6">
                        <div class="py-6 text-xl font-black">Included Free Every Month:</div>
                        <div class="">
                            <ul class="space-y-2 list-disc list-inside">
                                <li>10 Units of Jeuveau</li>
                            </ul>
                        </div>
                        <div class="py-6 text-xl font-black">Available To Purchase Services:</div>
                        <ul class="space-y-2 list-disc list-inside">
                            <li>Allows You To Make Monthly Payments</li>
                            <li>Spreads Payments Out</li>
                            <li>Receive Member Pricing On Tox All Year Long</li>
                            <li>You Get A 10 Unit Credit Of Tox Monthy</li>
                            <li>Units Accumulate Until You Use Them</li>
                            <li>Units Never Expire</li>
                            <li>$10 Per Unit Pricing On Additional Units Needed</li>
                        </ul>
                        <div class="flex justify-between items-center border-t-2 border-spa-100 mt-3 py-3 text-xl text-spa-200 font-bold">
                            <div>$100/Monthly</div>
                            <div class=""><a href="https://www.vagaro.com/beyondestheticsspa/memberships" target="_blank" class="hover:text-black">Get Enrolled!</a></div>
                        </div>
                    </div>
                </div>
            </div>
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