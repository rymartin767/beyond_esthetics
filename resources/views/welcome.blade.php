<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2">
            <div class="col-span-3 sm:col-span-1 bg-purple-200">
                <img src="images/tonya.png" alt="Tonya Goulding, Owner">
            </div>
            <div class="col-span-3 sm:col-span-1 flex flex-col bg-black p-24">
                <div class="flex flex-col border-l-4 border-purple-300 text-white text-4xl">
                    <div class="pl-4">Helping People Feel</div class="pl-4">
                    <div class="pl-4">Beautiful And Confident</div>
                </div>

                <div class="mt-8 font-mont text-white leading-6">
                    We strive for excellence through seeking continuous growth and education to perfect our craft and deliver the highest level of care. We are compassionate and believe in leading with integrity. We put our patient’s needs first and are passionate about creating natural-looking results. We have created a loving and accepting environment to help you look and feel your best!
                </div>
            </div>
        </div>
    </div>

    <x-section title="Services We Provide">
        <div class="grid grid-cols-3 gap-3">
            <div class="col-span-3 sm:col-span-1 h-96 bg-gray-400">column</div>
            <div class="col-span-3 sm:col-span-1 h-96 bg-gray-400">column</div>
            <div class="col-span-3 sm:col-span-1 h-96 bg-gray-400">column</div>
        </div>
    </x-section>

    <div class="bg-spa-100">
        <x-section>
            <div class="grid grid-cols-3">
                <div class="col-span-3 sm:col-span-2 flex flex-wrap content-center">
                    <div class="border-l-4 border-black">
                        <div class="pl-4">
                            <div class="font-mont text-5xl">Tonya Goulding</div>
                            <div class="mt-4 font-mont text-xl">
                                <div>Owner/Founder</div>
                                <div>Certified Esthetician</div>
                                <div>Certified Permanent Makeup Trainer</div>
                                <div>Dermaplane Pro Ohio Trainer</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-3 sm:col-span-1">
                    <img src="images/tonya.png" alt="Tonya Goulding, Owner">
                </div>
            </div>

            <div class="grid grid-cols-4 gap-3 mt-3">
                @foreach (config('general.employees') as $k => $v)
                    <div class="col-span-4 sm:col-span-1">
                        <img src="images/{{$v['image']}}" alt="{{ $k }}">
                        <div class="p-4 font-mont bg-white">
                            <div class="text-xl">{{ $k }}</div>
                            <div>{{ $v['subtitle'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-section>
    </div>
</x-app-layout>