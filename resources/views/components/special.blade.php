<div class="col-span-3 sm:col-span-1">
    <div class="flex flex-col">
        <img src="{{ is_null($special->image) ? '/images/services/landscape_missing.jpg' : Storage::url($special->image->url) }}" alt="Spa Membership">
        <div class="shadow-md px-6">
            <div class="mt-3 text-2xl text-center uppercase font-black">{{ $special->name }}</div>
            <div class="py-6 text-xl font-black">All The Details:</div>
            <div class="rich-editor">
                {!! $special->description !!}
            </div>
            <div class="flex justify-between items-center border-t-2 border-spa-100 mt-3 p-3 text-xl text-spa-200 font-bold">
                <div>${{ $special->sale_price }}</div>
                <div class=""><a href="mailto:beyondestheticsspa@gmail.com" target="_blank">Schedule Now!</a></div>
            </div>
        </div>
    </div>
</div>