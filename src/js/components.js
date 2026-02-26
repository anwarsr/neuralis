/**
 * Shared UI components — Navbar & Footer
 * Injected into each page via JS to avoid duplication.
 */

export function renderNavbar(activePage = 'home') {
    const links = [
        { href: '/',          id: 'home',    label: 'Home' },
        { href: '/fitur',     id: 'fitur',   label: 'Fitur' },
        { href: '/tentang',   id: 'tentang', label: 'Tentang' },
        { href: '/faq',       id: 'faq',     label: 'FAQ' },
        { href: '/kontak',    id: 'kontak',  label: 'Kontak' },
    ];

    const desktopLinks = links.map(l => {
        const isActive = l.id === activePage;
        const cls = isActive
            ? 'text-primary dark:text-primary-light bg-primary/10 dark:bg-primary/15'
            : 'text-neutral-600 dark:text-neutral-400 hover:text-primary dark:hover:text-primary-light hover:bg-primary/5 dark:hover:bg-primary/10';
        return `<a href="${l.href}" class="px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 ${cls}">${l.label}</a>`;
    }).join('');

    const mobileLinks = links.map(l => {
        const isActive = l.id === activePage;
        const cls = isActive
            ? 'text-primary dark:text-primary-light bg-primary/10'
            : 'text-neutral-600 dark:text-neutral-400 hover:bg-neutral-100 dark:hover:bg-white/5';
        return `<a href="${l.href}" @click="$store.mobileMenu.close()" class="block px-4 py-3 rounded-lg text-sm font-medium transition-colors ${cls}">${l.label}</a>`;
    }).join('');

    return `
<nav
    x-data="{ scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
    :class="scrolled ? 'bg-white/80 dark:bg-surface-darker/80 backdrop-blur-xl shadow-lg shadow-black/5 dark:shadow-black/30' : 'bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <a href="/" class="flex items-center gap-2 group">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-primary to-accent flex items-center justify-center glow-blue-sm">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <span class="text-xl font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Neuralis</span>
            </a>
            <div class="hidden lg:flex items-center gap-1">${desktopLinks}</div>
            <div class="flex items-center gap-2">
                <button @click="$store.darkMode.toggle()" class="p-2 rounded-lg text-neutral-500 dark:text-neutral-400 hover:bg-neutral-100 dark:hover:bg-white/10 transition-colors" :title="$store.darkMode.on ? 'Light Mode' : 'Dark Mode'">
                    <svg x-show="!$store.darkMode.on" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
                    <svg x-show="$store.darkMode.on" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </button>
                <a href="/kontak" class="hidden lg:inline-flex items-center px-5 py-2.5 rounded-xl text-sm font-semibold text-white bg-gradient-to-r from-primary to-accent hover:from-primary-dark hover:to-primary shadow-lg shadow-primary/25 dark:shadow-primary/40 transition-all duration-300 hover:scale-105">Hubungi Kami</a>
                <button @click="$store.mobileMenu.toggle()" class="lg:hidden p-2 rounded-lg text-neutral-500 dark:text-neutral-400 hover:bg-neutral-100 dark:hover:bg-white/10 transition-colors">
                    <svg x-show="!$store.mobileMenu.open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg x-show="$store.mobileMenu.open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    </div>
    <div x-show="$store.mobileMenu.open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4" x-cloak class="lg:hidden border-t border-neutral-200 dark:border-white/10 bg-white/95 dark:bg-surface-darker/95 backdrop-blur-xl">
        <div class="px-4 py-4 space-y-1">
            ${mobileLinks}
            <a href="/kontak" class="block mt-3 text-center px-4 py-3 rounded-xl text-sm font-semibold text-white bg-gradient-to-r from-primary to-accent">Hubungi Kami</a>
        </div>
    </div>
</nav>`;
}

export function renderFooter() {
    const year = new Date().getFullYear();
    return `
<footer class="relative border-t border-neutral-200 dark:border-white/10 bg-white dark:bg-surface-darker">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            <div class="lg:col-span-1">
                <a href="/" class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-primary to-accent flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <span class="text-xl font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Neuralis</span>
                </a>
                <p class="text-sm text-neutral-500 dark:text-neutral-400 leading-relaxed">Bandana cerdas dengan teknologi EEG untuk monitoring kesehatan otak, penanganan ADHD, dan analisis kesehatan mental.</p>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-neutral-900 dark:text-white mb-4">Navigasi</h4>
                <ul class="space-y-2">
                    <li><a href="/" class="text-sm text-neutral-500 dark:text-neutral-400 hover:text-primary dark:hover:text-primary-light transition-colors">Home</a></li>
                    <li><a href="/fitur" class="text-sm text-neutral-500 dark:text-neutral-400 hover:text-primary dark:hover:text-primary-light transition-colors">Fitur</a></li>
                    <li><a href="/tentang" class="text-sm text-neutral-500 dark:text-neutral-400 hover:text-primary dark:hover:text-primary-light transition-colors">Tentang</a></li>
                    <li><a href="/faq" class="text-sm text-neutral-500 dark:text-neutral-400 hover:text-primary dark:hover:text-primary-light transition-colors">FAQ</a></li>
                    <li><a href="/kontak" class="text-sm text-neutral-500 dark:text-neutral-400 hover:text-primary dark:hover:text-primary-light transition-colors">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-neutral-900 dark:text-white mb-4">Fitur</h4>
                <ul class="space-y-2">
                    <li><a href="/fitur" class="text-sm text-neutral-500 dark:text-neutral-400 hover:text-primary dark:hover:text-primary-light transition-colors">Brain Waves Monitoring</a></li>
                    <li><a href="/fitur" class="text-sm text-neutral-500 dark:text-neutral-400 hover:text-primary dark:hover:text-primary-light transition-colors">Multi Parametric Analysis</a></li>
                    <li><a href="/fitur" class="text-sm text-neutral-500 dark:text-neutral-400 hover:text-primary dark:hover:text-primary-light transition-colors">Neuro Feedback Music</a></li>
                    <li><a href="/fitur" class="text-sm text-neutral-500 dark:text-neutral-400 hover:text-primary dark:hover:text-primary-light transition-colors">ADHD Management</a></li>
                    <li><a href="/fitur" class="text-sm text-neutral-500 dark:text-neutral-400 hover:text-primary dark:hover:text-primary-light transition-colors">AI Consultant</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-neutral-900 dark:text-white mb-4">Kontak</h4>
                <ul class="space-y-3">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 mt-0.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span class="text-sm text-neutral-500 dark:text-neutral-400">info@neuralis.id</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 mt-0.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span class="text-sm text-neutral-500 dark:text-neutral-400">Indonesia</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-neutral-200 dark:border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-sm text-neutral-400 dark:text-neutral-500">&copy; ${year} Neuralis. All rights reserved.</p>
            <div class="flex items-center gap-4">
                <a href="#" class="text-neutral-400 hover:text-primary dark:hover:text-primary-light transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                <a href="#" class="text-neutral-400 hover:text-primary dark:hover:text-primary-light transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg></a>
                <a href="#" class="text-neutral-400 hover:text-primary dark:hover:text-primary-light transition-colors"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
            </div>
        </div>
    </div>
</footer>`;
}
