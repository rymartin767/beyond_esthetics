<div class="grid grid-cols-2 -mt-6">
    <div class="col-span-2 sm:col-span-1 bg-white h-96 flex flex-wrap content-center">
        <div class="px-6 xl:px-24 text-xl leading-8">
            {!! $service->description !!}
        </div>
    </div>
    <div class="order-first sm:order-last col-span-2 sm:col-span-1 bg-black h-96 flex flex-wrap content-center">
        <div class="w-full text-center text-4xl text-white">
            {{ str($service->name)->endswith('s') ? "What are $service->name?" : "What is $service->name?" }}
        </div>
    </div>
</div>