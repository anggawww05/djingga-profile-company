@extends('user.main')

@section('container')
    {{-- Hero Section --}}

    {{-- Project Summary --}}
    <section class="mb-5">
        <div class="max-w-6xl mx-auto px-6 md:px-12">
            <!-- Back button -->
            <div class="mb-6">
                <a href="{{ route('project') }}" class="inline-flex items-center gap-2 text-[#52a08a] hover:text-[#466e62] font-semibold">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    Kembali
                </a>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                {{-- Cover --}}
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-3xl shadow-xl border border-[#52a08a]/10 overflow-hidden">
                        <div class="h-72 md:h-96 bg-gradient-to-br from-[#52a08a] to-[#578E7E] flex items-center justify-center">
                            @if(!empty($project->image))
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover"/>
                            @else
                                <div class="text-white text-center">
                                    <svg class="w-16 h-16 mx-auto mb-2 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M3 3h18v18H3V3zm16 16V5H5v14h14z"/>
                                        <path d="M7 7h10v2H7V7zm0 4h10v2H7v-2zm0 4h7v2H7v-2z"/>
                                    </svg>
                                    <p class="text-sm opacity-90">Project Preview</p>
                                </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <h1 class="text-2xl font-bold text-[#23272F] mb-2">{{ $project->title ?? 'Untitled Project' }}</h1>

                            {{-- Full Description --}}
                            {{-- <div class="mb-4">
                                <h2 class="text-sm font-semibold text-gray-700 mb-2">Deskripsi</h2>
                                <p class="text-gray-600 text-sm">
                                    {{ $project->description ?? $project->excerpt ?? 'Tidak ada deskripsi.' }}
                                </p>
                            </div> --}}

                            {{-- Short excerpt (optional) --}}
                            @if(!empty($project->excerpt))
                                <p class="text-gray-500 text-xs mt-2">Ringkasan: {{ $project->excerpt }}</p>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Meta Info Card --}}
                <aside class="space-y-6">
                    <div class="bg-white rounded-3xl shadow-xl border border-[#52a08a]/10 p-6">
                        <h3 class="text-lg font-semibold text-[#23272F] mb-4">Project Info</h3>
                        <dl class="grid grid-cols-1 gap-y-3 text-sm">
                            <div class="flex items-center justify-between">
                                <dt class="text-gray-500">Title</dt>
                                <dd class="font-medium text-[#23272F]">{{ $project->title ?? '-' }}</dd>
                            </div>
                            <div class="flex items-center justify-between">
                                <dt class="text-gray-500">Link</dt>
                                <dd class="font-medium text-[#23272F]">
                                    @if(!empty($project->link))
                                        <a href="{{ $project->link }}" target="_blank" class="text-[#52a08a] hover:underline">{{ $project->link }}</a>
                                    @else
                                        -
                                    @endif
                                </dd>
                            </div>

                            {{-- Deskripsi ringkas pada kartu info --}}
                            <div class="flex items-start justify-between">
                                <dt class="text-gray-500">Deskripsi</dt>
                                <dd class="font-medium text-[#23272F] max-w-xs text-right">
                                    @if(!empty($project->description))
                                        <span class="text-sm text-gray-600 block">{{ Str::limit($project->description, 120, '...') }}</span>
                                    @else
                                        -
                                    @endif
                                </dd>
                            </div>
                        </dl>

                        @if(!empty($project->link))
                            <a href="{{ $project->link }}" target="_blank"
                               class="mt-5 inline-flex items-center gap-2 text-[#52a08a] hover:text-[#466e62] font-semibold">
                                Visit Project
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        @endif
                    </div>
                </aside>
            </div>
        </div>
    </section>

@endsection
