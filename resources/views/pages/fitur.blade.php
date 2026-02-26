@extends('layouts.app')

@section('title', 'Fitur — Neuralis')
@section('meta_description', 'Jelajahi fitur-fitur Neuralis: Brain Waves Monitoring, Multi Parametric Analysis, Neuro Feedback Music, ADHD Management, Mental Health Analysis, dan AI Consultant.')

@section('content')

    {{-- Hero --}}
    <x-hero-section
        title="Fitur <span class='bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent'>Neuralis</span>"
        subtitle="Software Neuralis dilengkapi berbagai fitur canggih untuk membaca, mengolah, dan menganalisis data dari hardware. Berikut fitur-fitur yang kami sediakan."
    />

    {{-- Feature 1: Brain Waves Monitoring --}}
    <section class="py-20 lg:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div data-aos="fade-right">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-primary/20 bg-primary/5 dark:bg-primary/10 text-xs font-semibold text-primary dark:text-primary-light mb-4">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                        Fitur Utama
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-neutral-900 dark:text-white mb-6">
                        Brain Waves <span class="text-primary dark:text-primary-light">Monitoring</span>
                    </h2>
                    <p class="text-neutral-500 dark:text-neutral-400 leading-relaxed mb-6">
                        Fitur utama Neuralis adalah monitoring gelombang otak melalui real-time data yang diterima oleh sistem EEG dari hardware. Fitur ini memungkinkan pengguna memantau kondisi otak secara langsung pada detik itu juga.
                    </p>
                    <ul class="space-y-3">
                        @foreach (['Real-time EEG data streaming (256 data/detik)', 'Visualisasi gelombang otak interaktif', 'Deteksi pola Alpha, Beta, Theta, Delta', 'Riwayat data untuk analisis jangka panjang'] as $item)
                            <li class="flex items-center gap-3 text-sm text-neutral-600 dark:text-neutral-300">
                                <svg class="w-5 h-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div data-aos="fade-left" class="relative">
                    <div class="aspect-video rounded-2xl border border-primary/20 dark:border-primary/30 bg-gradient-to-br from-primary/5 to-surface dark:from-primary/10 dark:to-surface-dark overflow-hidden flex items-center justify-center glow-blue">
                        {{-- Wave animation placeholder --}}
                        <div class="text-center">
                            <svg class="w-20 h-20 mx-auto text-primary/30 dark:text-primary/50 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                            <p class="text-sm text-neutral-400">Brain Wave Visualization</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 2: Multi Parametric Analysis --}}
    <section class="py-20 lg:py-28 relative bg-neutral-50 dark:bg-surface-darker/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div data-aos="fade-right" class="relative order-2 lg:order-1">
                    <div class="aspect-video rounded-2xl border border-accent/20 dark:border-accent/30 bg-gradient-to-br from-accent/5 to-surface dark:from-accent/10 dark:to-surface-dark overflow-hidden flex items-center justify-center glow-cyan">
                        <div class="text-center">
                            <svg class="w-20 h-20 mx-auto text-accent/30 dark:text-accent/50 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                            <p class="text-sm text-neutral-400">Multi Parameter Dashboard</p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left" class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-accent/20 bg-accent/5 dark:bg-accent/10 text-xs font-semibold text-accent dark:text-accent-light mb-4">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        Analisis
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-neutral-900 dark:text-white mb-6">
                        Multi Parametric <span class="text-accent dark:text-accent-light">Analysis</span>
                    </h2>
                    <p class="text-neutral-500 dark:text-neutral-400 leading-relaxed mb-6">
                        Berdasarkan Brain-Waves monitoring, SpO2 sensor, dan Heartbeat sensor, didapatkan hasil data mentah yang kemudian dianalisis untuk menunjukkan hasil kesehatan pengguna secara komprehensif.
                    </p>
                    <ul class="space-y-3">
                        @foreach (['Gabungan data dari 3 sensor dalam satu dashboard', 'Analisis korelasi antar parameter kesehatan', 'Laporan kesehatan yang mudah dipahami', 'Export data untuk konsultasi medis'] as $item)
                            <li class="flex items-center gap-3 text-sm text-neutral-600 dark:text-neutral-300">
                                <svg class="w-5 h-5 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 3: Neuro Feedback Music --}}
    <section class="py-20 lg:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div data-aos="fade-right">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-neural/20 bg-neural/5 dark:bg-neural/10 text-xs font-semibold text-neural dark:text-neural-light mb-4">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                        </svg>
                        AI-Powered
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-neutral-900 dark:text-white mb-6">
                        Neuro Feedback <span class="text-neural dark:text-neural-light">Music</span>
                    </h2>
                    <p class="text-neutral-500 dark:text-neutral-400 leading-relaxed mb-6">
                        Setelah keseluruhan data didapat, AI yang terintegrasi menganalisa tipe musik apa yang cocok untuk kondisi pengguna. Pengguna juga bisa memberikan referensi lagu yang disukai sehingga hasil lebih signifikan.
                    </p>
                    <ul class="space-y-3">
                        @foreach (['AI analisa kondisi mental → rekomendasi musik', 'Personalisasi berdasarkan preferensi pengguna', 'Terapi musik berbasis neurofeedback', 'Library musik kurasi khusus untuk relaksasi & fokus'] as $item)
                            <li class="flex items-center gap-3 text-sm text-neutral-600 dark:text-neutral-300">
                                <svg class="w-5 h-5 text-neural shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div data-aos="fade-left" class="relative">
                    <div class="aspect-video rounded-2xl border border-neural/20 dark:border-neural/30 bg-gradient-to-br from-neural/5 to-surface dark:from-neural/10 dark:to-surface-dark overflow-hidden flex items-center justify-center glow-purple">
                        <div class="text-center">
                            <svg class="w-20 h-20 mx-auto text-neural/30 dark:text-neural/50 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                            </svg>
                            <p class="text-sm text-neutral-400">Neuro Music Interface</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 4: ADHD Management --}}
    <section class="py-20 lg:py-28 relative bg-neutral-50 dark:bg-surface-darker/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div data-aos="fade-right" class="relative order-2 lg:order-1">
                    <div class="aspect-video rounded-2xl border border-primary/20 dark:border-primary/30 bg-gradient-to-br from-primary/5 via-neural/5 to-surface dark:from-primary/10 dark:via-neural/10 dark:to-surface-dark overflow-hidden flex items-center justify-center">
                        <div class="text-center">
                            <svg class="w-20 h-20 mx-auto text-primary/30 dark:text-primary/50 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            <p class="text-sm text-neutral-400">ADHD Management Dashboard</p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left" class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-primary/20 bg-primary/5 dark:bg-primary/10 text-xs font-semibold text-primary dark:text-primary-light mb-4">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        Healthcare
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-neutral-900 dark:text-white mb-6">
                        ADHD <span class="text-primary dark:text-primary-light">Management</span>
                    </h2>
                    <p class="text-neutral-500 dark:text-neutral-400 leading-relaxed mb-6">
                        Melalui pelacakan pola gelombang otak dan respons fisiologis, Neuralis membantu mengidentifikasi pemicu distraksi atau hiperaktif, serta memberikan intervensi berbasis data untuk meningkatkan regulasi diri.
                    </p>
                    <ul class="space-y-3">
                        @foreach (['Deteksi pola distraksi dan hiperaktivitas', 'Intervensi real-time berbasis data neurofeedback', 'Tracking progress regulasi diri harian', 'Laporan perkembangan untuk profesional'] as $item)
                            <li class="flex items-center gap-3 text-sm text-neutral-600 dark:text-neutral-300">
                                <svg class="w-5 h-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 5: Mental Health Analysis --}}
    <section class="py-20 lg:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div data-aos="fade-right">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-accent/20 bg-accent/5 dark:bg-accent/10 text-xs font-semibold text-accent dark:text-accent-light mb-4">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        Wellness
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-neutral-900 dark:text-white mb-6">
                        Mental Health <span class="text-accent dark:text-accent-light">Analysis</span>
                    </h2>
                    <p class="text-neutral-500 dark:text-neutral-400 leading-relaxed mb-6">
                        Neuralis menggunakan trend data dari berbagai sensor agar memudahkan analisis kesehatan mental pengguna dengan pendekatan berbasis data yang akurat dan berkelanjutan.
                    </p>
                    <ul class="space-y-3">
                        @foreach (['Analisis trend kesehatan mental jangka panjang', 'Deteksi dini tanda stres dan kelelahan', 'Insight personal berdasarkan pola harian', 'Rekomendasi gaya hidup berbasis data'] as $item)
                            <li class="flex items-center gap-3 text-sm text-neutral-600 dark:text-neutral-300">
                                <svg class="w-5 h-5 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div data-aos="fade-left" class="relative">
                    <div class="aspect-video rounded-2xl border border-accent/20 dark:border-accent/30 bg-gradient-to-br from-accent/5 to-surface dark:from-accent/10 dark:to-surface-dark overflow-hidden flex items-center justify-center glow-cyan">
                        <div class="text-center">
                            <svg class="w-20 h-20 mx-auto text-accent/30 dark:text-accent/50 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                            <p class="text-sm text-neutral-400">Mental Health Dashboard</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 6: AI Consultant --}}
    <section class="py-20 lg:py-28 relative bg-neutral-50 dark:bg-surface-darker/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div data-aos="fade-right" class="relative order-2 lg:order-1">
                    <div class="aspect-video rounded-2xl border border-neural/20 dark:border-neural/30 bg-gradient-to-br from-neural/5 to-surface dark:from-neural/10 dark:to-surface-dark overflow-hidden flex items-center justify-center glow-purple">
                        <div class="text-center">
                            <svg class="w-20 h-20 mx-auto text-neural/30 dark:text-neural/50 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            <p class="text-sm text-neutral-400">AI Chat Interface</p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left" class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-neural/20 bg-neural/5 dark:bg-neural/10 text-xs font-semibold text-neural dark:text-neural-light mb-4">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        AI Assistant
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-neutral-900 dark:text-white mb-6">
                        AI <span class="text-neural dark:text-neural-light">Consultant</span>
                    </h2>
                    <p class="text-neutral-500 dark:text-neutral-400 leading-relaxed mb-6">
                        Neuralis mengintegrasikan AI sebagai teman dan sarana konsultasi pengguna, sehingga mereka bisa melakukan tanya jawab dengan AI tentang kondisi kesehatan otak dan mental mereka.
                    </p>
                    <ul class="space-y-3">
                        @foreach (['Chatbot AI untuk konsultasi kesehatan otak', 'Jawaban yang dipersonalisasi berdasarkan data sensor', 'Saran dan tips kesehatan berbasis evidence', 'Tersedia 24/7 untuk tanya jawab'] as $item)
                            <li class="flex items-center gap-3 text-sm text-neutral-600 dark:text-neutral-300">
                                <svg class="w-5 h-5 text-neural shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 lg:py-28 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/5 via-accent/5 to-neural/5 dark:from-primary/10 dark:via-accent/10 dark:to-neural/10"></div>
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div data-aos="zoom-in">
                <h2 class="text-3xl sm:text-4xl font-bold text-neutral-900 dark:text-white">
                    Siap Mengenal <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Neuralis</span> Lebih Dekat?
                </h2>
                <p class="mt-4 text-neutral-500 dark:text-neutral-400 max-w-xl mx-auto">
                    Hubungi kami untuk demo produk atau informasi kerjasama.
                </p>
                <div class="mt-8">
                    <a href="{{ route('kontak') }}"
                       class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl text-base font-semibold text-white bg-gradient-to-r from-primary to-accent shadow-xl shadow-primary/25 dark:shadow-primary/40 transition-all duration-300 hover:scale-105">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
