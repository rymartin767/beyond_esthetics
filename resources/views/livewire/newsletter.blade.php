<x-section title="Join Our Newsletter Group!" class="max-w-xl mx-auto py-12">
    <div x-data="{ show: @entangle('showForm') }">
        <form wire:submit.prevent="formSubmitted" x-data="{ shown: false }" x-intersect="shown = true" x-show="show" class="flex flex-col space-y-3">
            <input x-show="shown" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" type="text" wire:model="name" class="p-2 border-2 bg-gray-50 border-spa-200" placeholder="Name" />
            @error('name')
            <div class="italic text-sm text-semibold text-red-500">{{ $message }}</div>
            @enderror
            <input x-show="shown" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" type="text" wire:model="email" class="p-2 border-2 bg-gray-50 border-spa-200" placeholder="Email" />
            @error('email')
            <div class="italic text-sm text-semibold text-red-500">{{ $message }}</div>
            @enderror
            <button x-show="shown" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" type="submit" class="bg-spa-200 text-white p-2">Submit</button>
        </form>

        <div x-show="!show" x-transition:enter="transition ease-out duration-600" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" class="bg-gray-100 p-6">
            <div class="text-center text-2xl text-spa-200">
                You have successfully subscribed!
            </div>
        </div>
    </div>
</x-section>