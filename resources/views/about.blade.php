<x-app-layout>
    <!-- TEAM PHOTO -->
    <div class="bg-gray-100 h-96">
        TEAM PHOTO
    </div>

    <!-- MISSION STATEMENT -->
    <div class="max-w-7xl mx-auto my-16">
        <div class="text-center">
            <div class="text-5xl text-blue-500 font-semibold mb-6">We assist. We empower. We inspire.</div>
            <div class="flex flex-col space-y-6 text-2xl font-semibold leading-9">
                <div>
                    Fusion IV exists to infuse the world with healthy possibilities.</div>
                <div>
                    Our mission is to provide elevated wellness experiences through trusted and quality care. As disciples of health and wellness, compassion is in our DNA. We genuinely care about the wellbeing of each individual we serve, and we prove it by treating our customers like friends with personalized Assistance at every step of the way.
                </div>
                <div>
                    As champions of confidence, achievement, and success, we’re here to Empower you to reach your full potential through a premium and professional IV therapy experience you won’t find anywhere else.
                </div>
                <div>
                    And no matter your wellness goals, each of our hydrating, nutrient-rich, and vitamin-filled IV solutions are designed to Inspire you to move life forward and achieve remarkable outcomes
                    along the way.
                </div>
                <div>
                    We hope you enjoy your experience with Fusion IV, and that you stay a part of our family for
                    years to come.
                </div>
                <div>
                    Fusion IV Family
                </div>
            </div>
        </div>
    </div>

    <!-- FAQs -->
    <div class="py-10 bg-gray-50">
        @include('layouts.elements.faq', compact('faqs'))
    </div>

    <!-- OUR FOUNDERS/OWNERS -->
    <div class="py-20">
        <x-section title="Get To Know Us">
            <div>
                <div x-data="{ shown: false }" x-intersect="shown = true" class="py-24">
                    <div x-show="shown" x-transition.duration.3000ms class="grid grid-cols-3">
                        <div class="col-span-2">
                            <div class="flex flex-col">
                                <div class="text-4xl text-spa-200 font-semibold mb-4">Beyond Esthetics Founders</div>
                                <div class="text-2xl font-bold mb-3">Tonya & Steve Goulding</div>
                                <div class="text-lg font-semibold pr-8">
                                    Beyond Esthetics means <span class="text-spa-200">seeing beyond what the natural eye sees.</span> Sometimes the most effective way to help a client is simply listening to a need or giving someone a hug.
                                    Knowing that the best treatment is sometimes good old-fashioned TLC, Tonya's husband Steve came up with the tagline, "Come get some TLC from TLG".
                                    Beyond Esthetics has grown from Tonya to over 20 employees and now serves two locations. Come see us today!
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="">
                                <div class="h-96 w-96 rounded-full bg-slate-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="grid grid-cols-4 gap-6">
                    @foreach ($employees as $employee)
                    <div class="col-span-4 sm:col-span-1 h-20 bg-gray-50">
                        {{ $employee->name }} BIO HERE
                    </div>
                    @endforeach
                </div>
            </div>
        </x-section>
    </div>
</x-app-layout>