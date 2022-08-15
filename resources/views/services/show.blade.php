<x-app-layout>
    @section('title', "Beyond Esthetics Med Spa | $service->name")

    @include('services._show-product')

    @include('services._show-description')
    
    @include('services._show-product-bullets')

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

    @if(!$service->reviews->isEmpty())
        @include('layouts.elements.reviews', ['reviews' => $service->reviews])
    @endif

    <!-- Youtube -->
    @isset($service->video_url)
        <x-section class="bg-gray-100 min-h-auto">
            <div class="grid grid-cols-2 gap-3">
                @foreach ($service->video_urls() as $url)
                    <div class="col-span-2 lg:col-span-1">
                        <div class="flex justify-center">
                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/{{ $url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>
                @endforeach
                
                <div class="order-first {{ $service->video_urls()->count() > 1 ? 'lg:order-first' : 'lg:order-last' }} col-span-2 lg:col-span-1 flex flex-wrap content-center">
                    <div class="w-full text-center text-4xl sm:text-5xl font-semibold py-8 px-6"><span class="text-spa-200">Watch</span> & Learn.</div>
                </div>
            </div>
        </x-section>
    @endisset

    @include('layouts.elements.schedule-now')

    @include('layouts.elements.book-now-pay-later')
</x-app-layout>

