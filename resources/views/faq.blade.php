<x-app-layout>
    @foreach ($services as $service)
        <x-section title="{{ $service->name }}" class="{{ $loop->odd ? 'bg-gray-200' : 'bg-gray-100' }}">
            @include('layouts.elements.faq', [
                'faqs' => $service->faqs->chunk(ceil($service->faqs->count() / 2))
            ])
        </x-section>
    @endforeach
</x-app-layout>