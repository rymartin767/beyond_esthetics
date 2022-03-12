<div class="flex flex-col">
    <div class="col-span-2 text-slate-700 text-center text-4xl font-bold my-10">FAQ</div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 py-10">
        <!-- LEFT -->
        <div class="col-span-2 sm:col-span-1 space-y-6">
            @forelse ($faqs->first() ?? [] as $faq)
                <x-faq :faq="$faq"/>
            @empty  
                <div></div>
            @endforelse
        </div>
        @if ($faqs->count() > 1)
            <!-- RIGHT -->
            <div class="col-span-2 sm:col-span-1 space-y-6">
                @foreach ($faqs->last() as $faq)
                    <x-faq :faq="$faq"/>
                @endforeach
            </div>
        @endif
    </div>
</div>