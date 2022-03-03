<x-app-layout>
    @forelse ($services->groupBy('type') as $k => $v)
        <x-section title="{{ str($k)->upper() }} SERVICES">
            <div class="grid grid-cols-2">
                @foreach ($v as $service)
                    <div class="col-span-2 sm:col-span-1">
                        <a href="{{ route('services.show', ['service' => $service->id]) }}">
                            <img src="{{ Storage::url($service->image_urls[0]) }}" alt="{{ $service->name }} Image">
                        </a>
                    </div>
                @endforeach
            </div>
        </x-section>
    @empty
        <div>No Services Found</div>
    @endforelse
</x-app-layout>