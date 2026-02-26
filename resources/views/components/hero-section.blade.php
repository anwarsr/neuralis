@props(['title', 'subtitle' => null, 'ctaText' => null, 'ctaRoute' => null])

<section class="relative min-h-[60vh] flex items-center pt-24 lg:pt-32 pb-16 overflow-hidden">
    {{-- Background effects --}}
    <div class="absolute inset-0 bg-grid opacity-40 dark:opacity-20"></div>
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/10 dark:bg-primary/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-accent/10 dark:bg-accent/5 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1
            data-aos="fade-up"
            class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight text-neutral-900 dark:text-white"
        >
            {!! $title !!}
        </h1>

        @if ($subtitle)
            <p
                data-aos="fade-up"
                data-aos-delay="100"
                class="mt-6 text-lg sm:text-xl text-neutral-500 dark:text-neutral-400 max-w-2xl mx-auto leading-relaxed"
            >
                {{ $subtitle }}
            </p>
        @endif

        @if ($ctaText && $ctaRoute)
            <div data-aos="fade-up" data-aos-delay="200" class="mt-10">
                <a href="{{ route($ctaRoute) }}"
                   class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl text-base font-semibold text-white bg-gradient-to-r from-primary to-accent hover:from-primary-dark hover:to-primary shadow-xl shadow-primary/25 dark:shadow-primary/40 transition-all duration-300 hover:scale-105">
                    {{ $ctaText }}
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        @endif

        {{-- Extra slot content (e.g., additional buttons, illustrations) --}}
        @if ($slot->isNotEmpty())
            <div data-aos="fade-up" data-aos-delay="300" class="mt-8">
                {{ $slot }}
            </div>
        @endif
    </div>
</section>
