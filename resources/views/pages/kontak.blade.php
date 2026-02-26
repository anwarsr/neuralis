@extends('layouts.app')

@section('title', 'Kontak — Neuralis')
@section('meta_description', 'Hubungi tim Neuralis untuk informasi produk, kolaborasi, atau pertanyaan lainnya.')

@section('content')

    {{-- Hero --}}
    <x-hero-section
        title="Hubungi <span class='bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent'>Kami</span>"
        subtitle="Ada pertanyaan, ide kolaborasi, atau ingin tahu lebih lanjut? Kami senang mendengar dari Anda."
    />

    {{-- Contact Section --}}
    <section class="py-20 lg:py-28 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-5 gap-12 lg:gap-16">

                {{-- Contact Info --}}
                <div class="lg:col-span-2" data-aos="fade-right">
                    <h2 class="text-2xl font-bold text-neutral-900 dark:text-white mb-6">Informasi Kontak</h2>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 shrink-0 rounded-xl bg-primary/10 dark:bg-primary/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-primary dark:text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-semibold text-neutral-900 dark:text-white">Email</h3>
                                <p class="text-sm text-neutral-500 dark:text-neutral-400 mt-1">info@neuralis.id</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 shrink-0 rounded-xl bg-accent/10 dark:bg-accent/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-accent dark:text-accent-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-semibold text-neutral-900 dark:text-white">Lokasi</h3>
                                <p class="text-sm text-neutral-500 dark:text-neutral-400 mt-1">Indonesia</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 shrink-0 rounded-xl bg-neural/10 dark:bg-neural/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-neural dark:text-neural-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-semibold text-neutral-900 dark:text-white">Respons</h3>
                                <p class="text-sm text-neutral-500 dark:text-neutral-400 mt-1">1x24 jam kerja</p>
                            </div>
                        </div>
                    </div>

                    {{-- Social --}}
                    <div class="mt-10">
                        <h3 class="text-sm font-semibold text-neutral-900 dark:text-white mb-4">Ikuti Kami</h3>
                        <div class="flex items-center gap-3">
                            <a href="#" class="w-10 h-10 rounded-xl bg-neutral-100 dark:bg-white/10 flex items-center justify-center text-neutral-500 hover:text-primary hover:bg-primary/10 dark:hover:bg-primary/20 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-xl bg-neutral-100 dark:bg-white/10 flex items-center justify-center text-neutral-500 hover:text-primary hover:bg-primary/10 dark:hover:bg-primary/20 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-xl bg-neutral-100 dark:bg-white/10 flex items-center justify-center text-neutral-500 hover:text-primary hover:bg-primary/10 dark:hover:bg-primary/20 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Contact Form --}}
                <div class="lg:col-span-3" data-aos="fade-left">
                    <div class="p-6 sm:p-8 rounded-2xl border border-neutral-200 dark:border-white/10 bg-white dark:bg-white/5">
                        <h2 class="text-2xl font-bold text-neutral-900 dark:text-white mb-6">Kirim Pesan</h2>

                        @if (session('success'))
                            <div class="mb-6 p-4 rounded-xl bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800/30 text-sm text-green-700 dark:text-green-300">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="mb-6 p-4 rounded-xl bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800/30 text-sm text-red-700 dark:text-red-300">
                                <ul class="list-disc list-inside space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('kontak.store') }}" method="POST" class="space-y-5">
                            @csrf

                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-1.5">Nama</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        class="w-full px-4 py-3 rounded-xl border border-neutral-300 dark:border-white/15 bg-white dark:bg-white/5 text-neutral-900 dark:text-white placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-colors text-sm"
                                        placeholder="Nama lengkap"
                                    >
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-1.5">Email</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        class="w-full px-4 py-3 rounded-xl border border-neutral-300 dark:border-white/15 bg-white dark:bg-white/5 text-neutral-900 dark:text-white placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-colors text-sm"
                                        placeholder="email@contoh.com"
                                    >
                                </div>
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-1.5">Subjek</label>
                                <input
                                    type="text"
                                    id="subject"
                                    name="subject"
                                    value="{{ old('subject') }}"
                                    required
                                    class="w-full px-4 py-3 rounded-xl border border-neutral-300 dark:border-white/15 bg-white dark:bg-white/5 text-neutral-900 dark:text-white placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-colors text-sm"
                                    placeholder="Subjek pesan"
                                >
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-1.5">Pesan</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    required
                                    class="w-full px-4 py-3 rounded-xl border border-neutral-300 dark:border-white/15 bg-white dark:bg-white/5 text-neutral-900 dark:text-white placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-colors text-sm resize-none"
                                    placeholder="Tulis pesan Anda..."
                                >{{ old('message') }}</textarea>
                            </div>

                            <button
                                type="submit"
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-xl text-sm font-semibold text-white bg-gradient-to-r from-primary to-accent hover:from-primary-dark hover:to-primary shadow-lg shadow-primary/25 dark:shadow-primary/40 transition-all duration-300 hover:scale-105"
                            >
                                Kirim Pesan
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
