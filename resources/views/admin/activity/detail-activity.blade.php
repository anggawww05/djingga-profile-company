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
                <h1 class="text-2xl font-bold text-[#23272F]">Detail Aktivitas</h1>
                <p class="text-gray-600 mt-1">Informasi lengkap aktivitas</p>
            </div>
        </div>
    </div>

    {{-- Detail Card (styled like the form) --}}
    <div class="bg-white rounded-3xl shadow-lg border border-[#52a08a]/10 overflow-hidden">
        <div class="p-8">
            {{-- Title Field --}}
            <div class="mb-6">
                <label for="title" class="block text-sm font-semibold text-[#23272F] mb-2">
                    Judul
                </label>
                <input type="text" id="title" name="title" value="{{ $activity->title }}" disabled
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-700 cursor-not-allowed"
                    placeholder="Judul aktivitas...">
            </div>

            {{-- Description Field --}}
            <div class="mb-6">
                <label for="description" class="block text-sm font-semibold text-[#23272F] mb-2">
                    Deskripsi
                </label>
                <textarea id="description" name="description" rows="5" disabled
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-700 cursor-not-allowed resize-none"
                    placeholder="Deskripsi aktivitas...">{{ $activity->description }}</textarea>
            </div>

            {{-- Cover Image (preview only) --}}
            <div class="mb-8">
                <label for="image" class="block text-sm font-semibold text-[#23272F] mb-2">
                    Gambar
                </label>
                @if (!empty($activity->image_cover))
                    <div class="w-full h-48 rounded-lg overflow-hidden border border-gray-200 bg-gray-50 p-4 flex items-center justify-center">
                        <img src="{{ asset('storage/' . ltrim($activity->image_cover, '/')) }}" alt="{{ $activity->title }}" class="w-full h-full object-contain">
                    </div>
                @else
                    <div class="w-full h-48 flex items-center justify-center border-2 border-dashed border-gray-300 rounded-lg bg-gray-50 text-gray-500">
                        Tidak ada gambar
                    </div>
                @endif
            </div>

            {{-- Activity Date & Category --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="activity_date" class="block text-sm font-semibold text-[#23272F] mb-2">Tanggal Kegiatan</label>
                    <input type="date" id="activity_date" name="activity_date" value="{{ optional($activity->activity_date)->format('Y-m-d') ?? ($activity->activity_date ?? '') }}" disabled
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-700 cursor-not-allowed">
                </div>

                <div>
                    <label for="category_activity_id" class="block text-sm font-semibold text-[#23272F] mb-2">Kategori</label>
                    <input type="text" value="{{ optional($activity->category)->category_name ?? optional($activity->categoryActivity)->category_name ?? ($activity->category_name ?? '—') }}" disabled
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-700 cursor-not-allowed">
                </div>
            </div>

            {{-- Gallery Images Preview --}}
            <div class="mb-8">
                <label class="block text-sm font-semibold text-[#23272F] mb-2">Gallery Gambar</label>

                @php
                    // Build gallery items from relation `galleryActivities` first, fallback to a stored 'gallery' attribute if present.
                    $galleryItems = [];

                    if (!empty($activity->galleryActivities) && $activity->galleryActivities->count() > 0) {
                        foreach ($activity->galleryActivities as $g) {
                            if (!empty($g->image)) $galleryItems[] = $g->image;
                        }
                    } elseif (!empty($activity->gallery)) {
                        // support gallery stored as JSON string or comma-separated
                        if (is_string($activity->gallery)) {
                            $decoded = json_decode($activity->gallery, true);
                            if (is_array($decoded)) {
                                $galleryItems = $decoded;
                            } else {
                                // try comma separated
                                $parts = array_filter(array_map('trim', explode(',', $activity->gallery)));
                                if (!empty($parts)) $galleryItems = $parts;
                                else $galleryItems = [$activity->gallery];
                            }
                        } elseif (is_array($activity->gallery)) {
                            $galleryItems = $activity->gallery;
                        }
                    }
                @endphp

                @if(!empty($galleryItems))
                    <div id="gallery-preview" class="mt-4 flex flex-wrap gap-3">
                        @foreach($galleryItems as $g)
                            <div class="w-24 h-24 bg-gray-50 rounded-lg overflow-hidden flex items-center justify-center border border-gray-200">
                                @if($g)
                                    <img src="{{ asset('storage/' . ltrim($g, '/')) }}" alt="gallery" class="w-full h-full object-cover">
                                @else
                                    <div class="text-xs text-gray-400">invalid</div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="mt-2 text-sm text-gray-500">Tidak ada gambar gallery</div>
                @endif
            </div>

            {{-- Meta / Actions --}}
            <div class="text-sm text-gray-500 mb-6">
                <div>Dibuat: {{ $activity->created_at->format('d M Y H:i') }}</div>
                @if($activity->updated_at && $activity->updated_at != $activity->created_at)
                    <div>Terakhir diubah: {{ $activity->updated_at->format('d M Y H:i') }}</div>
                @endif
            </div>
        </div>
    </div>
@endsection
