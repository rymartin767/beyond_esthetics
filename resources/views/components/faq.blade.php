<div class="py-4 sm:px-20 md:px-24">
    <div x-data="{ showAnswer: false }">
        <div class="flex flex-col">
            <div @click="showAnswer = true" class="text-slate-700 font-bold cursor-pointer">+ {{ $faq->question }}</div>
            <div x-show="showAnswer" x-cloak x-transition class="text-sm text-slate-700 py-2 mb-3">{!! $faq->answer !!}</div>
        </div>
    </div>
</div>