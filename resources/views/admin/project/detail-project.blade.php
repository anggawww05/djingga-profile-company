@extends('admin.main')

@section('container')
    <div class="mb-6">
        <div class="flex items-center gap-4">
            {{-- Back Button --}}
            <a href="{{ route('manage-project') }}"
                class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-[#23272F]">Detail Project</h1>
                <p class="text-gray-600 mt-1">Lihat informasi lengkap project di bawah</p>
            </div>
        </div>
    </div>

    {{-- Detail Card --}}
    <div class="bg-white rounded-3xl shadow-lg border border-[#52a08a]/10 overflow-hidden">
        <div class="p-8 space-y-6">
            {{-- Title --}}
            <div>
                <label class="block text-sm font-semibold text-[#23272F] mb-2">Judul Project</label>
                <div class="px-4 py-3 border border-gray-200 rounded-lg bg-gray-50 text-[#23272F]">
                    {{ $project->title }}
                </div>
            </div>

            {{-- Description --}}
            <div>
                <label class="block text-sm font-semibold text-[#23272F] mb-2">Deskripsi Project</label>
                <div class="px-4 py-3 border border-gray-200 rounded-lg bg-white text-gray-700 leading-relaxed">
                    {{ $project->description }}
                </div>
            </div>

            {{-- Link --}}
            <div>
                <label class="block text-sm font-semibold text-[#23272F] mb-2">Link Project</label>
                <div class="px-4 py-3 border border-gray-200 rounded-lg bg-gray-50">
                    <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer"
                        class="text-[#1d7a63] underline">{{ $project->link }}</a>
                </div>
            </div>

            {{-- Image --}}
            <div>
                <label class="block text-sm font-semibold text-[#23272F] mb-2">Gambar Project</label>
                <div class="w-full h-64 border border-gray-200 rounded-lg overflow-hidden bg-gray-50 flex items-center justify-center">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="Gambar Project - {{ $project->title }}"
                            class="object-contain max-h-full w-full">
                    @else
                        <div class="flex flex-col items-center justify-center text-gray-400">
                            <svg class="w-16 h-16 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="text-sm">Tidak ada gambar</p>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Metadata (dummy) --}}

            {{-- Action --}}
            <div class="flex items-center justify-end pt-2">
                <a href="{{ route('manage-project') }}"
                    class="px-6 py-2.5 border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-all duration-200">
                    Kembali
                </a>
            </div>
        </div>
    </div>
@endsection
