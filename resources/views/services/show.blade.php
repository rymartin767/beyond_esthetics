<x-app-layout>

    <!-- Product -->
    <x-section title="{{ $service->name }}">
        <div class="grid grid-cols-2">
            <div class="col-span-2 lg:col-span-1">
                <img src="{{ $service->images->where('tag', 'title')->isEmpty() ? '/images/services/title_missing.jpg' : Storage::url($service->images->where('tag', 'title')->first()->url) }}" alt="{{ $service->name }} Image">
            </div>
            <div class="col-span-2 lg:col-span-1 flex flex-wrap content-center mx-auto">
                <div class="grid grid-cols-6 gap-3 p-8">
                    <div class="col-span-6 text-center text-3xl font-semibold">{{ $service->name }} targets:</div>
                    @forelse ($service->treats as $treatment)
                        <div class="col-span-2">
                            <div class="relative cursor-pointer hover:-translate-y-2 text-white hover:text-black transition duration-150 py-1">
                                <img src="{{ is_null($treatment->image) ? Storage::url('images/treatments/null.png') : Storage::url($treatment->image->url) }}" alt="{{ str($treatment)->replace('_', ' ')->title() }} Image" loading="lazy" class="">
                                <div class="lg:absolute lg:bottom-0 h-12 flex flex-wrap content-center mx-auto bg-spa-200 w-full p-1 text-xs md:text-sm">
                                    <div class="w-full text-center">{{ $treatment->name }}</div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-6 text-center font-bold text-xl">Coming Soon!</div>
                    @endforelse
                </div>
            </div>
        </div>
    </x-section>

    <!-- Description -->
    <div class="grid grid-cols-2 -mt-6">
        <div class="col-span-2 sm:col-span-1 bg-white h-96 flex flex-wrap content-center">
            <div class="px-6 xl:px-24 text-xl leading-8">
                {!! $service->description !!}
            </div>
        </div>
        <div class="order-first sm:order-last col-span-2 sm:col-span-1 bg-black h-96 flex flex-wrap content-center">
            <div class="w-full text-center text-4xl text-white">
                {{ str($service->name)->endswith('s') ? "What are $service->name?" : "What is $service->name?" }}
            </div>
        </div>
    </div>

    <!-- Product Bullets -->
    <div class="grid grid-cols-2">
        <div class="col-span-2 sm:col-span-1 bg-gray-200">
            <img src="{{ $service->images->where('tag', 'bulletin')->isEmpty() ? '/images/services/bulletin_missing.jpg' : Storage::url($service->images->where('tag', 'bulletin')->first()->url) }}" alt="">
        </div>

        <div class="col-span-2 sm:col-span-1 flex flex-wrap content-center">
            <div class="p-8">
                <div class="rich-editor">
                    {!! $service->bullets !!}
                </div>
            </div>
        </div>
    </div>

    <!-- FAQs -->
    @if(!$service->faqs->isEmpty())
        <x-section title="All The Details" class="bg-gray-100">
            <div x-data="{ shown: false }" x-intersect="shown = true">
                <div x-show="shown" x-transition.duration.5000ms x-cloak>
                    @include('layouts.elements.faq', [
                        'faqs' => $service->faqs->chunk(ceil($service->faqs->count() / 2))
                    ])
                </div>
            </div>
        </x-section>
    @endif

    <!-- Reviews -->
    @if(!$service->reviews->isEmpty())
        <div class="bg-white py-20">
            <x-section title="Don't Take Our Word For It">
                <div>
                    <div class="mb-12">
                        <div class="text-center">Here’s what our patients have to say about this service.</div>
                    </div>
                    <div class="grid grid-cols-2 gap-8">
                        @forelse ($service->reviews as $review)
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
    @endif

    <!-- Youtube -->
    @isset($service->video_url)
        <x-section class="bg-gray-100 min-h-auto">
            <div class="grid grid-cols-2">
                <div class="col-span-2 lg:col-span-1">
                    <div class="flex justify-center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $service->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                    </div>
                </div>
                <div class="order-first lg:order-last col-span-2 lg:col-span-1 flex flex-wrap content-center">
                    <div class="w-full text-center text-4xl sm:text-5xl font-semibold py-8 px-6"><span class="text-spa-200">Watch</span> & Learn.</div>
                </div>
            </div>
        </x-section>
    @endisset

    <!-- Schedule Now -->
    <div class="border-t border-white">
        <div class="bg-contain bg-spa-100" style="background-image: url('/images/logo_bg.png');">
            <div class="grid grid-cols-3 h-40 sm:h-96">
                <div class="col-span-2 h-full bg-white bg-cover" style="background-image: url('/images/wait.png');"></div>
                <div class="col-span-1"></div>
            </div>
        </div>
        <div class="flex flex-col space-y-3 py-3 bg-black">
                <div class="text-center text-2xl lg:text-4xl text-spa-200">wait one second, beauty!</div>
                <div class="text-white text-center lg:text-lg">Are you ready to schedule?</div>
                <div class="text-white text-center lg:text-lg">Click the link below to schedule via Vagaro</div>
                <div class="text-white text-center lg:text-lg">Or... send us a message on Facebook or Instagram!</div>
                <div class="flex flex-row space-x-12 justify-center">
                    <div>
                        <a href="https://www.facebook.com/BeyondEstheticsMansfield">
                            <img src="/images/fb-logo.png" alt="" class="h-16 w-auto">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.vagaro.com/beyondestheticsspa/book-now">
                            <img src="/images/vagaro-logo.png" alt="" class="h-16 w-auto">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/beyondesthetics/">
                            <img src="/images/insta-logo.png" alt="" class="h-16 w-auto">
                        </a>
                    </div>
                </div>
            </div>
    </div>

    <!-- Book Now, Pay Later -->
    <x-section class="py-32">
        <div class="grid grid-cols-4 gap-3 pl-4 lg:pl-0">
            <div class="col-span-4 lg:col-span-1 text-4xl font-mont font-semibold mb-4 sm:mb-0">
                <a href="https://carecredit.com/go/443shq/." target="_blank" class="hover:text-spa-200">
                    <div>Book Now.</div>
                    <div>Pay Later.</div>
                </a>
            </div>
            <div class="col-span-4 lg:col-span-1">
                <div class="font-black tracking-wide">NO DOWN PAYMENT</div>
                <div>Book your package now and pay nothing for weeks!</div>
            </div>
            <div class="col-span-4 lg:col-span-1">
                <div class="font-black tracking-wide">EASY MONTHLY PAYMENTS</div>
                <div>Interest-free options to suit your needs.</div>
            </div>
            <div class="col-span-4 lg:col-span-1">
                <div class="font-black tracking-wide">GET TREATED IMMEDIATELY</div>
                <div>
                    <a href="https://carecredit.com/go/443shq/." target="_blank" class="hover:text-spa-200">Click here to apply now.</a>
                </div>
            </div>
        </div>
    </x-section>
</x-app-layout>

