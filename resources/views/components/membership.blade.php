<div class="col-span-3 sm:col-span-1">
    <div class="flex flex-col">
        <img src="/images/specials/{{ $membership->name }}_membership.jpg" alt="{{ $membership->name }} Membership">
        <div class="shadow-md px-6">
            <div>
                {{ $membership->description }}
            </div>
            <div class="flex justify-between items-center border-t-2 border-spa-100 mt-3 p-3 text-xl text-spa-200 font-bold">
                <div>{{ $membership->price }}</div>
                <div><a href="{{ $membership->link }}" target="_blank">Get Enrolled</a></div>
            </div>
        </div>
    </div>
</div>