@extends('layouts.app')

@section('title', 'FAQ — Neuralis')
@section('meta_description', 'Pertanyaan yang sering diajukan tentang Neuralis, bandana cerdas dengan teknologi EEG untuk monitoring kesehatan otak.')

@section('content')

    {{-- Hero --}}
    <x-hero-section
        title="Frequently Asked <span class='bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent'>Questions</span>"
        subtitle="Temukan jawaban atas pertanyaan umum tentang Neuralis, cara kerja, dan manfaatnya."
    />

    {{-- FAQ --}}
    <section class="py-20 lg:py-28 relative">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="space-y-4" data-aos="fade-up">

                <x-faq-item
                    question="Apa itu Neuralis?"
                    answer="Neuralis adalah device praktis berbentuk bandana cerdas yang dilengkapi dengan sensor EEG, SpO2, dan PPG untuk monitoring kesehatan otak, penanganan ADHD, dan analisis kesehatan mental secara real-time."
                />

                <x-faq-item
                    question="Bagaimana cara menggunakan Neuralis?"
                    answer="Cukup kenakan Neuralis di kepala seperti bandana biasa. Pastikan sensor menempel dengan baik pada kulit kepala, lalu buka aplikasi Neuralis di smartphone atau komputer Anda. Data akan langsung ditampilkan pada dashboard secara real-time."
                />

                <x-faq-item
                    question="Apakah Neuralis aman digunakan?"
                    answer="Ya, Neuralis dirancang dengan standar keamanan yang tinggi. Sensor EEG hanya mendeteksi aktivitas listrik otak secara pasif (tidak mengirim sinyal apapun ke otak). Semua sensor menggunakan teknologi non-invasif yang aman untuk penggunaan jangka panjang."
                />

                <x-faq-item
                    question="Sensor apa saja yang ada di Neuralis?"
                    answer="Neuralis mengintegrasikan 3 sensor: (1) EEG — mendeteksi aktivitas listrik neuron dengan 256 data per detik, (2) SpO2 — mengukur saturasi oksigen menggunakan cahaya merah 640nm dan inframerah 940nm, (3) PPG — memantau detak jantung dan HRV menggunakan sensor photoplethysmography."
                />

                <x-faq-item
                    question="Apakah Neuralis membutuhkan koneksi internet?"
                    answer="Koneksi internet diperlukan untuk fitur AI Consultant dan Neuro Feedback Music. Namun, fitur dasar seperti brain wave monitoring dan data recording dapat bekerja secara offline. Data akan disinkronisasi saat terhubung kembali."
                />

                <x-faq-item
                    question="Bagaimana Neuralis membantu penderita ADHD?"
                    answer="Neuralis memantau pola gelombang otak dan respons fisiologis untuk mengidentifikasi pemicu distraksi atau hiperaktif. Berdasarkan data ini, sistem memberikan intervensi berbasis neurofeedback secara real-time untuk membantu meningkatkan fokus dan regulasi diri."
                />

                <x-faq-item
                    question="Apa itu fitur Neuro Feedback Music?"
                    answer="Fitur ini menggunakan AI untuk menganalisa kondisi otak Anda saat ini, lalu merekomendasikan tipe musik yang paling cocok untuk kondisi tersebut — misalnya musik untuk relaksasi, fokus, atau tidur. Anda juga bisa memberikan preferensi lagu favorit agar rekomendasi lebih personal."
                />

                <x-faq-item
                    question="Apakah data saya aman?"
                    answer="Keamanan data adalah prioritas utama kami. Semua data dienkripsi baik saat transit maupun saat disimpan. Kami tidak membagikan data kesehatan Anda dengan pihak ketiga tanpa izin eksplisit dari Anda."
                />

                <x-faq-item
                    question="Berapa harga Neuralis?"
                    answer="Neuralis saat ini masih dalam tahap pengembangan. Untuk mendapatkan informasi terbaru tentang harga dan ketersediaan, silakan hubungi kami melalui halaman Kontak atau daftar di waiting list kami."
                />

                <x-faq-item
                    question="Bagaimana cara menghubungi tim Neuralis?"
                    answer="Anda bisa menghubungi kami melalui halaman Kontak di website ini, mengirim email ke info@neuralis.id, atau melalui media sosial kami. Tim kami akan merespons dalam 1x24 jam kerja."
                />

            </div>

            {{-- CTA --}}
            <div data-aos="fade-up" class="mt-16 text-center p-8 rounded-2xl border border-neutral-200 dark:border-white/10 bg-neutral-50 dark:bg-white/5">
                <h3 class="text-xl font-bold text-neutral-900 dark:text-white mb-2">Masih ada pertanyaan?</h3>
                <p class="text-sm text-neutral-500 dark:text-neutral-400 mb-6">Jangan ragu untuk menghubungi kami. Tim kami siap membantu.</p>
                <a href="{{ route('kontak') }}"
                   class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-sm font-semibold text-white bg-gradient-to-r from-primary to-accent shadow-lg shadow-primary/25 dark:shadow-primary/40 transition-all duration-300 hover:scale-105">
                    Hubungi Kami
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

@endsection
