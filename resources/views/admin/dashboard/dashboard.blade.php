@extends('admin.main')

@section('container')
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-[#23272F] mb-2">Admin Dashboard</h1>
        <p class="text-gray-600">Ringkasan cepat jumlah data di sistem — gunakan kartu di bawah untuk melihat total item dan masuk ke halaman manajemen masing-masing.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="w-full p-6 bg-white rounded-3xl shadow-lg border border-[#52a08a]/10">
            <h3 class="text-sm font-semibold text-gray-500">Proyek</h3>
            <p class="text-3xl font-bold text-[#23272F] mt-2">{{ $projectsCount ?? 0 }}</p>
            <p class="text-sm text-gray-500 mt-1">Jumlah proyek dalam perusahaan</p>
        </div>

        <div class="w-full p-6 bg-white rounded-3xl shadow-lg border border-[#52a08a]/10">
            <h3 class="text-sm font-semibold text-gray-500">Aktivitas</h3>
            <p class="text-3xl font-bold text-[#23272F] mt-2">{{ $activitiesCount ?? 0 }}</p>
            <p class="text-sm text-gray-500 mt-1">Jumlah aktivitas yang tercatat</p>
        </div>

        <div class="w-full p-6 bg-white rounded-3xl shadow-lg border border-[#52a08a]/10">
            <h3 class="text-sm font-semibold text-gray-500">Konsultasi</h3>
            <p class="text-3xl font-bold text-[#23272F] mt-2">{{ $servicesCount ?? 0 }}</p>
            <p class="text-sm text-gray-500 mt-1">Jumlah layanan yang tersedia</p>
        </div>
    </div>
@endsection
