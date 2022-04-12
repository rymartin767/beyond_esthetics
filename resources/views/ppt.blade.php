<x-app-layout>
    <div class="py-24 bg-gradient-to-r from-gray-300 to-purple-300 text-center text-5xl">
        <div class="h-80 text-white">COVER IMAGE HERE....</div>
    </div>
    <div class="py-8 bg-black">
        <div class="text-center text-white text-5xl">Pre/Post Care Treatment Instructions</div>
    </div>
    <x-section>
        <div class="grid grid-cols-3 gap-20 py-8">
            @foreach ($services as $service)
                <div class="col-span-3 lg:col-span-1">
                    <div class="flex flex-col">
                        <div class="flex justify-center py-3">
                            <img src="{{ $service->images->where('tag', 'ppt')->isEmpty() ? Storage::url('images/treatments/null.png') : Storage::url($service->images->where('tag', 'ppt')->first()->url) }}" alt="" class="h-36 w-36 rounded-full">
                        </div>
                        <div class="flex flex-col text-center space-y-2">
                            <div class="font-bold text-xl">{{ $service->name }}</div>

                            <x-info-modal title="{{ $service->name }}" subtitle="Here are your pre care tips! Questions? Give us a call.">
                                <x-slot:trigger>
                                    <div class="flex flex-row items-center justify-center text-lg text-spa-200">
                                        <div>Before Your Treatment</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="pl-3 fill-current h-4 w-auto text-spa-200"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/></svg>
                                    </div>
                                </x-slot>
                                <x-slot:info>
                                    {{ $service->name }} information coming soon!
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
                                    {{ $service->name }} information coming soon!
                                </x-slot>
                            </x-info-modal>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-section>
</x-app-layout>