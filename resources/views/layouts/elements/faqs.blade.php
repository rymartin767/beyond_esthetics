<x-section title="All The Details" class="bg-gray-100">
    <div x-data="{ shown: false }" x-intersect="shown = true">
        <div x-show="shown" x-transition.duration.5000ms>
            <div class="flex flex-col">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <!-- LEFT -->
                    <div class="col-span-2 sm:col-span-1">
                        @forelse ($faqs->first() ?? [] as $faq)
                            <x-faq :faq="$faq" />
                        @empty
                            <div></div>
                        @endforelse
                    </div>
                    @if ($faqs->count() > 1)
                        <!-- RIGHT -->
                        <div class="col-span-2 sm:col-span-1">
                            @foreach ($faqs->last() as $faq)
                                <x-faq :faq="$faq" />
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-section>