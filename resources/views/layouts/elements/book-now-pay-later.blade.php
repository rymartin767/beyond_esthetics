<x-section class="py-32">
    <div class="grid grid-cols-4 gap-3 pl-4 lg:pl-0">
        <div class="col-span-4 lg:col-span-1 text-4xl font-mont font-semibold mb-4 sm:mb-0">
            <a href="{{ route('payment-plans') }}" class="hover:text-spa-200">
                <div>Book Now.</div>
                <div>Pay Later.</div>
            </a>
        </div>
        <div class="col-span-4 lg:col-span-1">
            <div class="font-black tracking-wide">NO DOWN PAYMENT</div>
            <div>Book your package now and pay nothing for weeks!</div>
        </div>
        <div class="col-span-4 lg:col-span-1">
            <div class="font-black tracking-wide">EASY MONTHLY PAYMENTS</div>
            <div>Interest-free options to suit your needs.</div>
        </div>
        <div class="col-span-4 lg:col-span-1">
            <div class="font-black tracking-wide">GET TREATED IMMEDIATELY</div>
            <div>
                <a href="{{ route('payment-plans') }}" class="hover:text-spa-200">Click here to apply now.</a>
            </div>
        </div>
    </div>
</x-section>