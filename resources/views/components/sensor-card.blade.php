@props(['title', 'description', 'color' => 'primary', 'delay' => 0])

@php
    $colorMap = [
        'primary' => [
            'gradient' => 'from-primary to-primary-dark',
            'glow' => 'glow-blue',
            'bg' => 'from-primary/10 to-primary/5 dark:from-primary/20 dark:to-primary/10',
            'border' => 'border-primary/20 dark:border-primary/30',
            'text' => 'text-primary dark:text-primary-light',
        ],
        'accent' => [
            'gradient' => 'from-accent to-accent-light',
            'glow' => 'glow-cyan',
            'bg' => 'from-accent/10 to-accent/5 dark:from-accent/20 dark:to-accent/10',
            'border' => 'border-accent/20 dark:border-accent/30',
            'text' => 'text-accent dark:text-accent-light',
        ],
        'neural' => [
            'gradient' => 'from-neural to-neural-light',
            'glow' => 'glow-purple',
            'bg' => 'from-neural/10 to-neural/5 dark:from-neural/20 dark:to-neural/10',
            'border' => 'border-neural/20 dark:border-neural/30',
            'text' => 'text-neural dark:text-neural-light',
        ],
    ];
    $c = $colorMap[$color] ?? $colorMap['primary'];
@endphp

<div
    data-aos="fade-up"
    data-aos-delay="{{ $delay }}"
    class="group relative overflow-hidden rounded-2xl border {{ $c['border'] }}
           bg-gradient-to-br {{ $c['bg'] }}
           p-6 lg:p-8 transition-all duration-300 hover:-translate-y-1
           hover:shadow-xl"
>
    {{-- Decorative circle --}}
    <div class="absolute -top-10 -right-10 w-32 h-32 rounded-full bg-gradient-to-br {{ $c['gradient'] }} opacity-10 group-hover:opacity-20 transition-opacity duration-300"></div>

    <div class="relative">
        {{-- Pulse indicator --}}
        <div class="flex items-center gap-2 mb-4">
            <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-gradient-to-r {{ $c['gradient'] }} opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-gradient-to-r {{ $c['gradient'] }}"></span>
            </span>
            <span class="text-xs font-semibold uppercase tracking-wider {{ $c['text'] }}">Active Sensor</span>
        </div>

        <h3 class="text-xl font-bold text-neutral-900 dark:text-white mb-3">{{ $title }}</h3>
        <p class="text-sm text-neutral-600 dark:text-neutral-400 leading-relaxed">{{ $description }}</p>

        {{-- Slot for extra content --}}
        @if ($slot->isNotEmpty())
            <div class="mt-4">
                {{ $slot }}
            </div>
        @endif
    </div>
</div>
