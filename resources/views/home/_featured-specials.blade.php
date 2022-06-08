<div>
    <x-section title="Our Featured Specials">
        <div x-data="{ shown: false }" x-intersect="shown = true">
            <div x-show="shown" x-transition.duration.4000ms>
                <div class="grid grid-cols-6 gap-3">
                    @foreach($specials as $special)
                        <div class="col-span-6 sm:col-span-3 md:col-span-2">
                            <a href="/specials/#featured" class="cursor-pointer">
                                <div class="relative">
                                    <img src="{{ $special->image == null ? '/images/services/landscape_missing.jpg' : Storage::url($special->image->url) }}" alt="Featured Special" loading="lazy">
                                    <div class="absolute bottom-0 text-center py-8 text-3xl bg-spa-200 w-full text-white tracking-wider bg-opacity-50 font-semibold">
                                        {{ $special->name }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-section>
</div>