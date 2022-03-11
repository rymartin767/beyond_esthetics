<div class="col-span-2 lg:col-span-1 font-mont p-4">
    <div class="flex flex-row">
        <div class="hidden lg:block lg:flex-none">
            <img src="images/reviews/{{$review->social_media}}.svg" alt="{{ $review->social_media}} Logo" class="h-16 w-16">
        </div>
        <div class="grow px-6">
            <div class="flex flex-col">
                <div>{!! $review->comments !!}</div>
                <div class="flex flex-row items-center mt-4">
                    <div class="flex-none lg:hidden">
                        <img src="images/reviews/{{$review->social_media}}.svg" alt="{{ $review->social_media}} Logo" class="h-8 w-auto">
                    </div>
                    <div class="text-xl pt-1 pl-3">- {{ $review->name }}</div>
                </div>
            </div>
        </div>
    </div>
</div>