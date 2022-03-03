<x-app-layout>
    <div class="font-mont">
        <!-- Product -->
        <div>
            <div class="max-w-7xl mx-auto text-4xl py-8 uppercase">{{ $service->name }}</div>
            <div class="grid grid-cols-2">
                <div class="col-span-2 sm:col-span-1 bg-slate-400">
                    <img src="{{ Storage::url($service->image_urls[1]) }}" alt="{{ $service->name }} Image">
                </div>
                <div class="col-span-2 sm:col-span-1 bg-gray-200 px-24 py-8">
                    <div class="grid grid-cols-3 gap-3">
                        <div class="col-span-3 text-center py-8 text-3xl text-spa-200">{{ $service->name }} targets:</div>
                        @foreach ($service->logos() as $k => $v)
                            <div class="col-span-3 sm:col-span-1 border-4 border-spa-200 hover:border-black">
                                <img src="{{ $v }}" alt="{{ $k }} Image">
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Description -->
                <div class="col-span-2 sm:col-span-1 bg-white h-96 flex flex-wrap content-center">
                    <div class="px-24 text-xl leading-7">
                        {!! $service->description !!}
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-1 bg-black h-96 flex flex-wrap content-center">
                    <div class="w-full text-center text-5xl text-white">WHAT IS {{ $service->name }}?</div>
                </div>

                <div class="col-span-2 sm:col-span-1 bg-gray-200">
                    <img src="{{ Storage::url($service->image_urls[2]) }}" alt="">
                </div>
                <div class="col-span-2 sm:col-span-1 flex flex-wrap content-center">
                    <div class="p-12">
                        <div class="service-bullets">
                            {!! $service->bullets !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="max-w-7xl mx-auto py-20">
            <div class="grid grid-cols-2">
                <div class="col-span-2">
                    <div class="mb-12">
                        <div class="text-center text-4xl mb-4">Don’t take our word for it</div>
                        <div class="text-center">Here’s what our patients have to say about their experience.</div>
                    </div>
                </div>
                <div class="col-span-1 flex flex-row">
                    <div>
                        <img src="/images/quote.svg" alt="" class="h-32 w-32">
                    </div>
                    <div class="flex-1 px-12 py-2">
                        <div>
                            this is a review of the product
                        </div>
                        <div class="py-6">
                            <div>- Jessica Simpson</div>
                            <div>@twitter_jessica_person</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Youtube -->
        <div class="grid grid-cols-2 bg-gray-100">
            <div class="col-span-2 sm:col-span-1">
                <div class="flex justify-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $service->video_urls }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-span-2 sm:col-span-1 flex flex-wrap content-center">
                <div class="w-full text-center text-5xl font-semibold"><span class="text-spa-200">Watch</span> & Learn.</div>
            </div>
        </div>

        <!-- FAQ -->
        <div class="py-12">
            <div class="text-center text-4xl mb-12">FAQs</div>
            <div class="grid grid-cols-2">
                <div class="col-span-2 sm:col-span-1 text-center">
                    Coming Soon!
                </div>
                <div class="col-span-2 sm:col-span-1 text-center">
                    Coming Soon!
                </div>
            </div>
            <div class="text-center text-rose-400 mt-8">
                <div>View All Of Our Product FAQ's ---></div>
            </div>
        </div>

        <!-- Book Now, Pay Later -->
        <div class="max-w-7xl mx-auto py-12">
            <div class="grid grid-cols-4 gap-3">
                <div class="col-span-4 sm:col-span-1 text-4xl font-black">
                    <a href="https://carecredit.com/go/443shq/." target="_blank" class="hover:text-spa-200">
                        <div>Book Now.</div>
                        <div>Pay Later.</div>
                    </a>
                </div>
                <div class="col-span-4 sm:col-span-1">
                    <div class="font-black tracking-wide">NO DOWN PAYMENT</div>
                    <div>Book your package now and pay nothing for weeks!</div>
                </div>
                <div class="col-span-4 sm:col-span-1">
                    <div class="font-black tracking-wide">EASY MONTHLY PAYMENTS</div>
                    <div>Interest-free options to suit your needs.</div>
                </div>
                <div class="col-span-4 sm:col-span-1">
                    <div class="font-black tracking-wide">GET TREATED IMMEDIATELY</div>
                    <div>
                        <a href="https://carecredit.com/go/443shq/." target="_blank" class="hover:text-spa-200">Click here to apply now.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>