<div {{ $attributes->merge(['class' => 'py-6 min-h-screen sm:min-h-full']) }}>
    <div class="max-w-7xl mx-auto">
        
        @isset($title)
            <div class="border-l-4 border-spa-200 pl-3 mb-6">
                <div class="font-mont text-3xl sm:text-4xl">{{ $title }}</div>
            </div>
        @endisset
        

        <div>
            {{ $slot }}
        </div>

    </div>
</div>