<div class="grid grid-cols-2">
    <div class="col-span-2 sm:col-span-1 bg-gray-200">
        <img src="{{ $service->bulletinImage() }}" alt="{{ $service->name }}" loading="lazy">
    </div>

    <div class="col-span-2 sm:col-span-1 flex flex-wrap content-center">
        <div class="p-8">
            <div class="rich-editor">
                {!! $service->bullets !!}
            </div>
        </div>
    </div>
</div>