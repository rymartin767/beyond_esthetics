<div {{ $attributes->merge(['class' => 'max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8']) }}>
    <div class="mb-6">
        @isset($title)
            <div class="border-l-4 border-spa-200 pl-3">
                <div class="font-mont text-3xl sm:text-4xl">{{ $title }}</div>
            </div>
        @endisset
    </div>

    <div>
        {{ $slot }}
    </div>
</div>