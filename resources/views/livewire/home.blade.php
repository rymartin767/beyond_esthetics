<div class="bg-pink-300">
    <!-- JumboTron Intro -->
    <div class="bg-white">
        <x-section>
            <div class="grid grid-cols-2">
                <div class="col-span-3 sm:col-span-1 bg-spa-200">
                    <img src="images/cover.jpg" alt="Tonya Goulding, Owner">
                </div>
                <div class="col-span-3 sm:col-span-1 flex flex-col bg-black p-6 sm:p-24">
                    <div class="flex flex-col border-l-4 border-spa-200 text-white text-3xl sm:text-4xl">
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
            <div class="grid grid-cols-3">
                <div class="col-span-3 sm:col-span-2 flex flex-wrap content-center">
                    <div class="border-l-4 border-black">
                        <div class="pl-4">
                            <div class="font-mont text-5xl">Tonya Goulding</div>
                            <div class="mt-4 font-mont text-xl tracking-wide">
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
                <div class="col-span-3 sm:col-span-1">
                    <img src="images/tonya.png" alt="Tonya Goulding, Owner" class="rounded-full">
                </div>
            </div>

            <div class="grid grid-cols-4 gap-3 mt-3">
                @forelse ($employees as $employee)
                    <div class="col-span-4 sm:col-span-1 flex flex-col flex-wrap h-full">
                        <div>
                            @production
                                <img src="{{ Storage::url($employee->image_url) }}" alt="{{ $employee->name }}">
                            @else
                                <img src="images/tonya.png" alt="{{ $employee->name }}">
                            @endproduction
                        </div>
                        <div>
                            <div class="p-4 font-mont bg-white h-36">
                                <div class="text-xl">{{ $employee->name }}</div>
                                @foreach (explode('-', $employee->title) as $title)
                                    <div class="text-sm tracking-wider">{{ $title }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </x-section>
    </div>

    <!-- Reviews -->
    <div class="bg-white">
        <x-section title="Don't Take Our Word For It">
            <div class="text-center mt-4 mb-16 text-gray-500 text-lg">Here's what our patients have to say about their experience.</div>
            <div class="grid grid-cols-2 gap-8">
                <!-- Fran -->
                <div class="col-span-2 sm:col-span-1">
                    <div class="flex flex-row">
                        <img src="images/quote.svg" alt="" class="h-24 w-24">
                        <div class="px-8">
                            <div>
                                "Oh my stars these people are amazing, considerate, kind, loving people. They make you feel so special. I have never met in my entire life a group of people that works so well together, that care for each other and make their clients feel a part of the group. It is genuine it is not fake that’s what I love about you all! I will never be able to thank you All for what you have done for me. Thank you for being apart of my lift."
                            </div>
                            <div class="mt-4 text-xl">
                                - Fran
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Danielle  -->
                <div class="col-span-2 sm:col-span-1">
                    <div class="flex flex-row">
                        <img src="images/quote.svg" alt="" class="h-24 w-24">
                        <div class="px-8">
                            <div>
                                Such wonderful people!! I’m a travel nurse and self care is a priority for me! Tonya and all the staff there have been amazing and so helpful! If you don’t have a membership it’s well worth it! Invest in yourself ladies! We invest so much into others!
                            </div>
                            <div class="mt-4 text-xl">
                                - Danielle
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sasha -->
                <div class="col-span-2 sm:col-span-1">
                    <div class="flex flex-row">
                        <img src="images/quote.svg" alt="" class="h-24 w-24">
                        <div class="px-8">
                            <div>
                                And I have also been prayed for when I was in before. This is why you guys will always be the BEST! Because it’s more than all the services and treatments, you guys actually care about the people! That’s what sets you above the rest!
                            </div>
                            <div class="mt-4 text-xl">
                                - Sasha
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Katie -->
                <div class="col-span-2 sm:col-span-1">
                    <div class="flex flex-row">
                        <img src="images/quote.svg" alt="" class="h-24 w-24">
                        <div class="px-8">
                            <div>
                                From the moment I came to Beyond Esthetics I instantly felt welcomed. I love the atmosphere, the knowledgeable staff that now feel like family, and the quality of work they give. I highly recommend BE for any beauty needs! They are the best!
                            </div>
                            <div class="mt-4 text-xl">
                                - Katie
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inez -->
                <div class="col-span-2 sm:col-span-1">
                    <div class="flex flex-row">
                        <img src="images/quote.svg" alt="" class="h-24 w-24">
                        <div class="px-8">
                            <div>
                                I am so pleased with the services/treatments that Beyond Esthetics offers. I don’t need to go out of town to get the newest technologies! Tonya and the staff are amazing and I love every appointment! Beyond 5 stars!
                            </div>
                            <div class="mt-4 text-xl">
                                - Inez
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Jackie -->
                <div class="col-span-2 sm:col-span-1">
                    <div class="flex flex-row">
                        <img src="images/quote.svg" alt="" class="h-24 w-24">
                        <div class="px-8">
                            <div>
                                I love being a member and receiving the product of the month!!!!! Thanks again for all the amazing things you do! I am absolutely hooked! Can’t wait to return for my self love day!!!!
                            </div>
                            <div class="mt-4 text-xl">
                                - Jackie
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-section>
    </div>
</div>
