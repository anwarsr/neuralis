@extends('layouts.app')

@section('title', 'Tentang — Neuralis')
@section('meta_description', 'Pelajari tentang Neuralis, bandana cerdas dengan teknologi EEG untuk monitoring kesehatan otak. Cara kerja, teknologi, dan visi kami.')

@section('content')

    {{-- Hero --}}
    <x-hero-section
        title="Tentang <span class='bg-gradient-to-r from-primary to-neural bg-clip-text text-transparent'>Neuralis</span>"
        subtitle="Memahami kesehatan otak dengan teknologi yang nyaman, akurat, dan dapat diakses oleh semua orang."
    />

    {{-- About --}}
    <section class="py-20 lg:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl sm:text-4xl font-bold text-neutral-900 dark:text-white mb-6">
                        Apa itu <span class="text-primary dark:text-primary-light">Neuralis</span>?
                    </h2>
                    <div class="space-y-4 text-neutral-500 dark:text-neutral-400 leading-relaxed">
                        <p>
                            Neuralis adalah device praktis berbentuk bandana cerdas dengan fitur health-care dan penanganan ADHD. Dirancang untuk digunakan pada kepala dengan nyaman, Neuralis mengintegrasikan teknologi EEG (Elektroencefalogram) pada hardware-nya.
                        </p>
                        <p>
                            Dengan menggabungkan beberapa sensor canggih dalam satu perangkat ringan, Neuralis memungkinkan pengguna memantau kondisi kesehatan otak mereka secara real-time tanpa perlu ke laboratorium atau rumah sakit.
                        </p>
                        <p>
                            Didukung software yang intuitif dan AI terintegrasi, Neuralis tidak hanya membaca data — tetapi juga menganalisis, memberikan feedback, dan membantu pengguna dalam menjaga kesehatan mental mereka.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <div class="relative p-8 rounded-2xl border border-primary/10 dark:border-primary/20 bg-gradient-to-br from-primary/5 to-transparent dark:from-primary/10">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center p-4">
                                <p class="text-3xl font-bold text-primary dark:text-primary-light">EEG</p>
                                <p class="text-xs text-neutral-400 mt-1">Elektroensefalogram</p>
                            </div>
                            <div class="text-center p-4">
                                <p class="text-3xl font-bold text-accent dark:text-accent-light">SpO2</p>
                                <p class="text-xs text-neutral-400 mt-1">Saturasi Oksigen</p>
                            </div>
                            <div class="text-center p-4">
                                <p class="text-3xl font-bold text-neural dark:text-neural-light">PPG</p>
                                <p class="text-xs text-neutral-400 mt-1">Photoplethysmography</p>
                            </div>
                            <div class="text-center p-4">
                                <p class="text-3xl font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">AI</p>
                                <p class="text-xs text-neutral-400 mt-1">Artificial Intelligence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- How It Works --}}
    <section class="py-20 lg:py-28 relative bg-neutral-50 dark:bg-surface-darker/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading subtitle="Cara Kerja">
                Dari Sensor ke <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Insight</span>
            </x-section-heading>

            <div class="relative">
                {{-- Timeline line --}}
                <div class="hidden lg:block absolute left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-primary/30 via-accent/30 to-neural/30"></div>

                <div class="space-y-12 lg:space-y-0">
                    {{-- Step 1 --}}
                    <div class="relative lg:flex lg:items-center lg:gap-8 lg:pb-16" data-aos="fade-up">
                        <div class="lg:w-1/2 lg:text-right lg:pr-12">
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 dark:bg-primary/20 text-xs font-bold text-primary dark:text-primary-light mb-3">
                                Step 1
                            </div>
                            <h3 class="text-xl font-bold text-neutral-900 dark:text-white mb-2">Deteksi Sinyal</h3>
                            <p class="text-sm text-neutral-500 dark:text-neutral-400">
                                Sensor EEG mendeteksi aktivitas listrik pada sekumpulan neuron di otak. Sensor SpO2 mengukur saturasi oksigen, dan sensor PPG memantau detak jantung melalui aliran darah.
                            </p>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-4 -translate-x-1/2 w-10 h-10 rounded-full bg-gradient-to-br from-primary to-primary-dark items-center justify-center text-white font-bold text-sm glow-blue-sm">
                            1
                        </div>
                        <div class="lg:w-1/2 lg:pl-12 mt-4 lg:mt-0"></div>
                    </div>

                    {{-- Step 2 --}}
                    <div class="relative lg:flex lg:items-center lg:gap-8 lg:pb-16" data-aos="fade-up" data-aos-delay="100">
                        <div class="lg:w-1/2 lg:pr-12"></div>
                        <div class="hidden lg:flex absolute left-1/2 top-4 -translate-x-1/2 w-10 h-10 rounded-full bg-gradient-to-br from-accent to-accent-light items-center justify-center text-white font-bold text-sm glow-cyan">
                            2
                        </div>
                        <div class="lg:w-1/2 lg:pl-12">
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent/10 dark:bg-accent/20 text-xs font-bold text-accent dark:text-accent-light mb-3">
                                Step 2
                            </div>
                            <h3 class="text-xl font-bold text-neutral-900 dark:text-white mb-2">Pengolahan Data</h3>
                            <p class="text-sm text-neutral-500 dark:text-neutral-400">
                                Data mentah dari 3 sensor dikirim ke software Neuralis. EEG menghasilkan 256 data per detik yang kemudian diproses dan difilter untuk menghasilkan informasi yang akurat.
                            </p>
                        </div>
                    </div>

                    {{-- Step 3 --}}
                    <div class="relative lg:flex lg:items-center lg:gap-8 lg:pb-16" data-aos="fade-up" data-aos-delay="200">
                        <div class="lg:w-1/2 lg:text-right lg:pr-12">
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-neural/10 dark:bg-neural/20 text-xs font-bold text-neural dark:text-neural-light mb-3">
                                Step 3
                            </div>
                            <h3 class="text-xl font-bold text-neutral-900 dark:text-white mb-2">Analisis AI</h3>
                            <p class="text-sm text-neutral-500 dark:text-neutral-400">
                                AI menganalisis data gabungan dari semua sensor, mengenali pola gelombang otak, mengukur korelasi kesehatan, dan mendeteksi anomali atau tanda-tanda yang perlu diwaspadai.
                            </p>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-4 -translate-x-1/2 w-10 h-10 rounded-full bg-gradient-to-br from-neural to-neural-light items-center justify-center text-white font-bold text-sm glow-purple">
                            3
                        </div>
                        <div class="lg:w-1/2 lg:pl-12 mt-4 lg:mt-0"></div>
                    </div>

                    {{-- Step 4 --}}
                    <div class="relative lg:flex lg:items-center lg:gap-8" data-aos="fade-up" data-aos-delay="300">
                        <div class="lg:w-1/2 lg:pr-12"></div>
                        <div class="hidden lg:flex absolute left-1/2 top-4 -translate-x-1/2 w-10 h-10 rounded-full bg-gradient-to-br from-primary to-accent items-center justify-center text-white font-bold text-sm glow-blue-sm">
                            4
                        </div>
                        <div class="lg:w-1/2 lg:pl-12">
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 dark:bg-primary/20 text-xs font-bold text-primary dark:text-primary-light mb-3">
                                Step 4
                            </div>
                            <h3 class="text-xl font-bold text-neutral-900 dark:text-white mb-2">Feedback & Insight</h3>
                            <p class="text-sm text-neutral-500 dark:text-neutral-400">
                                Pengguna menerima hasil monitoring real-time, analisis kesehatan, rekomendasi musik neurofeedback, serta konsultasi AI — semua melalui tampilan software yang intuitif.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Technology Detail --}}
    <section class="py-20 lg:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading subtitle="Teknologi">
                Detail <span class="bg-gradient-to-r from-primary to-neural bg-clip-text text-transparent">Teknis</span>
            </x-section-heading>

            <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
                {{-- EEG --}}
                <div data-aos="fade-up" class="p-6 lg:p-8 rounded-2xl border border-primary/15 dark:border-primary/25 bg-white dark:bg-white/5">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 dark:bg-primary/20 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-neutral-900 dark:text-white mb-3">EEG Sensor</h3>
                    <p class="text-sm text-neutral-500 dark:text-neutral-400 mb-4">Elektroensefalogram — mendeteksi aktivitas listrik neuron</p>
                    <div class="space-y-2 text-xs text-neutral-400">
                        <div class="flex justify-between p-2 rounded-lg bg-neutral-50 dark:bg-white/5">
                            <span>Sample Rate</span>
                            <span class="font-semibold text-primary dark:text-primary-light">256 Hz</span>
                        </div>
                        <div class="flex justify-between p-2 rounded-lg bg-neutral-50 dark:bg-white/5">
                            <span>Band Deteksi</span>
                            <span class="font-semibold text-primary dark:text-primary-light">Alpha, Beta, Theta, Delta</span>
                        </div>
                        <div class="flex justify-between p-2 rounded-lg bg-neutral-50 dark:bg-white/5">
                            <span>Output</span>
                            <span class="font-semibold text-primary dark:text-primary-light">Real-time Stream</span>
                        </div>
                    </div>
                </div>

                {{-- SpO2 --}}
                <div data-aos="fade-up" data-aos-delay="100" class="p-6 lg:p-8 rounded-2xl border border-accent/15 dark:border-accent/25 bg-white dark:bg-white/5">
                    <div class="w-12 h-12 rounded-xl bg-accent/10 dark:bg-accent/20 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-accent dark:text-accent-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-neutral-900 dark:text-white mb-3">SpO2 Sensor</h3>
                    <p class="text-sm text-neutral-500 dark:text-neutral-400 mb-4">Saturasi oksigen pada hemoglobin</p>
                    <div class="space-y-2 text-xs text-neutral-400">
                        <div class="flex justify-between p-2 rounded-lg bg-neutral-50 dark:bg-white/5">
                            <span>Cahaya Merah</span>
                            <span class="font-semibold text-red-400">640 nm</span>
                        </div>
                        <div class="flex justify-between p-2 rounded-lg bg-neutral-50 dark:bg-white/5">
                            <span>Cahaya Inframerah</span>
                            <span class="font-semibold text-accent dark:text-accent-light">940 nm</span>
                        </div>
                        <div class="flex justify-between p-2 rounded-lg bg-neutral-50 dark:bg-white/5">
                            <span>Deteksi</span>
                            <span class="font-semibold text-accent dark:text-accent-light">HbO2 & Hb</span>
                        </div>
                    </div>
                </div>

                {{-- PPG --}}
                <div data-aos="fade-up" data-aos-delay="200" class="p-6 lg:p-8 rounded-2xl border border-neural/15 dark:border-neural/25 bg-white dark:bg-white/5">
                    <div class="w-12 h-12 rounded-xl bg-neural/10 dark:bg-neural/20 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-neural dark:text-neural-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-neutral-900 dark:text-white mb-3">PPG Sensor</h3>
                    <p class="text-sm text-neutral-500 dark:text-neutral-400 mb-4">Photoplethysmography — detak jantung</p>
                    <div class="space-y-2 text-xs text-neutral-400">
                        <div class="flex justify-between p-2 rounded-lg bg-neutral-50 dark:bg-white/5">
                            <span>Cahaya</span>
                            <span class="font-semibold text-green-400">Hijau (diserap darah)</span>
                        </div>
                        <div class="flex justify-between p-2 rounded-lg bg-neutral-50 dark:bg-white/5">
                            <span>Metode</span>
                            <span class="font-semibold text-neural dark:text-neural-light">PPG Filtering</span>
                        </div>
                        <div class="flex justify-between p-2 rounded-lg bg-neutral-50 dark:bg-white/5">
                            <span>Output</span>
                            <span class="font-semibold text-neural dark:text-neural-light">HRV Data</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
