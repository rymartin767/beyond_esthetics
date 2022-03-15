<div class="py-4 px-6 sm:px-20 md:px-24">
    <div x-data="{ showAnswer: false }">
        <div class="flex flex-col">
            <div @click="showAnswer = ! showAnswer" class="text-black p-2 font-bold cursor-pointer bg-white rounded">
                <span x-show="!showAnswer">+</span>
                <span x-show="showAnswer">-</span>
                {{ $faq->question }}
            </div>
            <div x-show="showAnswer" x-cloak x-transition class="text-sm text-white py-2 mb-3">{!! $faq->answer !!}</div>
        </div>
    </div>
</div>