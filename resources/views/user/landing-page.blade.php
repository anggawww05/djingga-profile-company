@extends('user.main')

@section('container')
    {{-- Cover depan --}}
    <section id="cover"
        class="relative flex items-center justify-center min-h-screen bg-gradient-to-br from-[#578E7E] to-[#23272F] overflow-hidden">
        <div class="relative z-10 flex flex-col md:flex-row items-center gap-12 px-6 md:px-24 py-16 w-full max-w-7xl">
            <div class="flex-1 flex flex-col gap-6 items-start text-white">
                <h1 class="text-5xl md:text-6xl font-extrabold leading-tight drop-shadow-lg">
                    Djingga Company
                </h1>
                <p class="text-lg md:text-xl font-medium opacity-90 max-w-xl text-justify">
                    Djingga is an IT company specializing in delivering innovative technology solutions for businesses.
                    We provide web development, mobile app development, digital marketing, and IT consulting services to
                    help our clients grow and succeed in the digital era.
                    With a team of experienced professionals, Djingga is committed to delivering high-quality, reliable, and
                    customized solutions tailored to your business needs.
                </p>
                <a href="#"
                    class="mt-4 bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold py-3 px-10 rounded-full shadow-xl transition-all duration-200 text-lg tracking-wide">
                    Work With Us
                </a>
            </div>
            <div class="flex-1 flex justify-center">
                <div class="relative group">
                    {{-- <div class="absolute -inset-2 bg-[#52a08a] rounded-full blur-2xl opacity-30 group-hover:opacity-60 transition"></div> --}}
                    <img src="{{ asset('assets/dev-asset.png') }}" alt="Digital Marketing Asset"
                        class="rounded-full shadow-2xl max-w-xs md:max-w-md h-auto border-8 border-white/10 transition-transform duration-300 group-hover:scale-105">
                </div>
            </div>
        </div>
    </section>

    {{-- Tentang Kami --}}
    <section id="about" class="py-20 bg-white relative">
        <div class="max-w-6xl mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center gap-12">
            <div class="flex-1">
                <img src="{{ asset('assets/dev-asset.png') }}" alt="About Djingga Company"
                    class="w-full max-w-md mx-auto rounded-3xl shadow-2xl border-4 border-[#52a08a]/10">
            </div>
            <div class="flex-1 flex flex-col gap-6">
                <h2 class="text-4xl md:text-5xl font-bold text-[#23272F] mb-4">
                    Tentang Kami
                </h2>
                <div class="w-20 h-1 bg-[#52a08a] rounded mb-4"></div>
                <p class="text-lg text-gray-700 leading-relaxed">
                    <span class="font-semibold text-[#52a08a]">Djingga Company</span> adalah perusahaan IT yang berfokus pada solusi teknologi inovatif untuk bisnis. Kami menyediakan layanan pengembangan website, aplikasi mobile, digital marketing, dan konsultasi IT untuk membantu klien berkembang di era digital.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Dengan tim profesional berpengalaman, kami berkomitmen memberikan solusi berkualitas, handal, dan sesuai kebutuhan bisnis Anda. Kolaborasi, inovasi, dan kepuasan klien adalah prioritas utama kami.
                </p>
                <a href="#"
                    class="inline-block mt-4 bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold py-3 px-8 rounded-full shadow-lg transition-all duration-200 text-lg">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
        <div class="absolute top-0 right-0 w-48 h-48 bg-[#52a08a]/10 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-[#578E7E]/10 rounded-full blur-2xl -z-10"></div>
    </section>

    {{-- Layanan Kami --}}
    <section id="services" class="py-20 bg-gradient-to-br from-[#f8fafc] to-[#e6f4f1] relative">
        <div class="max-w-6xl mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-[#23272F] mb-4">Layanan Kami</h2>
                <div class="w-20 h-1 bg-[#52a08a] rounded mx-auto mb-4"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Kami menawarkan berbagai layanan teknologi untuk mendukung pertumbuhan bisnis Anda di era digital.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Service 1 -->
                <div class="bg-white rounded-3xl shadow-xl p-8 flex flex-col items-center hover:-translate-y-2 transition-all duration-300 group">
                    <div class="bg-[#52a08a]/10 rounded-full p-5 mb-6">
                        <svg class="w-12 h-12 text-[#52a08a] group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M4 4h16v16H4z" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8 8h8v8H8z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-[#23272F]">Web Development</h3>
                    <p class="text-gray-600 text-center mb-4">
                        Pembuatan website profesional, responsif, dan sesuai kebutuhan bisnis Anda.
                    </p>
                    <a href="#" class="text-[#52a08a] font-semibold hover:underline">Selengkapnya</a>
                </div>
                <!-- Service 2 -->
                <div class="bg-white rounded-3xl shadow-xl p-8 flex flex-col items-center hover:-translate-y-2 transition-all duration-300 group">
                    <div class="bg-[#52a08a]/10 rounded-full p-5 mb-6">
                        <svg class="w-12 h-12 text-[#52a08a] group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 8v4l3 3" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="12" r="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-[#23272F]">Mobile App Development</h3>
                    <p class="text-gray-600 text-center mb-4">
                        Pengembangan aplikasi mobile Android & iOS untuk meningkatkan jangkauan bisnis Anda.
                    </p>
                    <a href="#" class="text-[#52a08a] font-semibold hover:underline">Selengkapnya</a>
                </div>
                <!-- Service 3 -->
                <div class="bg-white rounded-3xl shadow-xl p-8 flex flex-col items-center hover:-translate-y-2 transition-all duration-300 group">
                    <div class="bg-[#52a08a]/10 rounded-full p-5 mb-6">
                        <svg class="w-12 h-12 text-[#52a08a] group-hover:scale-110 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M16 8a6 6 0 01-12 0" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 8h20M12 20v-6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3 text-[#23272F]">Digital Marketing</h3>
                    <p class="text-gray-600 text-center mb-4">
                        Strategi pemasaran digital untuk meningkatkan visibilitas dan penjualan bisnis Anda.
                    </p>
                    <a href="#" class="text-[#52a08a] font-semibold hover:underline">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="absolute top-0 left-0 w-32 h-32 bg-[#52a08a]/10 rounded-full blur-2xl -z-10"></div>
        <div class="absolute bottom-0 right-0 w-48 h-48 bg-[#578E7E]/10 rounded-full blur-3xl -z-10"></div>
    </section>

    {{-- Our Team --}}
    <section>
        
    </section>
@endsection
