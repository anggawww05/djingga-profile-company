@extends('admin.main')

@section('container')
    <div class="mb-6">
        <div class="flex items-center gap-4">
            {{-- Back Button --}}
            <a href="{{ route('manage-activity') }}"
                class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-[#23272F]">Detail Activity</h1>
                <p class="text-gray-600 mt-1">Informasi lengkap activity</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-3xl shadow-lg border border-[#52a08a]/10 overflow-hidden">
        <div class="p-8">
            {{-- Title --}}
            <div class="mb-6">
                <label class="block text-sm font-semibold text-[#23272F] mb-2">Judul</label>
                <p class="text-gray-700">{{ $activity->title }}</p>
            </div>

            {{-- Description --}}
            <div class="mb-6">
                <label class="block text-sm font-semibold text-[#23272F] mb-2">Deskripsi</label>
                <p class="text-gray-700 whitespace-pre-line">{{ $activity->description }}</p>
            </div>

            {{-- Image --}}
            <div class="mb-8">
                <label class="block text-sm font-semibold text-[#23272F] mb-2">Gambar</label>
                @if ($activity->image)
                    <img src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}"
                        class="w-full max-h-96 object-contain rounded-lg bg-gray-50 p-4 border">
                @else
                    <div class="w-full h-48 flex items-center justify-center border-2 border-dashed border-gray-300 rounded-lg bg-gray-50 text-gray-500">
                        Tidak ada gambar
                    </div>
                @endif
            </div>

            {{-- Meta / Actions --}}
            <div class="text-sm text-gray-500 mb-6">
                <div>Dibuat: {{ $activity->created_at->format('d M Y H:i') }}</div>
                @if($activity->updated_at && $activity->updated_at != $activity->created_at)
                    <div>Terakhir diubah: {{ $activity->updated_at->format('d M Y H:i') }}</div>
                @endif
            </div>

            <div class="flex items-center justify-end gap-4 pt-6 border-t border-gray-200">
                <a href="{{ route('manage-activity') }}"
                    class="px-6 py-2.5 border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-all duration-200">
                    Kembali
                </a>

                <a href="{{ route('manage-activity.edit', $activity) }}"
                    class="px-6 py-2.5 bg-[#f59e0b] hover:bg-[#d97706] text-white font-semibold rounded-lg transition-all duration-200">
                    Edit
                </a>

                <form action="{{ route('manage-activity.destroy', $activity) }}" method="POST" onsubmit="return confirm('Hapus activity ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="px-6 py-2.5 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-all duration-200">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
