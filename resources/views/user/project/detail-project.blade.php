@extends('user.main')

@section('container')
    <section class="mx-auto max-w-5xl py-12 px-6">
        <a href="{{ route('project') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-lg shadow-sm hover:bg-gray-50 transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="text-sm font-medium">Kembali</span>
        </a>

        <div class="mx-auto flex flex-col gap-6 mt-6">
            <div class="w-full bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2 w-full h-64 md:h-auto bg-gray-50 flex items-center justify-center overflow-hidden">
                        @if (!empty($project->image))
                            <img src="{{ asset('storage/' . $project->image) }}"
                                alt="{{ $project->title ?? 'Project Image' }}" class="w-full h-full object-cover" />
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-green-500 to-emerald-500">
                                <svg class="w-20 h-20 text-white opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7M8 3h8l1 4H7l1-4z" />
                                </svg>
                            </div>
                        @endif
                    </div>

                    <!-- Content -->
                    <div class="md:w-1/2 w-full p-8 flex flex-col">
                        <h2 class="text-3xl font-extrabold text-gray-900 mb-2">{{ $project->title ?? 'Untitled Project' }}</h2>

                        @if (!empty($project->excerpt))
                            <p class="text-sm text-gray-600 mb-4">{{ $project->excerpt }}</p>
                        @endif

                        <div class="prose max-w-none text-gray-700 mb-6 flex-1 text-justify">
                            @if (!empty($project->description))
                                {!! nl2br(e($project->description)) !!}
                            @else
                                <p class="text-gray-500">Deskripsi proyek belum tersedia.</p>
                            @endif
                        </div>

                        @if (!empty($project->link))
                            <div class="mt-4">
                                <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer"
                                    class="inline-flex items-center gap-2 text-[#52a08a] hover:text-[#466e62] font-semibold">
                                    Visit Project
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Optional meta/info card below (keeps original info card content) --}}
            <div class="w-full">
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
                                @if (!empty($project->link))
                                    <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer"
                                        class="text-[#52a08a] hover:underline">{{ $project->link }}</a>
                                @else
                                    -
                                @endif
                            </dd>
                        </div>

                        <div class="flex items-start justify-between">
                            <dt class="text-gray-500">Deskripsi</dt>
                            <dd class="font-medium text-[#23272F] max-w-xs text-right">
                                @if (!empty($project->description))
                                    <span class="text-sm text-gray-600 block">
                                        {{ \Illuminate\Support\Str::limit($project->description, 120, '...') }}
                                    </span>
                                @else
                                    -
                                @endif
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </section>
@endsection
