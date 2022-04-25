<x-section title="Join Our Newsletter Group!" class="max-w-xl mx-auto py-12">
    <div x-data="{ show: @entangle('showForm') }">
        <form wire:submit.prevent="formSubmitted" x-data="{ shown: false }" x-intersect="shown = true" x-show="show" class="flex flex-col space-y-3">
            <input x-show="shown" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" type="text" wire:model="first_name" class="p-2 border-2 bg-gray-50 border-spa-200" placeholder="First Name" />
            @error('first_name')
                <div class="italic text-sm text-semibold text-red-500">{{ $message }}</div>
            @enderror
            <input x-show="shown" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" type="text" wire:model="last_name" class="p-2 border-2 bg-gray-50 border-spa-200" placeholder="Last Name" />
            @error('last_name')
                <div class="italic text-sm text-semibold text-red-500">{{ $message }}</div>
            @enderror
            <input x-show="shown" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" type="text" wire:model="email" class="p-2 border-2 bg-gray-50 border-spa-200" placeholder="Email" />
            @error('email')
                <div class="italic text-sm text-semibold text-red-500">{{ $message }}</div>
            @enderror
            <button x-show="shown" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" type="submit" class="bg-spa-200 text-white p-2 flex items-center justify-center">
                <svg wire:loading wire:target="formSubmitted" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                <span>Submit Form</span>
            </button>
        </form>

        <div x-show="!show" x-transition:enter="transition ease-out duration-600" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" class="bg-gray-100 p-6">
            <div class="text-center text-2xl text-spa-200">
                You have successfully subscribed!
            </div>
        </div>
    </div>
</x-section>