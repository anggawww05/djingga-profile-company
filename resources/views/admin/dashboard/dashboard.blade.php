@extends('admin.main')

@section('container')
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-[#23272F] mb-2">Admin Dashboard</h1>
        <p class="text-gray-600">Selamat datang admin, berikut ada overview data yang tersedia.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="w-full p-6 bg-gradient-to-br from-white/60 to-white/40 rounded-3xl shadow-lg border border-transparent ring-1 ring-[#52a08a]/8">

                <div>
                    <h3 class="text-sm font-semibold text-gray-500">Project</h3>
                    <p class="text-3xl font-bold text-[#23272F] mt-2">{{ $projectsCount ?? 0 }}</p>
                    <p class="text-sm text-gray-500 mt-1">Jumlah project dalam perusahaan</p>
                </div>

        </div>

        <div class="w-full p-6 bg-gradient-to-br from-white/60 to-white/40 rounded-3xl shadow-lg border border-transparent ring-1 ring-[#466e62]/8">

                <div>
                    <h3 class="text-sm font-semibold text-gray-500">Aktivitas</h3>
                    <p class="text-3xl font-bold text-[#23272F] mt-2">{{ $activitiesCount ?? 0 }}</p>
                    <p class="text-sm text-gray-500 mt-1">Jumlah aktivitas yang tercatat</p>
                </div>

        </div>

        <div class="w-full p-6 bg-gradient-to-br from-white/60 to-white/40 rounded-3xl shadow-lg border border-transparent ring-1 ring-[#23272F]/8">

                <div>
                    <h3 class="text-sm font-semibold text-gray-500">Konsultasi</h3>
                    <p class="text-3xl font-bold text-[#23272F] mt-2">{{ $servicesCount ?? 0 }}</p>
                    <p class="text-sm text-gray-500 mt-1">Jumlah konsultasi yang masuk</p>
                </div>

        </div>
    </div>

    {{-- Quick tables: Projects, Activities, Consultations (data provided by controller) --}}

    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
        {{-- Projects table --}}
        <div class="bg-white rounded-3xl shadow-lg border border-[#52a08a]/10 p-4">
            <div class="flex items-center justify-between mb-3">
                <h4 class="text-sm font-semibold text-gray-700">Data Project Terbaru</h4>
                <a href="{{ route('manage-project') }}" aria-label="Lihat detail proyek" class="inline-flex items-center gap-2 px-3 py-1.5 bg-gradient-to-r from-[#52a08a] to-[#3b8f73] text-white text-sm font-semibold rounded-lg shadow-sm hover:shadow-md hover:opacity-95 focus:outline-none focus:ring-2 focus:ring-[#52a08a]/30 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    Lihat Detail
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full min-w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr class="text-left text-xs text-gray-500 uppercase tracking-wider">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Judul</th>
                            <th class="px-4 py-3 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse ($recentProjects as $proj)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-4 py-3 align-top text-gray-500">
                                    <div class="text-sm font-medium text-black">
                                        {{ $loop->iteration }}
                                    </div>
                                </td>

                                <td class="px-4 py-3 align-top">

                                        <div class="min-w-0">
                                            <div class="text-sm font-semibold text-gray-800">
                                                {{ Str::limit($proj->title ?? $proj->name ?? '-', 70) }}
                                            </div>
                                            @if(!empty($proj->subtitle ?? $proj->excerpt ?? $proj->description))
                                                <div class="text-xs text-gray-400 mt-1">
                                                    {{ Str::limit($proj->subtitle ?? $proj->excerpt ?? $proj->description, 40) }}
                                                </div>
                                            @endif
                                        </div>

                                </td>

                                <td class="px-4 py-3 align-top text-right">
                                    <a href="{{ route('manage-project.detail', $proj->id) }}" class="inline-flex items-center gap-2 px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-xs font-medium text-gray-700 hover:shadow-sm transition">
                                        Lihat
                                        <svg class="w-3.5 h-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="py-6 text-center text-gray-400">
                                    Belum ada data
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Activities table --}}
        <div class="bg-white rounded-3xl shadow-lg border border-[#52a08a]/10 p-4">
            <div class="flex items-center justify-between mb-3">
                <h4 class="text-sm font-semibold text-gray-700">Data Aktivitas Terbaru</h4>
                <a href="{{ route('manage-activity') }}" aria-label="Lihat detail proyek" class="inline-flex items-center gap-2 px-3 py-1.5 bg-gradient-to-r from-[#52a08a] to-[#3b8f73] text-white text-sm font-semibold rounded-lg shadow-sm hover:shadow-md hover:opacity-95 focus:outline-none focus:ring-2 focus:ring-[#52a08a]/30 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    Lihat Detail
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full min-w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr class="text-left text-xs text-gray-500 uppercase tracking-wider">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Judul</th>
                            <th class="px-4 py-3 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse ($recentActivities as $act)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-4 py-3 align-top text-gray-500">
                                    <div class="text-sm font-medium text-black">
                                        {{ $loop->iteration }}
                                    </div>
                                </td>

                                <td class="px-4 py-3 align-top">
                                    <div class="min-w-0">
                                        <div class="text-sm font-semibold text-gray-800">
                                            {{ Str::limit($act->title ?? $act->name ?? '-', 70) }}
                                        </div>
                                        @if(!empty($act->subtitle ?? $act->excerpt ?? $act->description))
                                            <div class="text-xs text-gray-400 mt-1">
                                                {{ Str::limit($act->subtitle ?? $act->excerpt ?? $act->description, 40) }}
                                            </div>
                                        @endif
                                    </div>
                                </td>

                                <td class="px-4 py-3 align-top text-right">
                                    <a href="{{ route('manage-activity.detail', $act->id) }}" class="inline-flex items-center gap-2 px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-xs font-medium text-gray-700 hover:shadow-sm transition">
                                        Lihat
                                        <svg class="w-3.5 h-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="py-6 text-center text-gray-400">
                                    Belum ada data
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Consultations table --}}
        <div class="bg-white rounded-3xl shadow-lg border border-[#52a08a]/10 p-4">
            <div class="flex items-center justify-between mb-3">
                <h4 class="text-sm font-semibold text-gray-700">Data Konsultasi</h4>
                <a href="{{ route('manage-consultation') }}" aria-label="Lihat detail proyek" class="inline-flex items-center gap-2 px-3 py-1.5 bg-gradient-to-r from-[#52a08a] to-[#3b8f73] text-white text-sm font-semibold rounded-lg shadow-sm hover:shadow-md hover:opacity-95 focus:outline-none focus:ring-2 focus:ring-[#52a08a]/30 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    Lihat Detail
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full min-w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr class="text-left text-xs text-gray-500 uppercase tracking-wider">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Nama</th>
                            <th class="px-4 py-3 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse ($recentConsultations as $c)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-4 py-3 align-top text-gray-500">
                                    <div class="text-sm font-medium text-black">
                                        {{ $loop->iteration }}
                                    </div>
                                </td>

                                <td class="px-4 py-3 align-top">
                                    <div class="min-w-0">
                                        <div class="text-sm font-semibold text-gray-800">
                                            {{ Str::limit($c->name ?? $c->email ?? '-', 70) }}
                                        </div>
                                        @if(!empty($c->description))
                                            <div class="text-xs text-gray-400 mt-1">
                                                {{ Str::limit($c->description, 40) }}
                                            </div>
                                        @endif
                                    </div>
                                </td>

                                <td class="px-4 py-3 align-top text-right">
                                    <a href="{{ route('manage-consultation.detail', $c->id) }}" class="inline-flex items-center gap-2 px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-xs font-medium text-gray-700 hover:shadow-sm transition">
                                        Lihat
                                        <svg class="w-3.5 h-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="py-6 text-center text-gray-400">
                                    Belum ada data
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
