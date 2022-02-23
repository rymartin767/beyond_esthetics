<div {{ $attributes->merge(['class' => 'max-w-7xl mx-auto pt-2 pb-6 px-4 sm:px-6 lg:px-8']) }}>
    <div class="mb-6">
        @isset($title)
            <div class="border-l-4 border-purple-400 pl-3 py-1">
                <div class="font-mont text-3xl sm:text-4xl">{{ $title }}</div>
            </div>
        @endisset
    </div>

    <div>
        {{ $slot }}
    </div>
</div>