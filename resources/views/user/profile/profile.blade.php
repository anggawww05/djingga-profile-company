@extends('user.main')

@section('container')

    <section id="cover" class="relative bg-gradient-to-br from-[#578E7E] to-[#23272F] py-20 overflow-hidden mt-5">
        <div class="max-w-6xl mx-auto px-6 md:px-12 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Consultation Services
            </h1>
            <div class="w-20 h-1 bg-[#52a08a] rounded mx-auto mb-6"></div>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Dapatkan konsultasi ahli dari tim profesional kami untuk mengembangkan bisnis dan solusi teknologi yang tepat sasaran.
            </p>
        </div>
        <div class="absolute top-0 right-0 w-48 h-48 bg-[#52a08a]/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
    </section>

    {{-- Pendiri Section --}}
    <section class="py-20 bg-white relative">
        <div class="max-w-6xl mx-auto px-6 md:px-12">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-[#23272F] mb-4">Pendiri</h2>
                <div class="w-20 h-1 bg-[#52a08a] rounded mx-auto mb-4"></div>
            </div>

            <div class="flex justify-center">
                <div class="bg-white rounded-3xl shadow-2xl p-8 max-w-md text-center hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                    <div class="relative mb-6">
                        <div class="w-32 h-32 bg-gradient-to-br from-[#52a08a] to-[#578E7E] rounded-full mx-auto mb-4 flex items-center justify-center">
                            <span class="text-3xl font-bold text-white">DJ</span>
                        </div>
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-[#52a08a] rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-[#23272F] mb-2">Djingga Founder</h3>
                    <p class="text-[#52a08a] font-semibold mb-4">Chief Executive Officer</p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Visioner dan pemimpin yang memiliki pengalaman lebih dari 10 tahun dalam industri teknologi informasi. Memulai perjalanan dengan misi memberikan solusi digital terdepan.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="text-[#52a08a] hover:text-[#466e62] transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-[#52a08a] hover:text-[#466e62] transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute top-0 left-0 w-32 h-32 bg-[#52a08a]/10 rounded-full blur-2xl -z-10"></div>
    </section>

    {{-- Staf Section --}}
    <section class="py-20 bg-gradient-to-br from-[#f8fafc] to-[#e6f4f1] relative">
        <div class="max-w-6xl mx-auto px-6 md:px-12">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-[#23272F] mb-4">Staf Inti</h2>
                <div class="w-20 h-1 bg-[#52a08a] rounded mx-auto mb-4"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Tim inti yang mengelola operasional dan memastikan kualitas layanan terbaik untuk klien.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Staf 1 --}}
                <div class="bg-white rounded-3xl shadow-xl p-8 text-center hover:-translate-y-2 transition-all duration-300 group">
                    <div class="relative mb-6">
                        <div class="w-24 h-24 bg-gradient-to-br from-[#52a08a] to-[#578E7E] rounded-full mx-auto mb-4 flex items-center justify-center">
                            <span class="text-xl font-bold text-white">AM</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-[#23272F] mb-2">Alex Manager</h3>
                    <p class="text-[#52a08a] font-semibold mb-4">Project Manager</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Mengelola proyek-proyek besar dan memastikan timeline serta kualitas deliverable sesuai standar perusahaan.
                    </p>
                </div>

                {{-- Staf 2 --}}
                <div class="bg-white rounded-3xl shadow-xl p-8 text-center hover:-translate-y-2 transition-all duration-300 group">
                    <div class="relative mb-6">
                        <div class="w-24 h-24 bg-gradient-to-br from-[#52a08a] to-[#578E7E] rounded-full mx-auto mb-4 flex items-center justify-center">
                            <span class="text-xl font-bold text-white">SD</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-[#23272F] mb-2">Sarah Designer</h3>
                    <p class="text-[#52a08a] font-semibold mb-4">Lead UI/UX Designer</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Bertanggung jawab atas desain antarmuka yang menarik dan pengalaman pengguna yang optimal untuk semua produk.
                    </p>
                </div>

                {{-- Staf 3 --}}
                <div class="bg-white rounded-3xl shadow-xl p-8 text-center hover:-translate-y-2 transition-all duration-300 group">
                    <div class="relative mb-6">
                        <div class="w-24 h-24 bg-gradient-to-br from-[#52a08a] to-[#578E7E] rounded-full mx-auto mb-4 flex items-center justify-center">
                            <span class="text-xl font-bold text-white">MD</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-[#23272F] mb-2">Mike Developer</h3>
                    <p class="text-[#52a08a] font-semibold mb-4">Senior Developer</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Developer senior dengan keahlian full-stack yang memimpin tim development dalam berbagai teknologi terkini.
                    </p>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 w-48 h-48 bg-[#578E7E]/10 rounded-full blur-3xl -z-10"></div>
    </section>

    {{-- Jajaran Tim Section --}}
    <section class="py-20 bg-white relative">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-[#23272F] mb-4">Jajaran Tim</h2>
                <div class="w-20 h-1 bg-[#52a08a] rounded mx-auto mb-4"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Tim profesional kami yang siap memberikan kontribusi terbaik dalam setiap proyek yang dikerjakan.
                </p>
            </div>

            {{-- Horizontal Scrollable Cards --}}
            <div class="overflow-x-auto pb-6">
                <div class="flex space-x-6 min-w-max">
                    {{-- Tim Member 1 --}}
                    <div class="bg-gradient-to-br from-white to-[#f8fafc] rounded-2xl shadow-lg p-6 w-72 flex-shrink-0 hover:-translate-y-1 transition-all duration-300 border border-[#52a08a]/10">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#52a08a] to-[#578E7E] rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-lg font-bold text-white">JD</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-[#23272F]">John Developer</h3>
                                <p class="text-[#52a08a] font-semibold text-sm">Frontend Developer</p>
                                <p class="text-gray-600 text-xs mt-1">React, Vue.js, Angular</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">JavaScript</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">React</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">CSS</span>
                        </div>
                    </div>

                    {{-- Tim Member 2 --}}
                    <div class="bg-gradient-to-br from-white to-[#f8fafc] rounded-2xl shadow-lg p-6 w-72 flex-shrink-0 hover:-translate-y-1 transition-all duration-300 border border-[#52a08a]/10">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#52a08a] to-[#578E7E] rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-lg font-bold text-white">EB</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-[#23272F]">Emma Backend</h3>
                                <p class="text-[#52a08a] font-semibold text-sm">Backend Developer</p>
                                <p class="text-gray-600 text-xs mt-1">Laravel, Node.js, Python</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Laravel</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">MySQL</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">API</span>
                        </div>
                    </div>

                    {{-- Tim Member 3 --}}
                    <div class="bg-gradient-to-br from-white to-[#f8fafc] rounded-2xl shadow-lg p-6 w-72 flex-shrink-0 hover:-translate-y-1 transition-all duration-300 border border-[#52a08a]/10">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#52a08a] to-[#578E7E] rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-lg font-bold text-white">CM</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-[#23272F]">Chris Mobile</h3>
                                <p class="text-[#52a08a] font-semibold text-sm">Mobile Developer</p>
                                <p class="text-gray-600 text-xs mt-1">Flutter, React Native</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Flutter</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Dart</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">iOS</span>
                        </div>
                    </div>

                    {{-- Tim Member 4 --}}
                    <div class="bg-gradient-to-br from-white to-[#f8fafc] rounded-2xl shadow-lg p-6 w-72 flex-shrink-0 hover:-translate-y-1 transition-all duration-300 border border-[#52a08a]/10">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#52a08a] to-[#578E7E] rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-lg font-bold text-white">DM</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-[#23272F]">Diana Marketing</h3>
                                <p class="text-[#52a08a] font-semibold text-sm">Digital Marketer</p>
                                <p class="text-gray-600 text-xs mt-1">SEO, SEM, Social Media</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">SEO</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Google Ads</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Analytics</span>
                        </div>
                    </div>

                    {{-- Tim Member 5 --}}
                    <div class="bg-gradient-to-br from-white to-[#f8fafc] rounded-2xl shadow-lg p-6 w-72 flex-shrink-0 hover:-translate-y-1 transition-all duration-300 border border-[#52a08a]/10">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#52a08a] to-[#578E7E] rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-lg font-bold text-white">QA</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-[#23272F]">Quinn Analyst</h3>
                                <p class="text-[#52a08a] font-semibold text-sm">QA Tester</p>
                                <p class="text-gray-600 text-xs mt-1">Manual & Automation Testing</p>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Selenium</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Postman</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">JIRA</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Scroll indicator --}}
            <div class="flex justify-center mt-8">
                <p class="text-sm text-gray-500 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/>
                    </svg>
                    Scroll horizontal untuk melihat semua anggota tim
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </p>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-[#52a08a]/10 rounded-full blur-2xl -z-10"></div>
        <div class="absolute top-0 right-0 w-48 h-48 bg-[#578E7E]/10 rounded-full blur-3xl -z-10"></div>
    </section>
@endsection
