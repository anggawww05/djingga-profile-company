@extends('user.main')

@section('container')
    <section class="mx-auto max-w-5xl py-12 px-6">
        <a href="{{ route('project') }}"
            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-[#52a08a] text-[#52a08a] hover:bg-[#52a08a] hover:text-white shadow-sm transition-all">
             <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
             </svg>
             Kembali
        </a>

        <div class="mx-auto flex flex-col gap-6 mt-6">
            <div class="w-full h-52 md:h-auto bg-gray-50 flex items-center justify-center overflow-hidden rounded-2xl">
                @if (!empty($project->image))
                            <img src="{{ asset('storage/' . $project->image) }}"
                                alt="{{ $project->title ?? 'Project Image' }}" class="w-full h-96 object-cover" />
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-green-500 to-emerald-500">
                                <svg class="w-20 h-20 text-white opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7M8 3h8l1 4H7l1-4z" />
                                </svg>
                            </div>
                        @endif
            </div>


            {{-- Optional meta/info card below (keeps original info card content) --}}
            <div class="w-full">
                <div class="bg-white rounded-3xl shadow-xl border border-[#52a08a]/10 p-6">
                    <h3 class="text-lg font-semibold text-[#23272F] mb-4">Informasi Project</h3>
                    <dl class="grid grid-cols-1 gap-y-3 text-sm">
                        <div class="flex items-center justify-between">
                            <dt class="text-gray-500 font-semibold">Judul</dt>
                            <dd class="font-medium text-[#23272F]">{{ $project->title ?? '-' }}</dd>
                        </div>
                        <div class="flex items-center justify-between">
                            <dt class="text-gray-500 font-semibold">Link</dt>
                            <dd class="font-medium text-[#23272F]">
                                @if (!empty($project->link))
                                    <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer"
                                        class="text-[#52a08a] hover:underline">{{ $project->link }}</a>
                                @else
                                    -
                                @endif
                            </dd>
                        </div>

                        <div class="flex flex-col">
                            <dt class="text-gray-500 font-semibold">Deskripsi</dt>
                            <dd class="font-medium text-[#23272F] text-justify text-sm mt-1">
                               {{ $project->description ?? '-' }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </section>
@endsection
