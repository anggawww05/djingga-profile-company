@extends('admin.main')

@section('container')
    {{-- Static Data Projects --}}

    <div class="mb-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-[#23272F]">Kelola Project</h1>
                <p class="text-gray-600 mt-1">Kelola semua project yang telah dikerjakan</p>
            </div>
            @if ($projects->count() > 0)
                <div class="flex items-center gap-3">
                    <div class="flex items-center gap-4">
                        <form action="{{ route('manage-project') }}" method="GET" class="flex items-center">
                            <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari project..."
                                class="px-3 py-2 border border-gray-300 rounded-l-md focus:outline-none" />
                            <button type="submit" class="px-3 py-2 bg-[#52a08a] text-white rounded-r-md">Cari</button>
                        </form>

                        <a href="{{ route('manage-project.add') }}"
                            class="bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold py-2 px-6 rounded-lg shadow-lg transition-all duration-200 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Tambah Project
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
                            Judul
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-[#23272F] uppercase tracking-wider">
                            Deskripsi
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-[#23272F] uppercase tracking-wider">
                            Link
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-[#23272F] uppercase tracking-wider">
                            Gambar
                        </th>
                        <th class="px-6 py-4 text-center text-xs font-semibold text-[#23272F] uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($projects as $project)
                        <tr class="hover:bg-[#52a08a]/5 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4 text-sm font-semibold text-[#23272F]">
                                {{ $project->title }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600 max-w-md">
                                {{ Str::limit($project->description, 80) }}
                            </td>
                            <td class="px-6 py-4 text-sm">
                                @if ($project->link)
                                    <a href="{{ $project->link }}" target="_blank"
                                        class="text-[#52a08a] hover:text-[#466e62] font-medium hover:underline">
                                        Kunjungi Project
                                    </a>
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm">
                                @if ($project->image)
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image"
                                        class="w-20 h-12 object-cover rounded-lg shadow-sm">
                                @else
                                    <div
                                        class="w-20 h-12 bg-gradient-to-br from-gray-100 to-gray-200 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex items-center justify-center gap-2">
                                    {{-- Detail Button --}}
                                    <a href="{{ route('manage-project.detail', $project->id) }}"
                                        class="inline-flex items-center px-3 py-1.5 bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                                        Detail
                                    </a>

                                    {{-- Edit Button --}}
                                    <a href="{{ route('manage-project.edit', $project->id) }}"
                                        class="inline-flex items-center px-3 py-1.5 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                                        Edit
                                    </a>

                                    {{-- Delete Button --}}
                                    <form action="{{ route('manage-project.delete', $project->id) }}" method="POST"
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
                                    <p class="text-lg font-medium mb-2">Belum ada project</p>
                                    <p class="text-sm mb-4">Mulai tambahkan project pertama Anda</p>
                                    <a href="{{ route('manage-project.add') }}"
                                        class="bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold py-2 px-6 rounded-lg shadow-lg transition-all duration-200">
                                        Tambah Project
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $projects->links('components.pagination') }}
        </div>
    </div>
@endsection
