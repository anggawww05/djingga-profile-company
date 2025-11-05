@extends('user.main')

@section('container')
    <section class="mx-auto max-w-5xl py-12 px-6">
        <a href="{{ route('activity') }}"
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-lg shadow-sm hover:bg-gray-50 transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="text-sm font-medium">Kembali</span>
        </a>

        <div class="mx-auto flex flex-col gap-6 mt-6">
            <div class="w-full bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                <div class="flex flex-col md:flex-row">
                    <!-- Image -->
                    <div class="md:w-1/2 w-full h-64 md:h-auto bg-gray-50 flex items-center justify-center overflow-hidden">
                        @if (!empty($activity->image_cover))
                            <img src="{{ asset('storage/' . $activity->image_cover) }}"
                                alt="{{ $activity->title ?? 'Activity' }}" class="w-full h-full object-cover" />
                        @else
                            <div
                                class="w-full h-full flex items-center justify-center bg-gradient-to-br from-green-500 to-emerald-500">
                                <svg class="w-20 h-20 text-white opacity-90" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7M8 3h8l1 4H7l1-4z" />
                                </svg>
                            </div>
                        @endif
                    </div>

                    <!-- Content -->
                    <div class="md:w-1/2 w-full p-8 flex flex-col">
                        <h2 class="text-3xl font-extrabold text-gray-900 mb-2">
                            {{ $activity->title ?? 'Judul Kegiatan (Dummy)' }}</h2>

                        <div class="flex flex-wrap gap-3 items-center mb-4">
                            <span
                                class="inline-flex items-center gap-2 bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm">
                                <svg class="w-4 h-4 text-green-700" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M6 2a1 1 0 00-1 1v2H3a1 1 0 000 2h2v6a1 1 0 001 1h2v2a1 1 0 102 0v-2h2a1 1 0 001-1V7h2a1 1 0 100-2h-2V3a1 1 0 00-1-1H6z" />
                                </svg>
                                {{ optional($activity->categoryActivity)->category_name ?? 'Kategori' }}
                            </span>

                            <span
                                class="inline-flex items-center gap-2 bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2V8H3v11a2 2 0 002 2z" />
                                </svg>
                                {{ optional($activity->created_at)->format('d M Y') ?? now()->format('d M Y') }}
                            </span>
                        </div>

                        <div class="prose max-w-none text-gray-700 mb-6 flex-1 text-justify">
                            {!! nl2br(
                                e(
                                    $activity->description ??
                                        'Deskripsi singkat kegiatan akan tampil di sini. Ini hanya teks dummy untuk melihat tampilan desain detail card.',
                                ),
                            ) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto pb-6">
                <div class="flex gap-4 min-w-max items-stretch py-4">
                    @forelse($activity->galleryActivities as $g)
                        <div class="w-80 h-48 rounded-lg shadow-lg overflow-hidden bg-gray-100">
                            <img src="{{ asset('storage/' . $g->image) }}" alt="Gallery image" class="w-full h-full object-cover">
                        </div>
                    @empty
                        <div class="text-gray-500 px-4">Belum ada gallery untuk activity ini.</div>
                    @endforelse
                </div>
            </div>

            <div class="flex justify-center mt-8">
                <p class="text-sm text-gray-500 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                    Scroll horizontal untuk melihat semua gallery
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </p>
            </div>
        </div>
    </section>
@endsection
