<x-section title="{{ $service->name }}">
    <div class="grid grid-cols-2">
        <div class="col-span-2 lg:col-span-1">
            <img src="{{ $service->images->where('tag', 'title')->isEmpty() ? '/images/services/title_missing.jpg' : Storage::url($service->images->where('tag', 'title')->first()->url) }}" alt="{{ $service->name }} Image" loading="lazy">
        </div>
        <div class="col-span-2 lg:col-span-1 flex flex-wrap content-center mx-auto">
            <div class="grid grid-cols-6 gap-3 p-8">
                <div class="col-span-6 text-center text-3xl font-semibold">{{ $service->name }} targets:</div>
                @forelse ($service->treats as $treatment)
                    <div class="col-span-2">
                        <div class="relative cursor-pointer hover:-translate-y-2 text-white hover:text-black transition duration-150 py-1">
                            <img src="{{ is_null($treatment->image) ? Storage::url('images/treatments/null.png') : Storage::url($treatment->image->url) }}" alt="{{ str($treatment)->replace('_', ' ')->title() }} Image" loading="lazy">
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