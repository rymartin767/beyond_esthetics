<div>
    
    @include('home.jumbotron')
        
    @include('home.services')
        
    @include('home.tonya')
        
    @include('home.featured-specials', compact('specials'))

    @include('layouts.elements.schedule-now')

    @include('layouts.elements.faqs', [
        'faqs' => $faqs->chunk(ceil($faqs->count() / 2))
    ])

    @include('layouts.elements.reviews', compact('reviews'))

</div>