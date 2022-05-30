<x-app-layout>
    <!-- MATT PHOTO -->
    <div class="border-t border-white">
        <div class="bg-contain bg-spa-100" style="background-image: url('images/logo_bg.png');">
            <div class="grid grid-cols-3 h-40 sm:h-96">
                <div class="col-span-1"></div>
                <div class="col-span-2 h-full bg-white bg-cover" style="background-image: url('images/matt.png');"></div>
            </div>
        </div>
    </div>

    <div class="bg-black py-8">
        <div x-data="{ shown: false }" x-intersect="shown = true">
            <div x-show="shown" x-transition.duration.4000ms class="max-w-7xl mx-auto">
                <div class="text-5xl text-white font-semibold">
                    <div class="flex flex-row justify-center text-center">
                        <div>Pre/Post Care Instructions.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-section>
        <div class="grid grid-cols-3 gap-20 py-8">
            @foreach ($services as $service)
                <div class="col-span-3 lg:col-span-1">
                    <div class="flex flex-col">
                        <div class="flex justify-center py-3">
                            <img src="{{ $service->images->where('tag', 'ppt')->isEmpty() ? Storage::url('images/treatments/null.png') : Storage::url($service->images->where('tag', 'ppt')->first()->url) }}" alt="{{ $service->name }} Treatment" class="h-36 w-36 rounded-full shadow-md shadow-black" loading="lazy">
                        </div>
                        <div class="flex flex-col space-y-2">
                            <div class="font-bold text-xl text-center">{{ $service->name }}</div>

                            <x-info-modal title="{{ $service->name }}" subtitle="Here are your pre care tips! Questions? Give us a call.">
                                <x-slot:trigger>
                                    <div class="flex flex-row items-center justify-center text-lg text-spa-200">
                                        <div>Before Your Treatment</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="pl-3 fill-current h-4 w-auto text-spa-200"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/></svg>
                                    </div>
                                </x-slot>
                                <x-slot:info>
                                    @if (is_null($service->ppt))
                                        <div>
                                            {{ $service->name }} information coming soon!
                                        </div>
                                    @else
                                        <div class="rich-editor">
                                            {!! $service->ppt->pre_treatment !!}
                                        </div>
                                    @endif
                                </x-slot>
                            </x-info-modal>
                            

                            <x-info-modal title="{{ $service->name }}" subtitle="Here are your post care tips! Questions? Give us a call.">
                                <x-slot:trigger>
                                    <div class="flex flex-row items-center justify-center text-lg text-spa-200">
                                        <div>After Your Treatment</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="pl-3 fill-current h-4 w-auto text-spa-200"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/></svg>
                                    </div>
                                </x-slot>
                                <x-slot:info>
                                    @if (is_null($service->ppt))
                                        <div>
                                            {{ $service->name }} information coming soon!
                                        </div>
                                    @else
                                        <div class="rich-editor">
                                            {!! $service->ppt->post_treatment !!}
                                        </div>
                                    @endif
                                </x-slot>
                            </x-info-modal>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-section>

    @push('scripts')
        <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    @endpush
</x-app-layout>