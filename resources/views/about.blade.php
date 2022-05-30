<x-app-layout>

    @include('about._team-photo')
    
    @include('about._mission')

    @include('about._bios')
   
    @include('layouts.elements.faqs', [
        'faqs' => $faqs->chunk(ceil($faqs->count() / 2))
    ])
    
</x-app-layout>