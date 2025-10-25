@extends('user.main')

@section('container')
    {{-- Hero Section --

    {{-- Project Summary --}}
    <section class="py-12 bg-gradient-to-br from-[#f8fafc] to-[#e6f4f1]">
        <div class="max-w-6xl mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                {{-- Cover / Gallery --}}
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-3xl shadow-xl border border-[#52a08a]/10 overflow-hidden">
                        <div class="h-72 md:h-96 bg-gradient-to-br from-[#52a08a] to-[#578E7E] flex items-center justify-center">
                            <div class="text-white text-center">
                                <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 3h18v18H3V3zm16 16V5H5v14h14z"/>
                                    <path d="M7 7h10v2H7V7zm0 4h10v2H7v-2zm0 4h7v2H7v-2z"/>
                                </svg>
                                <p class="text-sm opacity-90">Project Preview</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 text-sm">
                                Gambaran umum project yang menjelaskan tujuan, hasil, dan dampak bisnis secara singkat. Sistem ini membantu meningkatkan efisiensi operasional dan pengalaman belanja pengguna.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Meta Info Card --}}
                <aside class="space-y-6">
                    <div class="bg-white rounded-3xl shadow-xl border border-[#52a08a]/10 p-6">
                        <h3 class="text-lg font-semibold text-[#23272F] mb-4">Project Info</h3>
                        <dl class="grid grid-cols-1 gap-y-3 text-sm">
                            <div class="flex items-center justify-between">
                                <dt class="text-gray-500">Client</dt>
                                <dd class="font-medium text-[#23272F]">Aurora Fashion</dd>
                            </div>
                            <div class="flex items-center justify-between">
                                <dt class="text-gray-500">Year</dt>
                                <dd class="font-medium text-[#23272F]">2024</dd>
                            </div>
                            <div class="flex items-center justify-between">
                                <dt class="text-gray-500">Category</dt>
                                <dd class="font-medium text-[#23272F]">Website</dd>
                            </div>
                            <div class="flex items-center justify-between">
                                <dt class="text-gray-500">Duration</dt>
                                <dd class="font-medium text-[#23272F]">8 minggu</dd>
                            </div>
                        </dl>
                        <a href="#" target="_blank"
                           class="mt-5 inline-flex items-center gap-2 text-[#52a08a] hover:text-[#466e62] font-semibold">
                            Visit Project
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>

                    <div class="bg-white rounded-3xl shadow-xl border border-[#52a08a]/10 p-6">
                        <h3 class="text-lg font-semibold text-[#23272F] mb-4">Tech Stack</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Laravel</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">React</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">MySQL</span>
                            <span class="px-2 py-1 bg-[#52a08a]/10 text-[#52a08a] rounded-full text-xs font-medium">Tailwind</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    {{-- Gallery --}}
    <section class="py-12 bg-gradient-to-br from-[#f8fafc] to-[#e6f4f1]">
        <div class="max-w-6xl mx-auto px-6 md:px-12">
            <h2 class="text-2xl font-bold text-[#23272F] mb-6">Gallery</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="aspect-video bg-white rounded-2xl shadow-lg border border-[#52a08a]/10"></div>
                <div class="aspect-video bg-white rounded-2xl shadow-lg border border-[#52a08a]/10"></div>
                <div class="aspect-video bg-white rounded-2xl shadow-lg border border-[#52a08a]/10"></div>
                <div class="aspect-video bg-white rounded-2xl shadow-lg border border-[#52a08a]/10"></div>
                <div class="aspect-video bg-white rounded-2xl shadow-lg border border-[#52a08a]/10"></div>
                <div class="aspect-video bg-white rounded-2xl shadow-lg border border-[#52a08a]/10"></div>
            </div>
        </div>
    </section>

@endsection
