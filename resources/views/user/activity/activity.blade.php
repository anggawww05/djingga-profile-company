@extends('user.main')

@section('container')
    {{-- Hero Section --}}
    <section id="cover" class="relative bg-gradient-to-br from-[#578E7E] to-[#23272F] py-20 overflow-hidden mt-20">
        <div class="max-w-6xl mx-auto px-6 md:px-12 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Company Activities
            </h1>
            <div class="w-20 h-1 bg-[#52a08a] rounded mx-auto mb-6"></div>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Ikuti berbagai kegiatan dan acara menarik yang diselenggarakan oleh Djingga Company untuk membangun komunitas dan berbagi pengetahuan.
            </p>
        </div>
        <div class="absolute top-0 right-0 w-48 h-48 bg-[#52a08a]/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
    </section>

    {{-- Filter Section --}}
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-6 md:px-12">
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <button class="px-6 py-2 bg-[#52a08a] text-white rounded-full font-medium hover:bg-[#466e62] transition-all duration-200 shadow-md">
                    Semua Activity
                </button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-medium hover:bg-[#52a08a] hover:text-white transition-all duration-200">
                    Workshop
                </button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-medium hover:bg-[#52a08a] hover:text-white transition-all duration-200">
                    Seminar
                </button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-medium hover:bg-[#52a08a] hover:text-white transition-all duration-200">
                    Training
                </button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-medium hover:bg-[#52a08a] hover:text-white transition-all duration-200">
                    Webinar
                </button>
            </div>
        </div>
    </section>

    {{-- Activities Grid Section --}}
    <section class="py-20 bg-gradient-to-br from-[#f8fafc] to-[#e6f4f1] relative">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                {{-- Activity Card 1 --}}
                <div class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                    <div class="relative overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-[#52a08a] to-[#578E7E] flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <p class="text-sm opacity-90">Web Development Workshop</p>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/90 text-[#52a08a] px-3 py-1 rounded-full text-xs font-semibold">Workshop</span>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-red-500/90 text-white px-3 py-1 rounded-full text-xs font-semibold">Live</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm text-gray-500">22 Oktober 2025</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#23272F] mb-2 group-hover:text-[#52a08a] transition-colors">
                            Modern Web Development Workshop
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Workshop intensif tentang teknologi web development terkini menggunakan React, Laravel, dan modern tools untuk developer.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">React</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Laravel</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Modern Tools</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-sm text-gray-500">09:00 - 17:00</span>
                            </div>
                            <a href="#" class="text-[#52a08a] hover:text-[#466e62] font-semibold text-sm flex items-center gap-1">
                                Daftar Sekarang
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Activity Card 2 --}}
                <div class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                    <div class="relative overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-[#578E7E] to-[#23272F] flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                </svg>
                                <p class="text-sm opacity-90">Digital Marketing Seminar</p>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/90 text-[#52a08a] px-3 py-1 rounded-full text-xs font-semibold">Seminar</span>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-blue-500/90 text-white px-3 py-1 rounded-full text-xs font-semibold">Upcoming</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm text-gray-500">25 Oktober 2025</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#23272F] mb-2 group-hover:text-[#52a08a] transition-colors">
                            Digital Marketing Strategy 2025
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Seminar tentang strategi pemasaran digital terkini dengan pembicara expert dari industri untuk meningkatkan bisnis Anda.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">SEO/SEM</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Social Media</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Analytics</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-sm text-gray-500">14:00 - 17:00</span>
                            </div>
                            <a href="#" class="text-[#52a08a] hover:text-[#466e62] font-semibold text-sm flex items-center gap-1">
                                Lihat Detail
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Activity Card 3 --}}
                <div class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                    <div class="relative overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-[#52a08a] to-[#466e62] flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17 2v2h3v16H4V4h3V2h2v2h6V2h2zm-2 4H9v2h6V6zm0 4H9v2h6v-2z"/>
                                </svg>
                                <p class="text-sm opacity-90">Mobile App Development</p>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/90 text-[#52a08a] px-3 py-1 rounded-full text-xs font-semibold">Training</span>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-green-500/90 text-white px-3 py-1 rounded-full text-xs font-semibold">Available</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm text-gray-500">28 Oktober 2025</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#23272F] mb-2 group-hover:text-[#52a08a] transition-colors">
                            Flutter Mobile Development Training
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Pelatihan komprehensif pengembangan aplikasi mobile menggunakan Flutter dari basic hingga advanced level.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Flutter</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Dart</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Firebase</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-sm text-gray-500">3 Hari</span>
                            </div>
                            <a href="#" class="text-[#52a08a] hover:text-[#466e62] font-semibold text-sm flex items-center gap-1">
                                Daftar Training
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Activity Card 4 --}}
                <div class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                    <div class="relative overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-[#23272F] to-[#578E7E] flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm3.5 6L12 10.5 8.5 8 12 5.5 15.5 8zM8.5 16L12 13.5 15.5 16 12 18.5 8.5 16z"/>
                                </svg>
                                <p class="text-sm opacity-90">Tech Talk Webinar</p>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/90 text-[#52a08a] px-3 py-1 rounded-full text-xs font-semibold">Webinar</span>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-purple-500/90 text-white px-3 py-1 rounded-full text-xs font-semibold">Online</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm text-gray-500">30 Oktober 2025</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#23272F] mb-2 group-hover:text-[#52a08a] transition-colors">
                            Future of AI in Development
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Webinar ekslusif tentang masa depan AI dalam pengembangan software dan bagaimana memanfaatkannya untuk produktivitas.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">AI/ML</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Automation</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Future Tech</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-sm text-gray-500">19:00 - 21:00</span>
                            </div>
                            <a href="#" class="text-[#52a08a] hover:text-[#466e62] font-semibold text-sm flex items-center gap-1">
                                Join Webinar
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Activity Card 5 --}}
                <div class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                    <div class="relative overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-[#578E7E] to-[#52a08a] flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm-1 16H9V7h9v14z"/>
                                </svg>
                                <p class="text-sm opacity-90">UI/UX Design Workshop</p>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/90 text-[#52a08a] px-3 py-1 rounded-full text-xs font-semibold">Workshop</span>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-orange-500/90 text-white px-3 py-1 rounded-full text-xs font-semibold">Premium</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm text-gray-500">5 November 2025</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#23272F] mb-2 group-hover:text-[#52a08a] transition-colors">
                            Advanced UI/UX Design Masterclass
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Masterclass intensif tentang desain UI/UX modern dengan tools terbaru dan best practices dari industry expert.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Figma</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Design System</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Prototyping</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-sm text-gray-500">2 Hari</span>
                            </div>
                            <a href="#" class="text-[#52a08a] hover:text-[#466e62] font-semibold text-sm flex items-center gap-1">
                                Daftar Premium
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Activity Card 6 --}}
                <div class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                    <div class="relative overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-[#466e62] to-[#23272F] flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                                <p class="text-sm opacity-90">Cloud Computing Seminar</p>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/90 text-[#52a08a] px-3 py-1 rounded-full text-xs font-semibold">Seminar</span>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-gray-500/90 text-white px-3 py-1 rounded-full text-xs font-semibold">Finished</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm text-gray-500">15 Oktober 2025</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#23272F] mb-2 group-hover:text-[#52a08a] transition-colors">
                            Cloud Migration Strategy
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Seminar tentang strategi migrasi ke cloud computing dan implementasi best practices untuk infrastruktur modern.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">AWS</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Docker</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Kubernetes</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                </svg>
                                <span class="text-sm text-gray-500">Recording Available</span>
                            </div>
                            <a href="#" class="text-[#52a08a] hover:text-[#466e62] font-semibold text-sm flex items-center gap-1">
                                Watch Recording
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Load More Button --}}
            <div class="text-center mt-12">
                <button class="bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold py-3 px-10 rounded-full shadow-xl transition-all duration-200 text-lg">
                    Load More Activities
                </button>
            </div>
        </div>
        <div class="absolute top-0 left-0 w-32 h-32 bg-[#52a08a]/10 rounded-full blur-2xl -z-10"></div>
        <div class="absolute bottom-0 right-0 w-48 h-48 bg-[#578E7E]/10 rounded-full blur-3xl -z-10"></div>
    </section>

    
@endsection
