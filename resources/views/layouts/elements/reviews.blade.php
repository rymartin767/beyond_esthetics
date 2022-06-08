<div class="bg-white py-20">
    <x-section title="Don't Take Our Word For It">
        <div>
            <div class="mb-12">
                <div class="text-center">Here’s what our patients have to say about this service.</div>
            </div>
            <div class="grid grid-cols-2 gap-8">
                @forelse ($reviews as $review)
                    <x-review :review="$review"></x-review>
                @empty
                    <div class="col-span-2 lg:col-span-1">
                        <div class="flex flex-row">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="fill-current h-24 w-24">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M256 31.1c-141.4 0-255.1 93.12-255.1 208c0 49.62 21.35 94.98 56.97 130.7c-12.5 50.37-54.27 95.27-54.77 95.77c-2.25 2.25-2.875 5.734-1.5 8.734c1.249 3 4.021 4.766 7.271 4.766c66.25 0 115.1-31.76 140.6-51.39c32.63 12.25 69.02 19.39 107.4 19.39c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM127.1 271.1c-17.75 0-32-14.25-32-31.1s14.25-32 32-32s32 14.25 32 32S145.7 271.1 127.1 271.1zM256 271.1c-17.75 0-31.1-14.25-31.1-31.1s14.25-32 31.1-32s31.1 14.25 31.1 32S273.8 271.1 256 271.1zM383.1 271.1c-17.75 0-32-14.25-32-31.1s14.25-32 32-32s32 14.25 32 32S401.7 271.1 383.1 271.1z" />
                                </svg>
                            </div>
                            <div class="flex flex-col space-y-6 px-6">
                                <div>
                                    No reviews for this service yet...
                                </div>
                                <div class="text-xl">
                                    - No Reviews
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </x-section>
</div>