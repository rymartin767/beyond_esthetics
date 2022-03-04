<x-app-layout>
    @forelse ($services->groupBy('type') as $k => $v)
        <x-section title="{{ str($k)->upper() }} SERVICES">
            <div class="grid grid-cols-2">
                @foreach ($v->sortByDesc('msrp') as $service)
                    <div class="col-span-2 sm:col-span-1" id="{{ $k }}">
                        <a href="{{ route('services.show', ['service' => $service->id]) }}">
                            <img src="{{ $service->portrait() }}" alt="{{ $service->name }} Image">
                        </a>
                    </div>
                @endforeach
            </div>
        </x-section>
    @empty
        <div>No Services Found</div>
    @endforelse
</x-app-layout>