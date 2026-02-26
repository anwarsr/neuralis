<nav
    x-data="{ scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
    :class="scrolled ? 'bg-white/80 dark:bg-surface-darker/80 backdrop-blur-xl shadow-lg shadow-black/5 dark:shadow-black/30' : 'bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-primary to-accent flex items-center justify-center glow-blue-sm">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <span class="text-xl font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">
                    Neuralis
                </span>
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center gap-1">
                @php
                    $links = [
                        ['route' => 'home', 'label' => 'Home'],
                        ['route' => 'fitur', 'label' => 'Fitur'],
                        ['route' => 'tentang', 'label' => 'Tentang'],
                        ['route' => 'faq', 'label' => 'FAQ'],
                        ['route' => 'kontak', 'label' => 'Kontak'],
                    ];
                @endphp

                @foreach ($links as $link)
                    <a href="{{ route($link['route']) }}"
                       class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200
                              {{ request()->routeIs($link['route'])
                                  ? 'text-primary dark:text-primary-light bg-primary/10 dark:bg-primary/15'
                                  : 'text-neutral-600 dark:text-neutral-400 hover:text-primary dark:hover:text-primary-light hover:bg-primary/5 dark:hover:bg-primary/10' }}">
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </div>

            {{-- Right Actions --}}
            <div class="flex items-center gap-2">
                {{-- Dark Mode Toggle --}}
                <button
                    @click="$store.darkMode.toggle()"
                    class="p-2 rounded-lg text-neutral-500 dark:text-neutral-400 hover:bg-neutral-100 dark:hover:bg-white/10 transition-colors"
                    :title="$store.darkMode.on ? 'Switch to Light Mode' : 'Switch to Dark Mode'"
                >
                    <svg x-show="!$store.darkMode.on" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                    </svg>
                    <svg x-show="$store.darkMode.on" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </button>

                {{-- CTA Button (Desktop) --}}
                <a href="{{ route('kontak') }}"
                   class="hidden lg:inline-flex items-center px-5 py-2.5 rounded-xl text-sm font-semibold text-white bg-gradient-to-r from-primary to-accent hover:from-primary-dark hover:to-primary shadow-lg shadow-primary/25 dark:shadow-primary/40 transition-all duration-300 hover:scale-105">
                    Hubungi Kami
                </a>

                {{-- Mobile Menu Toggle --}}
                <button
                    @click="$store.mobileMenu.toggle()"
                    class="lg:hidden p-2 rounded-lg text-neutral-500 dark:text-neutral-400 hover:bg-neutral-100 dark:hover:bg-white/10 transition-colors"
                >
                    <svg x-show="!$store.mobileMenu.open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="$store.mobileMenu.open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div
        x-show="$store.mobileMenu.open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        x-cloak
        class="lg:hidden border-t border-neutral-200 dark:border-white/10 bg-white/95 dark:bg-surface-darker/95 backdrop-blur-xl"
    >
        <div class="px-4 py-4 space-y-1">
            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}"
                   @click="$store.mobileMenu.close()"
                   class="block px-4 py-3 rounded-lg text-sm font-medium transition-colors
                          {{ request()->routeIs($link['route'])
                              ? 'text-primary dark:text-primary-light bg-primary/10'
                              : 'text-neutral-600 dark:text-neutral-400 hover:bg-neutral-100 dark:hover:bg-white/5' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach

            <a href="{{ route('kontak') }}"
               class="block mt-3 text-center px-4 py-3 rounded-xl text-sm font-semibold text-white bg-gradient-to-r from-primary to-accent">
                Hubungi Kami
            </a>
        </div>
    </div>
</nav>

{{-- x-cloak style --}}
<style>[x-cloak] { display: none !important; }</style>
