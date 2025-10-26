@extends('user.main')

@section('container')
    <section id="cover" class="relative bg-gradient-to-br from-[#578E7E] to-[#23272F] py-20 overflow-hidden mt-5">
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
                @forelse($projects->take(6) as $project)
                    <div
                        class="group bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition-all duration-300 border border-[#52a08a]/10">
                        <div class="relative overflow-hidden">
                            <div class="h-48 bg-gradient-to-br from-[#52a08a] to-[#578E7E] flex items-center justify-center">
                                <div class="text-white text-center">
                                    @if(!empty($project->image))
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="object-cover w-full h-48" />
                                    @else
                                        <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M3 3h18v18H3V3zm16 16V5H5v14h14z" />
                                            <path d="M7 7h10v2H7V7zm0 4h10v2H7v-2zm0 4h7v2H7v-2z" />
                                        </svg>
                                        {{-- <p class="text-sm opacity-90">{{ $project->type ?? 'Project' }}</p> --}}
                                    @endif
                                </div>
                            </div>

                            {{-- @if(!empty($project->type))
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
                                {{ \Illuminate\Support\Str::limit($project->description ?? $project->excerpt ?? '-', 140) }}
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
                        <p class="text-gray-600">Belum ada project untuk ditampilkan.</p>
                    </div>
                @endforelse
            </div>

            {{-- Load More Button --}}
            <div class="text-center mt-12">
                <a href="{{ route('project.full') }}"
                    class="bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold py-3 px-10 rounded-full shadow-xl transition-all duration-200 text-lg">
                    Load More Projects
            </a>
            </div>
        </div>

        <div class="absolute top-0 left-0 w-32 h-32 bg-[#52a08a]/10 rounded-full blur-2xl -z-10"></div>
        <div class="absolute bottom-0 right-0 w-48 h-48 bg-[#578E7E]/10 rounded-full blur-3xl -z-10"></div>
    </section>

@endsection
