@extends('layouts.app')

@section('title', 'Neuralis — Bandana Cerdas untuk Kesehatan Otak')

@section('content')

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center overflow-hidden">
        {{-- Background effects --}}
        <div class="absolute inset-0 bg-grid opacity-40 dark:opacity-20"></div>
        <div class="absolute top-20 left-10 w-72 h-72 bg-primary/15 dark:bg-primary/8 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute top-40 right-20 w-96 h-96 bg-accent/10 dark:bg-accent/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-1/3 w-80 h-80 bg-neural/10 dark:bg-neural/5 rounded-full blur-3xl animate-pulse"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 lg:pt-32 pb-16">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                {{-- Text --}}
                <div>
                    <div data-aos="fade-right" class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-primary/20 dark:border-primary/30 bg-primary/5 dark:bg-primary/10 mb-6">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                        </span>
                        <span class="text-xs font-semibold text-primary dark:text-primary-light">Next-Gen HealthTech</span>
                    </div>

                    <h1 data-aos="fade-right" data-aos-delay="100" class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight text-neutral-900 dark:text-white">
                        Bandana
                        <span class="bg-gradient-to-r from-primary via-accent to-neural bg-clip-text text-transparent">
                            Cerdas
                        </span>
                        untuk Kesehatan
                        <span class="bg-gradient-to-r from-neural to-primary bg-clip-text text-transparent">
                            Otak
                        </span>
                    </h1>

                    <p data-aos="fade-right" data-aos-delay="200" class="mt-6 text-lg text-neutral-500 dark:text-neutral-400 leading-relaxed max-w-lg">
                        Neuralis mengintegrasikan sensor EEG, SpO2, dan PPG dalam bandana yang nyaman digunakan sehari-hari. Monitor kesehatan otak Anda secara real-time.
                    </p>

                    <div data-aos="fade-right" data-aos-delay="300" class="mt-8 flex flex-wrap gap-4">
                        <a href="{{ route('fitur') }}"
                           class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl text-base font-semibold text-white bg-gradient-to-r from-primary to-accent hover:from-primary-dark hover:to-primary shadow-xl shadow-primary/25 dark:shadow-primary/40 transition-all duration-300 hover:scale-105">
                            Jelajahi Fitur
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="{{ route('tentang') }}"
                           class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl text-base font-semibold text-neutral-700 dark:text-neutral-300 border border-neutral-300 dark:border-white/15 hover:border-primary/30 dark:hover:border-primary/30 hover:bg-primary/5 dark:hover:bg-primary/10 transition-all duration-300">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>

                    {{-- Stats --}}
                    <div data-aos="fade-up" data-aos-delay="400" class="mt-12 grid grid-cols-3 gap-6">
                        <div>
                            <p class="text-2xl lg:text-3xl font-bold text-primary dark:text-primary-light">256</p>
                            <p class="text-xs text-neutral-400">Data per detik</p>
                        </div>
                        <div>
                            <p class="text-2xl lg:text-3xl font-bold text-accent dark:text-accent-light">3</p>
                            <p class="text-xs text-neutral-400">Sensor terintegrasi</p>
                        </div>
                        <div>
                            <p class="text-2xl lg:text-3xl font-bold text-neural dark:text-neural-light">24/7</p>
                            <p class="text-xs text-neutral-400">Monitoring real-time</p>
                        </div>
                    </div>
                </div>

                {{-- Visual / Illustration placeholder --}}
                <div data-aos="fade-left" data-aos-delay="200" class="relative hidden lg:block">
                    <div class="relative w-full aspect-square max-w-md mx-auto">
                        {{-- Outer ring --}}
                        <div class="absolute inset-0 rounded-full border-2 border-dashed border-primary/20 dark:border-primary/30 animate-[spin_30s_linear_infinite]"></div>
                        {{-- Inner ring --}}
                        <div class="absolute inset-8 rounded-full border border-accent/20 dark:border-accent/30 animate-[spin_20s_linear_infinite_reverse]"></div>
                        {{-- Center --}}
                        <div class="absolute inset-16 rounded-full bg-gradient-to-br from-primary/10 to-neural/10 dark:from-primary/20 dark:to-neural/20 backdrop-blur-sm flex items-center justify-center glow-blue">
                            <div class="text-center">
                                <svg class="w-16 h-16 mx-auto text-primary dark:text-primary-light mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                                <p class="text-sm font-bold text-primary dark:text-primary-light">NEURALIS</p>
                                <p class="text-xs text-neutral-400">EEG Powered</p>
                            </div>
                        </div>

                        {{-- Floating sensor badges --}}
                        <div class="absolute top-8 right-8 px-3 py-1.5 rounded-full glass-dark text-xs font-semibold text-primary-light animate-bounce" style="animation-delay: 0s; animation-duration: 3s;">
                            EEG
                        </div>
                        <div class="absolute bottom-16 left-4 px-3 py-1.5 rounded-full glass-dark text-xs font-semibold text-accent-light animate-bounce" style="animation-delay: 1s; animation-duration: 3s;">
                            SpO2
                        </div>
                        <div class="absolute bottom-8 right-16 px-3 py-1.5 rounded-full glass-dark text-xs font-semibold text-neural-light animate-bounce" style="animation-delay: 2s; animation-duration: 3s;">
                            PPG
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sensors Section --}}
    <section class="py-20 lg:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading subtitle="Hardware">
                Tiga Sensor,<br>
                <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Satu Bandana</span>
            </x-section-heading>

            <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
                <x-sensor-card
                    title="Brain-Waves (EEG)"
                    description="Sensor EEG mendeteksi aktivitas listrik pada sekumpulan neuron yang kemudian diubah dalam bentuk 256 data per detik untuk monitoring aktivitas otak real-time."
                    color="primary"
                    :delay="0"
                >
                    <div class="flex items-center gap-2 text-xs text-primary dark:text-primary-light">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                        256 samples/sec
                    </div>
                </x-sensor-card>

                <x-sensor-card
                    title="SpO2 Sensor"
                    description="Mendeteksi saturasi oksigen pada hemoglobin menggunakan cahaya merah (640 nm) dan inframerah (940 nm) untuk mengukur kadar oksigen dalam darah."
                    color="accent"
                    :delay="100"
                >
                    <div class="flex items-center gap-4 text-xs">
                        <span class="text-red-400">640 nm (Merah)</span>
                        <span class="text-neutral-400">•</span>
                        <span class="text-accent dark:text-accent-light">940 nm (IR)</span>
                    </div>
                </x-sensor-card>

                <x-sensor-card
                    title="Heartbeat (PPG)"
                    description="Sensor photoplethysmography memancarkan cahaya hijau yang diserap oleh aliran darah untuk mengukur Heart Rate Variability (HRV) secara akurat."
                    color="neural"
                    :delay="200"
                >
                    <div class="flex items-center gap-2 text-xs text-neural dark:text-neural-light">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        HRV Monitoring
                    </div>
                </x-sensor-card>
            </div>
        </div>
    </section>

    {{-- Features Preview --}}
    <section class="py-20 lg:py-28 relative bg-neutral-50 dark:bg-surface-darker/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading subtitle="Software">
                Fitur <span class="bg-gradient-to-r from-primary to-neural bg-clip-text text-transparent">Unggulan</span>
            </x-section-heading>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-feature-card
                    icon="brain"
                    title="Brain Waves Monitoring"
                    description="Monitoring gelombang otak real-time melalui data EEG. Pantau kondisi otak Anda secara langsung pada detik itu juga."
                    :delay="0"
                />
                <x-feature-card
                    icon="chart"
                    title="Multi Parametric Analysis"
                    description="Analisis data gabungan dari semua sensor untuk memberikan gambaran menyeluruh tentang kondisi kesehatan Anda."
                    :delay="100"
                />
                <x-feature-card
                    icon="music"
                    title="Neuro Feedback Music"
                    description="AI menganalisa musik yang cocok untuk kondisi Anda. Berikan referensi lagu favorit untuk hasil yang lebih personal."
                    :delay="200"
                />
                <x-feature-card
                    icon="shield"
                    title="ADHD Management"
                    description="Pelacakan pola gelombang otak dan respons fisiologis untuk mengidentifikasi pemicu distraksi dan meningkatkan fokus."
                    :delay="0"
                />
                <x-feature-card
                    icon="heart"
                    title="Mental Health Analysis"
                    description="Trend data dari berbagai sensor untuk analisis kesehatan mental yang komprehensif dan berkelanjutan."
                    :delay="100"
                />
                <x-feature-card
                    icon="chat"
                    title="AI Consultant"
                    description="AI terintegrasi sebagai teman konsultasi. Tanya jawab seputar kondisi kesehatan otak dengan mudah."
                    :delay="200"
                />
            </div>

            <div data-aos="fade-up" class="text-center mt-12">
                <a href="{{ route('fitur') }}"
                   class="inline-flex items-center gap-2 text-primary dark:text-primary-light font-semibold hover:gap-3 transition-all duration-300">
                    Lihat semua fitur
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 lg:py-28 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/5 via-accent/5 to-neural/5 dark:from-primary/10 dark:via-accent/10 dark:to-neural/10"></div>
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary/10 dark:bg-primary/5 rounded-full blur-3xl"></div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div data-aos="zoom-in">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-neutral-900 dark:text-white leading-tight">
                    Tertarik dengan
                    <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Neuralis</span>?
                </h2>
                <p class="mt-6 text-lg text-neutral-500 dark:text-neutral-400 max-w-xl mx-auto">
                    Hubungi kami untuk informasi lebih lanjut tentang produk, kolaborasi, atau pertanyaan lainnya.
                </p>
                <div class="mt-10 flex flex-wrap justify-center gap-4">
                    <a href="{{ route('kontak') }}"
                       class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl text-base font-semibold text-white bg-gradient-to-r from-primary to-accent hover:from-primary-dark hover:to-primary shadow-xl shadow-primary/25 dark:shadow-primary/40 transition-all duration-300 hover:scale-105">
                        Hubungi Kami
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                    <a href="{{ route('faq') }}"
                       class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl text-base font-semibold text-neutral-700 dark:text-neutral-300 border border-neutral-300 dark:border-white/15 hover:border-primary/30 dark:hover:border-primary/30 hover:bg-primary/5 dark:hover:bg-primary/10 transition-all duration-300">
                        Baca FAQ
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
