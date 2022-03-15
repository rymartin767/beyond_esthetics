<div {{ $attributes->merge(['class' => 'py-6 min-h-screen sm:min-h-full']) }}>
    <div class="max-w-7xl mx-auto">
        
        @isset($title)
            <div class="pl-3 border-l-4 border-spa-200 mb-6 font-mont text-3xl sm:text-4xl">{{ $title }}</div>
        @endisset
        

        <div>
            {{ $slot }}
        </div>

    </div>
</div>