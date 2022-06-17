<!-- TEAM PHOTO -->
<div class="border-t border-white">
    <div class="bg-contain bg-spa-100" style="background-image: url('images/logo_bg.png');">
        <div class="grid grid-cols-3 h-40 sm:h-96">
            <div class="col-span-1"></div>
            <div class="col-span-2 h-full bg-white bg-cover" style="background-image: url('images/about.webp');"></div>
        </div>
    </div>
</div>

<!-- WE EMPOWER -->
<div class="bg-black py-8">
    <div x-data="{ shown: false }" x-intersect="shown = true">
        <div x-show="shown" x-transition.duration.4000ms class="max-w-7xl mx-auto">
            <div class="text-5xl text-white font-semibold">
                <div class="flex flex-col space-y-2 lg:space-y-0 lg:space-x-2 lg:flex-row justify-center text-center">
                    <div>We Assist.</div>
                    <div>We Empower.</div>
                    <div>We Inspire.</div>
                </div>
            </div>
        </div>
    </div>
</div>