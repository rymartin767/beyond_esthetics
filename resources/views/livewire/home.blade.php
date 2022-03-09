<div>
    <!-- JumboTron Intro -->
    <div class="bg-white">
        <x-section>
            <div class="grid grid-cols-2">
                <div class="col-span-3 lg:col-span-1 bg-spa-200">
                    <img src="images/cover.jpg" alt="Tonya Goulding, Owner">
                </div>
                <div class="col-span-3 lg:col-span-1 flex flex-col bg-black p-6 lg:p-24">
                    <div class="flex flex-col border-l-4 border-spa-200 text-white text-3xl lg:text-4xl">
                        <div class="pl-4">Helping People Feel</div class="pl-4">
                        <div class="pl-4">Beautiful And Confident</div>
                    </div>

                    <div class="mt-8 font-mont text-white leading-6">
                        We strive for excellence through seeking continuous growth and education to perfect our craft and deliver the highest level of care. We are compassionate and believe in leading with integrity. We put our patient’s needs first and are passionate about creating natural-looking results. We have created a loving and accepting environment to help you look and feel your best!
                    </div>
                </div>
            </div>
        </x-section>
    </div>

    <!-- Service We Provide -->
    <div class="bg-white">
        <x-section title="Services We Provide">
            <div class="grid grid-cols-3 gap-3">
                <div class="col-span-3 sm:col-span-1">
                    <a href="/services#medical" class="cursor-pointer">
                        <div class="overflow-hidden">
                            <img src="images/med.png" alt="Service We Provide" class="transition opacity-70 duration-700 ease-in-out hover:scale-125 hover:opacity-100">
                        </div>
                        <div class="mt-2 tracking-widest">MEDICAL</div>
                    </a>
                </div>
                <div class="col-span-3 sm:col-span-1">
                    <a href="/services#spa" class="cursor-pointer">
                        <div class="overflow-hidden">
                            <img src="images/spa.png" alt="Service We Provide" class="transition opacity-70 duration-700 ease-in-out hover:scale-125 hover:opacity-100">
                        </div>
                        <div class="mt-2 tracking-widest">SPA</div>
                    </a>
                </div>
                <div class="col-span-3 sm:col-span-1">
                    <a href="/services#injectables" class="cursor-pointer">
                        <div class="overflow-hidden">
                            <img src="images/inject.png" alt="Service We Provide" class="transition opacity-70 duration-700 ease-in-out hover:scale-125 hover:opacity-100">
                        </div>
                        <div class="mt-2 tracking-widest">INJECTABLES</div>
                    </a>
                </div>
            </div>
        </x-section>
    </div>

    <!-- Employees -->
    <div class="bg-spa-100">
        <x-section>
            <!-- Tonya -->
            <div class="grid grid-cols-3">
                <!-- Tonya Left -->
                <div class="col-span-3 lg:col-span-2 order-last lg:order-first flex flex-wrap content-center">
                    <div class="bg-black text-white p-8">
                        <div class="border-l-4 border-black">
                            <div class="font-mont text-5xl">Tonya Goulding</div>
                            <div class="pl-4 border-l-4 border-spa-200">
                                <div class="mt-4 font-mont text-sm lg:text-xl tracking-wide">
                                    <div>Owner/Founder</div>
                                    <div>Licensed Esthetician</div>
                                    <div>AIIC Master Certified Permanent Makeup Artist</div>
                                    <div>Certified Permanent Makeup Trainer</div>
                                    <div>Certified Dermaplane Pro Trainer</div>
                                    <div>Skincare Specialist</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tonya Image Right -->
                <div class="col-span-3 lg:col-span-1 mb-3 lg:mb-0">
                    <img src="images/tonya.png" alt="Tonya Goulding, Owner">
                </div>
            </div>

            <!-- Employees -->
            <div class="grid grid-cols-4 gap-3 mt-12">
                @forelse ($employees as $employee)
                    <div class="col-span-2 sm:col-span-1 flex flex-col flex-wrap bg-white">
                        <div>
                            <img src="{{ is_null($employee->image) ? '/images/employees/coming_soon.png' : Storage::url($employee->image->url) }}" alt="{{ $employee->name }}">
                        </div>
                        <div>
                            <div class="p-4 font-mont bg-white">
                                <div class="text-xl">{{ $employee->name }}</div>
                                <div>
                                    @forelse ($employee->qualifications as $qual)
                                        <span class="uppercase mr-2">{{ $qual }}</span>
                                    @empty
                                        <span></span>
                                    @endforelse
                                </div>
                                @foreach (explode('-', $employee->title) as $title)
                                    <div class="text-xs tracking-wider">{{ $title }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @empty
                    <div>
                        No Employees Found.
                    </div>
                @endforelse
            </div>
        </x-section>
    </div>

    <!-- Reviews -->
    <div class="bg-white py-20">
        <x-section title="Don't Take Our Word For It">
            <div>
                <div class="mb-12">
                    <div class="text-center text-slate-500">Here’s what our patients have to say about their experience.</div>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    @forelse ($reviews as $review)
                        <div class="col-span-2 lg:col-span-1 p-6">
                            <div class="flex flex-row">
                                @if ($review->social_media == 'facebook')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="hidden lg:block fill-current text-spa-200 h-28 w-28"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                                @endif
                                @if ($review->social_media == 'instagram')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="hidden lg:block fill-current text-spa-200 h-28 w-28"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"/></svg>
                                @endif
                                @if ($review->social_media == 'google')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" class="hidden lg:block fill-current text-spa-200 h-28 w-28"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                                @endif
                                <div class="lg:px-8">
                                    <div>
                                        {!! $review->comments !!}
                                    </div>
                                    <div class="flex flex-row items-center mt-4">
                                        @if ($review->social_media == 'facebook')
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="block lg:hidden fill-current text-spa-200 h-8 w-8"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
                                        @endif
                                        @if ($review->social_media == 'instagram')
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="block lg:hidden fill-current text-spa-200 h-8 w-8"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"/></svg>
                                        @endif
                                        @if ($review->social_media == 'google')
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" class="block lg:hidden fill-current text-spa-200 h-8 w-8"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                                        @endif
                                        <div class="text-xl pt-1 pl-4">- {{ $review->name }}, {{ str($review->social_media)->title() }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row">
                                <img src="images/quote.svg" alt="" class="h-24 w-24">
                                <div class="px-8">
                                    <div>
                                        No reviews for this service yet...
                                    </div>
                                    <div class="mt-4 text-xl">
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
</div>