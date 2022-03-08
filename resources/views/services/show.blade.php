<x-app-layout>
    <div class="font-mont">

        <!-- Product -->
        <div>
            <div class="max-w-7xl mx-auto text-4xl py-8 uppercase">{{ $service->name }}</div>
            <div class="grid grid-cols-2">
                <div class="col-span-2 sm:col-span-1 bg-slate-400">
                    <img src="{{ $service->images->where('tag', 'title')->isEmpty() ? '/images/services/title_missing.jpg' : Storage::url($service->images->where('tag', 'title')->first()->url) }}" alt="{{ $service->name }} Image">
                </div>
                <div class="col-span-2 sm:col-span-1 bg-gray-200 px-24 py-8">
                    <div class="grid grid-cols-6 gap-3">
                        <div class="col-span-6 text-center py-8 text-3xl text-spa-200">{{ $service->name }} targets:</div>
                        @forelse ($service->treatments as $treatment)
                            <div class="col-span-3 sm:col-span-2 border-4 border-spa-200 hover:border-black">
                                <img src="/images/services/treatments/{{$treatment}}.svg" alt="{{ str($treatment)->replace('_', ' ')->title() }} Image">
                            </div>
                        @empty
                            <div>No Logos Found.</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Description -->
        <div class="grid grid-cols-2">
            <div class="col-span-2 sm:col-span-1 bg-white h-96 flex flex-wrap content-center">
                <div class="px-24 text-xl leading-7">
                    {!! $service->description !!}
                </div>
            </div>
            <div class="order-first sm:order-last col-span-2 sm:col-span-1 bg-black h-96 flex flex-wrap content-center">
                <div class="w-full text-center text-4xl text-white">What is {{ $service->name }}?</div>
            </div>
        </div>

        <!-- Product Bullets -->
        <div class="grid grid-cols-2">
            <div class="col-span-2 sm:col-span-1 bg-gray-200">
                <img src="{{ $service->images->where('tag', 'bulletin')->isEmpty() ? '/images/services/bulletin_missing.jpg' : Storage::url($service->images->where('tag', 'bulletin')->first()->url) }}" alt="">
            </div>
            
            <div class="col-span-2 sm:col-span-1 flex flex-wrap content-center">
                <div class="p-12">
                    <div class="service-bullets">
                        {!! $service->bullets !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews -->
        @if(!$service->reviews->isEmpty())
            <div class="bg-white py-20">
                <x-section title="Don't Take Our Word For It">
                    <div>
                        <div class="mb-12">
                            <div class="text-center text-slate-500">Here’s what our patients have to say about their experience with this service.</div>
                        </div>
                        <div class="grid grid-cols-2 gap-8">
                            @foreach ($service->reviews as $review)
                                <div class="col-span-2 sm:col-span-1 p-6">
                                    <div class="flex flex-row">
                                        <img src="{{ $review->image() }}" alt="" class="hidden sm:block h-28 w-28">
                                        <div class="sm:px-8">
                                            <div>
                                                {!! $review->comments !!}
                                            </div>
                                            <div class="flex flex-row items-center mt-4">
                                                <img src="{{ $review->image() }}" alt="" class="block sm:hidden h-8 w-8">
                                                <div class="text-xl pt-1 pl-4">- {{ $review->name }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </x-section>
            </div>
        @endif

        <!-- Youtube -->
        <div class="grid grid-cols-2 bg-gray-100">
            <div class="col-span-2 sm:col-span-1">
                <div class="flex justify-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $service->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="order-first sm:order-last col-span-2 sm:col-span-1 flex flex-wrap content-center">
                <div class="w-full text-center text-5xl font-semibold py-8"><span class="text-spa-200">Watch</span> & Learn.</div>
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
        <div class="max-w-7xl mx-auto py-12 px-6 sm:px-0">
            <div class="grid grid-cols-4 gap-3">
                <div class="col-span-4 sm:col-span-1 text-4xl font-black mb-4 sm:mb-0">
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