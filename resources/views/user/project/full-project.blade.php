@extends('user.main')

@section('container')
    {{-- Hero Section with Search --}}
    <section id="cover" class="relative min-h-[400px] flex items-center justify-center bg-gradient-to-br from-[#52a08a] via-[#578E7E] to-[#23272F] overflow-hidden">
        <div class="absolute inset-0 bg-[url('/assets/pattern.svg')] opacity-5"></div>
        <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#52a08a]/20 rounded-full blur-3xl"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 md:px-12 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight">
                Explore Our <span class="text-[#e6f4f1]">Projects</span>
            </h1>
            <p class="text-lg md:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Discover our portfolio of innovative solutions and successful implementations
            </p>

            {{-- Search Form --}}
            <form action="{{ route('project') }}" method="GET" class="max-w-2xl mx-auto">
                <div class="relative">
                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search projects by name or description..."
                        class="w-full px-6 py-4 pr-32 rounded-full border-2 border-white/20 bg-white/10 backdrop-blur-sm text-white placeholder-white/60 focus:outline-none focus:border-white/40 focus:bg-white/15 transition-all duration-300"
                    >
                    <button
                        type="submit"
                        class="absolute right-2 top-1/2 -translate-y-1/2 bg-white text-[#52a08a] hover:bg-[#e6f4f1] px-6 py-2 rounded-full font-semibold transition-all duration-200 shadow-lg hover:shadow-xl"
                    >
                        Search
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- Projects Grid Section --}}
    <section class="py-20 bg-gradient-to-br from-[#f8fafc] to-[#e6f4f1] relative">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            {{-- Search Results Info --}}
            @if (request('search'))
                <div class="mb-8 text-center">
                    <p class="text-gray-600">
                        Menampilkan hasil pencarian untuk: <span
                            class="font-semibold text-[#52a08a]">"{{ request('search') }}"</span>
                        <a href="{{ route('project') }}" class="ml-2 text-sm text-gray-500 hover:text-[#52a08a]">(Reset)</a>
                    </p>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($projects as $project)
                    <div
                        class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                        <div class="relative overflow-hidden">
                            <div
                                class="h-48 bg-gradient-to-br from-[#52a08a] to-[#578E7E] flex items-center justify-center">
                                <div class="text-white text-center">
                                    @if (!empty($project->image))
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                                            class="object-cover w-full h-48" />
                                    @else
                                        <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path d="M3 3h18v18H3V3zm16 16V5H5v14h14z" />
                                            <path d="M7 7h10v2H7V7zm0 4h10v2H7v-2zm0 4h7v2H7v-2z" />
                                        </svg>
                                        {{-- <p class="text-sm opacity-90">{{ $project->type ?? 'Project' }}</p> --}}
                                    @endif
                                </div>
                            </div>

                            {{-- @if (!empty($project->type))
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/90 text-[#52a08a] px-3 py-1 rounded-full text-xs font-semibold">
                                        {{ $project->type }}
                                    </span>
                                </div>
                            @endif --}}
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#23272F] mb-2 group-hover:text-[#52a08a] transition-colors">
                                {{ $project->title }}
                            </h3>

                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                {{ \Illuminate\Support\Str::limit($project->description ?? ($project->excerpt ?? '-'), 140) }}
                            </p>

                            <div class="flex items-center justify-between">
                                <a href="{{ route('project.detail', $project->id) }}"
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
                @empty
                    <div class="col-span-full text-center py-12">
                        <div class="flex flex-col items-center">
                            <svg class="w-24 h-24 text-gray-300 mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <p class="text-gray-600 text-lg mb-2">
                                @if (request('search'))
                                    Tidak ada project yang sesuai dengan pencarian Anda.
                                @else
                                    Belum ada project untuk ditampilkan.
                                @endif
                            </p>
                            @if (request('search'))
                                <a href="{{ route('project') }}" class="text-[#52a08a] hover:text-[#466e62] font-semibold">
                                    Lihat semua project
                                </a>
                            @endif
                        </div>
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            @if ($projects->hasPages())
                <div class="mt-12">
                    {{ $projects->links() }}
                </div>
            @endif
        </div>

        <div class="absolute top-0 left-0 w-32 h-32 bg-[#52a08a]/10 rounded-full blur-2xl -z-10"></div>
        <div class="absolute bottom-0 right-0 w-48 h-48 bg-[#578E7E]/10 rounded-full blur-3xl -z-10"></div>
    </section>

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
