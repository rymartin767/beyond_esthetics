<div>
    
    @include('home._jumbotron')
        
    @include('home._services')
        
    @include('home._tonya')
        
    @include('home._featured-specials', compact('specials'))

    @include('layouts.elements.schedule-now')

    @include('layouts.elements.faqs', [
        'faqs' => $faqs->chunk(ceil($faqs->count() / 2))
    ])

    @include('layouts.elements.reviews', compact('reviews'))

    @include('layouts.elements.cherry')

</div>