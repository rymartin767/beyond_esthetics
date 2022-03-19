<div class="py-2 px-6 sm:px-20 md:px-24">
    <div x-data="{ showAnswer: false }">
        <div class="flex flex-col">
            <div @click="showAnswer = ! showAnswer" class="p-3 cursor-pointer bg-white rounded hover:text-spa-200 transition-colors tracking-wider">
                <span x-show="!showAnswer">+</span>
                <span x-show="showAnswer">-</span>
                {{ $faq->question }}
            </div>
            <div x-show="showAnswer" x-cloak x-transition class="text-sm p-6 mb-3">{!! $faq->answer !!}</div>
        </div>
    </div>
</div>