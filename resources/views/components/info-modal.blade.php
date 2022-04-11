<!-- Alpine Modal v1 -->

<div x-data="{ showModal: false}" x-cloak>
    <!-- Button -->
    <div x-on:click="showModal = true" type="button" class="cursor-pointer">
        {{ $trigger }}
    </div>
 
    <!-- Modal -->
    <div
        x-show="showModal"
        x-on:keydown.escape.prevent.stop="showModal = false"
        role="dialog"
        aria-modal="true"
        x-id="['modal-title']"
        :aria-labelledby="$id('modal-title')"
        class="fixed inset-0 overflow-y-auto"
    >
        <!-- Overlay -->
        <div x-show="showModal" x-transition.opacity class="fixed inset-0 bg-gray-700 bg-opacity-75"></div>
 
        <!-- Panel -->
        <div
            x-show="showModal" x-transition
            x-on:click="showModal = false"
            class="relative min-h-screen flex items-center justify-center p-4"
        >
            <div
                x-on:click.stop
                x-trap.noscroll.inert="showModal"
                class="relative max-w-2xl w-full bg-white border rounded-md p-8 overflow-y-auto"
            >
                <!-- Title -->
                <h2 class="text-3xl font-medium" :id="$id('modal-title')">{{ $title }}</h2>
                <!-- Content -->
                <p class="my-3 text-gray-500 bg-gray-200 rounded p-2 text-center">{{ $subtitle }}</p>
                <!-- Form Slot -->
                <div>
                    {{ $info }}
                    <!-- Buttons -->
                    <div class="mt-8 flex space-x-2 border-t-2 border-slate-400 pt-4">
                        <div class="flex-1 flex justify-end">
                            <button type="button" x-on:click="showModal = false">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>