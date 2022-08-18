<x-section title="{{ $service->name }}">
    <div class="grid grid-cols-2">
        <div class="col-span-2 lg:col-span-1">
            <img src="{{ $service->image('title') }}" alt="{{ $service->name }} Image" loading="lazy">
        </div>
        <div class="col-span-2 lg:col-span-1">
            <div class="grid grid-cols-6 gap-x-3 p-8">
                <div class="col-span-6 text-center text-3xl font-semibold mb-6">{{ $service->name }} targets:</div>
                @forelse ($service->treats as $treatment)
                    <div class="col-span-6 lg:col-span-3 mb-1 border-b border-spa-200">
                        <div class="flex flex-row items-center space-x-2">
                            <img src="{{ is_null($treatment->image) ? Storage::url('images/treatments/null.png') : Storage::url($treatment->image->url) }}" alt="{{ str($treatment)->replace('_', ' ')->title() }} Image" class="h-20 w-20" loading="lazy">
                            <div class="text-xl font-bold text-spa-200">{{ $treatment->name }}</div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-6 text-center font-bold text-xl">Coming Soon!</div>
                @endforelse
            </div>
        </div>
    </div>
</x-section>
