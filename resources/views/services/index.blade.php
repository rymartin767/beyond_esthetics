<x-app-layout>
    @forelse ($services->groupBy('type') as $k => $v)
        <x-section title="{{ str($k)->upper() }} SERVICES">
            <div class="grid grid-cols-3 gap-12">
                @foreach ($v->sortByDesc('msrp') as $service)
                    <div class="col-span-3 sm:col-span-1" id="{{ $k }}">
                        <a href="{{ route('services.show', ['service' => $service->id]) }}">
                            <div class="overflow-hidden">
                                <img 
                                    src="{{ $service->images->where('tag', 'landscape')->isEmpty() ? '/images/services/landscape_missing.jpg' : Storage::url($service->images->where('tag', 'landscape')->first()->url) }}" 
                                    alt="{{ $service->name }} Image" 
                                    class="transition opacity-70 duration-700 ease-in-out hover:scale-110 hover:opacity-100"
                                    loading="lazy"
                                >
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </x-section>
    @empty
        <div>No Services Found</div>
    @endforelse
</x-app-layout>