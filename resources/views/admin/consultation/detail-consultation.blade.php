@extends('admin.main')

@section('container')
    <div class="mb-6">
        <div class="flex items-center gap-4">
            {{-- Back Button --}}
            <a href="{{ route('manage-consultation') }}" class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-[#23272F]">Edit Konsultasi</h1>
                <p class="text-gray-600 mt-1">Perbarui data konsultasi di bawah ini</p>
            </div>
        </div>
    </div>

    {{-- Form Card --}}
    <div class="bg-white rounded-3xl shadow-lg border border-[#52a08a]/10 overflow-hidden">
        <div class="p-8">


            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-[#23272F] mb-2">Nama Lengkap </label>
                    <div
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors">
                        {{ $consultation->name ?? '-' }}</div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-[#23272F] mb-2">Email</label>
                    <div
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors">
                        {{ $consultation->email ?? '-' }}</div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div>
                        <label class="block text-sm font-semibold text-[#23272F] mb-2">No. Telepon</label>
                        <div
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors">
                            {{ $consultation->phone ?? '-' }}</div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-[#23272F] mb-2">Perusahaan</label>
                        <div
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors">
                            {{ $consultation->company ?? '-' }} </div>

                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-semibold text-[#23272F] mb-2">Layanan yang Dibutuhkan</label>
                    <div
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors">
                        {{ optional(collect($services ?? [])->firstWhere('id', $consultation->service))->service_name ?? ($consultation->service ?? '-') }}
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-semibold text-[#23272F] mb-2">Deskripsi Kebutuhan</label>
                    <div
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors">
                        {{ $consultation->description ?? '-' }}</div>
                </div>
            </div>
        </div>
    @endsection
