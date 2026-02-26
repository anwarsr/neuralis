@props(['question', 'answer'])

<div
    x-data="{ open: false }"
    class="border border-neutral-200 dark:border-white/10 rounded-xl overflow-hidden transition-colors
           hover:border-primary/20 dark:hover:border-primary/30"
>
    <button
        @click="open = !open"
        class="flex items-center justify-between w-full px-6 py-5 text-left transition-colors
               hover:bg-neutral-50 dark:hover:bg-white/5"
    >
        <span class="text-sm sm:text-base font-semibold text-neutral-900 dark:text-white pr-4">{{ $question }}</span>
        <svg
            :class="open ? 'rotate-180' : ''"
            class="w-5 h-5 shrink-0 text-neutral-400 dark:text-neutral-500 transition-transform duration-200"
            fill="none" stroke="currentColor" viewBox="0 0 24 24"
        >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        x-cloak
        class="px-6 pb-5"
    >
        <p class="text-sm text-neutral-500 dark:text-neutral-400 leading-relaxed">{{ $answer }}</p>
    </div>
</div>
