<div class="flex flex-col">
    <div class="col-span-2 text-white text-center text-4xl font-bold my-10">FAQ</div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <!-- LEFT -->
        <div class="col-span-2 sm:col-span-1">
            @forelse ($faqs->first() ?? [] as $faq)
                <x-faq :faq="$faq"/>
            @empty  
                <div></div>
            @endforelse
        </div>
        @if ($faqs->count() > 1)
            <!-- RIGHT -->
            <div class="col-span-2 sm:col-span-1">
                @foreach ($faqs->last() as $faq)
                    <x-faq :faq="$faq"/>
                @endforeach
            </div>
        @endif
    </div>
</div>