@extends('admin.main')

@section('container')
    <div class="mb-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-[#23272F]">Kelola Konsultasi</h1>
                <p class="text-gray-600 mt-1">Kelola semua permintaan konsultasi yang masuk</p>
            </div>

            @if ($consultations->count() > 0)
                <div class="flex items-center gap-3">
                    <div class="flex items-center gap-4">
                        <form action="{{ route('manage-consultation.search') }}" method="GET" class="flex items-center">
                            <input type="hidden" name="status" value="{{ request('status', 'pending') }}">
                            <input type="text" name="q" value="{{ request('q') }}"
                                placeholder="Cari konsultasi..."
                                class="px-3 py-2 border border-gray-300 rounded-l-md focus:outline-none" />
                            <button type="submit" class="px-3 py-2 bg-[#52a08a] text-white rounded-r-md">Cari</button>
                        </form>
            @endif
            <button id="open-category-modal" type="button"
                class="bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold py-2 px-6 rounded-lg shadow-lg transition-all duration-200 flex items-center gap-2">
                Kelola Layanan
            </button>
            @if ($consultations->count() > 0)
                <a href="{{ route('manage-consultation.add') }}"
                    class="bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold py-2 px-6 rounded-lg shadow-lg transition-all duration-200 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Konsultasi
                </a>
        </div>
    </div>
    @endif
    </div>
    </div>

    {{-- Success Message --}}
    @if (session('success'))
        <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg flex items-center gap-3">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <div class="mb-4 flex items-end gap-6 border-b border-gray-100">
        <a href="?status=pending"
            class="pb-3 text-sm font-semibold transition-colors duration-150 {{ request('status', 'pending') === 'pending' ? 'text-[#23272F] border-b-2 border-[#52a08a]' : 'text-gray-600 hover:text-[#23272F]' }}"
            aria-current="{{ request('status', 'pending') === 'pending' ? 'page' : 'false' }}">
            Belum Selesai
        </a>

        <a href="?status=done"
            class="pb-3 text-sm font-semibold transition-colors duration-150 {{ request('status') === 'done' ? 'text-[#23272F] border-b-2 border-[#52a08a]' : 'text-gray-600 hover:text-[#23272F]' }}"
            aria-current="{{ request('status') === 'done' ? 'page' : 'false' }}">
            Selesai
        </a>
    </div>

    {{-- Projects Table --}}
    <div class="bg-white rounded-3xl shadow-lg border border-[#52a08a]/10 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-[#52a08a]/10 to-[#578E7E]/10">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-[#23272F] uppercase tracking-wider">
                            No
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-[#23272F] uppercase tracking-wider">
                            Nama
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-[#23272F] uppercase tracking-wider">
                            Perusahaan
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-[#23272F] uppercase tracking-wider">
                            Layanan
                        </th>
                        <th class="px-6 py-4 text-center text-xs font-semibold text-[#23272F] uppercase tracking-wider">
                            Deskripsi
                        </th>
                        <th class="px-6 py-4 text-center text-xs font-semibold text-[#23272F] uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($consultations as $consultation)
                        <tr class="hover:bg-[#52a08a]/5 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ ($consultations->currentPage() - 1) * $consultations->perPage() + $loop->iteration }}
                            </td>
                            <td class="px-6 py-4 text-sm font-semibold text-[#23272F]">
                                {{ $consultation->name }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600 max-w-md">
                                {{ $consultation->company ?? '-' }}
                                {{-- {{ Str::limit($project->description, 80) }} --}}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600 max-w-md">
                                {{ optional($consultation->serviceRef)->service_name ?? ($consultation->service ?? '-') }}
                                {{-- {{ Str::limit($project->description, 80) }} --}}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600 max-w-md">
                                {{ Str::limit($consultation->description, 80) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex items-center justify-center gap-2">
                                    {{-- Detail Button --}}
                                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $consultation->email }}"
                                        target="_blank" rel="noopener noreferrer"
                                        class="inline-flex items-center px-3 py-1.5 text-white bg-[#52a08a] hover:bg-[#466e62] text-sm font-medium rounded-lg transition-colors duration-200">

                                        Email
                                    </a>
                                    <a href="{{ route('manage-consultation.detail', $consultation->id) }}"
                                        class="inline-flex items-center px-3 py-1.5 bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium rounded-lg transition-colors duration-200">

                                        Detail
                                    </a>

                                    {{-- Edit Button --}}
                                    <a href="{{ route('manage-consultation.edit', $consultation->id) }}"
                                        class="inline-flex items-center px-3 py-1.5 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                                        Edit
                                    </a>

                                    {{-- Delete Button --}}
                                    <form action="{{ route('manage-consultation.delete', $consultation->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus project ini? Tindakan ini tidak bisa dibatalkan.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center px-3 py-1.5 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center justify-center text-gray-400">
                                    <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                    </svg>
                                    <p class="text-lg font-medium mb-2">Belum ada konsultasi</p>
                                    {{-- <p class="text-sm mb-4">Mulai tambahkan konsultasi pertama Anda</p> --}}
                                    <a href="{{ route('manage-consultation.add') }}"
                                        class="bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold py-2 px-6 rounded-lg shadow-lg transition-all duration-200">
                                        Tambah Konsultasi
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $consultations->links('components.pagination') }}
        </div>
    </div>

    {{-- Category Modal --}}
    <div id="category-modal" class="fixed inset-0 z-50 hidden bg-black/40">
        <div class="bg-white w-full max-w-2xl rounded-2xl shadow-lg overflow-hidden mx-4">
            <div class="p-4 border-b flex items-center justify-between">
                <h3 class="text-lg font-semibold">Kelola Layanan</h3>
                <button id="close-category-modal" class="text-gray-500 hover:text-gray-700">✕</button>
            </div>

            <div class="p-4">
                {{-- Form to add category --}}
                <form action="{{ route('manage-consultation.service.store') }}" method="POST" class="mb-4">
                    @csrf
                    <div class="flex gap-2">
                        <input type="text" name="service_name" placeholder="Nama layanan" required
                            class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none" />
                        <button type="submit" class="px-4 py-2 bg-[#52a08a] text-white rounded-md">Tambah</button>
                    </div>
                </form>

                {{-- Categories table --}}
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr class="text-left text-xs text-gray-500 uppercase tracking-wider">
                                <th class="px-4 py-3">No</th>
                                <th class="px-4 py-3">Layanan</th>
                                <th class="px-4 py-3 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @forelse ($services as $service)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 text-gray-600">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3 text-gray-800">{{ $service->service_name }}</td>
                                    <td class="px-4 py-3 text-right">
                                        <form action="{{ route('manage-consultation.service.destroy', $service->id) }}"
                                            method="POST" class="inline-block"
                                            onsubmit="return confirm('Hapus kategori ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-3 py-1.5 bg-red-500 hover:bg-red-600 text-white rounded-md text-xs">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="py-6 text-center text-gray-400">Belum ada layanan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function() {
            const openBtn = document.getElementById('open-category-modal');
            const closeBtn = document.getElementById('close-category-modal');
            const modal = document.getElementById('category-modal');
            if (openBtn && closeBtn && modal) {
                openBtn.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex', 'items-center', 'justify-center');
                });
                const hide = () => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex', 'items-center', 'justify-center');
                };
                closeBtn.addEventListener('click', hide);
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) hide();
                });
            }
        })();
    </script>
@endsection
