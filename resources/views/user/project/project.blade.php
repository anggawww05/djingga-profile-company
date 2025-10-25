@extends('user.main')

@section('container')
    <section id="cover" class="relative bg-gradient-to-br from-[#578E7E] to-[#23272F] py-20 overflow-hidden mt-20">
        <div class="max-w-6xl mx-auto px-6 md:px-12 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Consultation Services
            </h1>
            <div class="w-20 h-1 bg-[#52a08a] rounded mx-auto mb-6"></div>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Dapatkan konsultasi ahli dari tim profesional kami untuk mengembangkan bisnis dan solusi teknologi yang
                tepat sasaran.
            </p>
        </div>
        <div class="absolute top-0 right-0 w-48 h-48 bg-[#52a08a]/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
    </section>

    {{-- Projects Grid Section --}}
    <section class="py-20 bg-gradient-to-br from-[#f8fafc] to-[#e6f4f1] relative">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Project Card 1 --}}
                <div
                    class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                    <div class="relative overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-[#52a08a] to-[#578E7E] flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 3h18v18H3V3zm16 16V5H5v14h14z" />
                                    <path d="M7 7h10v2H7V7zm0 4h10v2H7v-2zm0 4h7v2H7v-2z" />
                                </svg>
                                <p class="text-sm opacity-90">E-Commerce Platform</p>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span
                                class="bg-white/90 text-[#52a08a] px-3 py-1 rounded-full text-xs font-semibold">Website</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#23272F] mb-2 group-hover:text-[#52a08a] transition-colors">
                            Toko Online Fashion
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Platform e-commerce modern dengan fitur lengkap termasuk sistem pembayaran, manajemen inventory,
                            dan dashboard admin yang komprehensif.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Laravel</span>
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">React</span>
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">MySQL</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">2024</span>
                            <a href="{{ route('project.detail') }}"
                                class="text-[#52a08a] hover:text-[#466e62] font-semibold text-sm flex items-center gap-1">
                                Lihat Detail
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Project Card 2 --}}
                <div
                    class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                    <div class="relative overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-[#578E7E] to-[#23272F] flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17 2v2h3v16H4V4h3V2h2v2h6V2h2zm-2 4H9v2h6V6zm0 4H9v2h6v-2z" />
                                </svg>
                                <p class="text-sm opacity-90">Mobile Application</p>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/90 text-[#52a08a] px-3 py-1 rounded-full text-xs font-semibold">Mobile
                                App</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#23272F] mb-2 group-hover:text-[#52a08a] transition-colors">
                            Aplikasi Delivery Food
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Aplikasi mobile untuk layanan delivery makanan dengan fitur real-time tracking, sistem rating,
                            dan pembayaran terintegrasi.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Flutter</span>
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Firebase</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Maps
                                API</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">2024</span>
                            <a href="{{ route('project.detail', 1) }}"
                                class="text-[#52a08a] hover:text-[#466e62] font-semibold text-sm flex items-center gap-1">
                                Lihat Detail
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Project Card 3 --}}
                <div
                    class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                    <div class="relative overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-[#52a08a] to-[#466e62] flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                </svg>
                                <p class="text-sm opacity-90">Company Profile</p>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span
                                class="bg-white/90 text-[#52a08a] px-3 py-1 rounded-full text-xs font-semibold">Website</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#23272F] mb-2 group-hover:text-[#52a08a] transition-colors">
                            Website Company Profile
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Website company profile modern dan responsive dengan desain yang elegan untuk meningkatkan brand
                            awareness perusahaan.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">HTML5</span>
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Tailwind</span>
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">JavaScript</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">2024</span>
                            <a href="{{ route('project.detail', 1) }}"
                                class="text-[#52a08a] hover:text-[#466e62] font-semibold text-sm flex items-center gap-1">
                                Lihat Detail
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Project Card 4 --}}
                <div
                    class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                    <div class="relative overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-[#23272F] to-[#578E7E] flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                                </svg>
                                <p class="text-sm opacity-90">Digital Campaign</p>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/90 text-[#52a08a] px-3 py-1 rounded-full text-xs font-semibold">Digital
                                Marketing</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#23272F] mb-2 group-hover:text-[#52a08a] transition-colors">
                            Digital Marketing Campaign
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Kampanye digital marketing terintegrasi dengan strategi SEO, SEM, dan social media marketing
                            untuk meningkatkan brand awareness.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">SEO</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Google
                                Ads</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Social
                                Media</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">2024</span>
                            <a href="{{ route('project.detail', 1) }}"
                                class="text-[#52a08a] hover:text-[#466e62] font-semibold text-sm flex items-center gap-1">
                                Lihat Detail
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Project Card 5 --}}
                <div
                    class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                    <div class="relative overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-[#578E7E] to-[#52a08a] flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <p class="text-sm opacity-90">Learning Management</p>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span
                                class="bg-white/90 text-[#52a08a] px-3 py-1 rounded-full text-xs font-semibold">Website</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#23272F] mb-2 group-hover:text-[#52a08a] transition-colors">
                            Learning Management System
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Platform pembelajaran online lengkap dengan fitur video streaming, quiz interaktif, dan sistem
                            sertifikat digital.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Vue.js</span>
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Node.js</span>
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">MongoDB</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">2023</span>
                            <a href="{{ route('project.detail', 1) }}"
                                class="text-[#52a08a] hover:text-[#466e62] font-semibold text-sm flex items-center gap-1">
                                Lihat Detail
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Project Card 6 --}}
                <div
                    class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                    <div class="relative overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-[#466e62] to-[#23272F] flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm3.5 6L12 10.5 8.5 8 12 5.5 15.5 8zM8.5 16L12 13.5 15.5 16 12 18.5 8.5 16z" />
                                </svg>
                                <p class="text-sm opacity-90">IoT Dashboard</p>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/90 text-[#52a08a] px-3 py-1 rounded-full text-xs font-semibold">Web
                                App</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#23272F] mb-2 group-hover:text-[#52a08a] transition-colors">
                            IoT Monitoring Dashboard
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Dashboard monitoring IoT untuk industri manufaktur dengan real-time data visualization dan
                            sistem alert otomatis.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">React</span>
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">IoT</span>
                            <span
                                class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Real-time</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">2023</span>
                            <a href="{{ route('project.detail', 1) }}"
                                class="text-[#52a08a] hover:text-[#466e62] font-semibold text-sm flex items-center gap-1">
                                Lihat Detail
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Load More Button --}}
            <div class="text-center mt-12">
                <button
                    class="bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold py-3 px-10 rounded-full shadow-xl transition-all duration-200 text-lg">
                    Load More Projects
                </button>
            </div>
        </div>
        <div class="absolute top-0 left-0 w-32 h-32 bg-[#52a08a]/10 rounded-full blur-2xl -z-10"></div>
        <div class="absolute bottom-0 right-0 w-48 h-48 bg-[#578E7E]/10 rounded-full blur-3xl -z-10"></div>
    </section>

    {{-- Stats Section --}}
    {{-- <section class="py-20 bg-white relative">
        <div class="max-w-6xl mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#23272F] mb-4">Project Statistics</h2>
                <div class="w-20 h-1 bg-[#52a08a] rounded mx-auto"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-gradient-to-br from-[#52a08a] to-[#578E7E] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">50+</span>
                    </div>
                    <h3 class="text-lg font-semibold text-[#23272F] mb-2">Project Completed</h3>
                    <p class="text-gray-600 text-sm">Project yang telah diselesaikan dengan sukses</p>
                </div>

                <div class="text-center">
                    <div class="bg-gradient-to-br from-[#578E7E] to-[#23272F] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">40+</span>
                    </div>
                    <h3 class="text-lg font-semibold text-[#23272F] mb-2">Happy Clients</h3>
                    <p class="text-gray-600 text-sm">Klien yang puas dengan hasil kerja kami</p>
                </div>

                <div class="text-center">
                    <div class="bg-gradient-to-br from-[#52a08a] to-[#466e62] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">5+</span>
                    </div>
                    <h3 class="text-lg font-semibold text-[#23272F] mb-2">Years Experience</h3>
                    <p class="text-gray-600 text-sm">Tahun pengalaman dalam industri teknologi</p>
                </div>

                <div class="text-center">
                    <div class="bg-gradient-to-br from-[#466e62] to-[#23272F] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-white">24/7</span>
                    </div>
                    <h3 class="text-lg font-semibold text-[#23272F] mb-2">Support</h3>
                    <p class="text-gray-600 text-sm">Dukungan teknis yang tersedia setiap saat</p>
                </div>
            </div>
        </div>
        <div class="absolute top-0 right-0 w-32 h-32 bg-[#52a08a]/10 rounded-full blur-2xl -z-10"></div>
    </section> --}}

    {{-- Call to Action --}}
    <section class="py-16 bg-gradient-to-br from-[#578E7E] to-[#23272F] relative">
        <div class="max-w-6xl mx-auto px-6 md:px-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Punya Project dalam Pikiran?
            </h2>
            <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                Mari diskusikan project impian Anda bersama tim ahli kami. Kami siap mewujudkan ide kreatif menjadi solusi
                digital yang powerful.
            </p>
            <a href="{{ route('consultation') }}"
                class="inline-block bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold py-3 px-10 rounded-full shadow-xl transition-all duration-200 text-lg">
                Start Your Project
            </a>
        </div>
        <div class="absolute top-0 left-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
        <div class="absolute bottom-0 right-0 w-48 h-48 bg-[#52a08a]/10 rounded-full blur-3xl"></div>
    </section>
@endsection
