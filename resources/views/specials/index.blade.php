<x-app-layout>
    <div class="max-w-5xl mx-auto my-12">
        <div class="grid grid-cols-2 gap-6">
            @forelse ($specials as $special)
                <div class="col-span-2 sm:col-span-1 shadow-md">
                    <div>
                        <img src="{{ $special->image() }}" alt="">
                    </div>
                    <div class="text-center text-2xl p-12 border-b-2 border-gray-100">
                        <div class="service-bullets">
                            {!! $special->description !!}
                        </div>
                    </div>
                    <div class="flex justify-between text-2xl px-4 py-2 font-mont">
                        @foreach ($special->locations as $place)
                            <div class="">{{ str($place)->title() }}</div>
                        @endforeach
                    </div>
                    <div class="flex justify-between text-2xl px-4 py-2 font-mont">
                        <div>${{ $special->sale_price }}</div>
                        <div class="text-spa-200 hover:text-black cursor-pointer">Get Enrolled</div>
                    </div>
                </div>
            @empty
                <div class="col-span-2 text-center text-3xl">
                    New Specials Coming! Check back soon!
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>