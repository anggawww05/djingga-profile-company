@extends('admin.main')

@section('container')
    <div class="mb-6">
        <div class="flex items-center gap-4">
            {{-- Back Button --}}
            <a href="{{ route('manage-consultation') }}"
                class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
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

    {{-- Error Messages --}}
    @if ($errors->any())
        <div class="mb-6 bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg">
            <div class="flex items-start gap-3">
                <svg class="w-5 h-5 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                        clip-rule="evenodd" />
                </svg>
                <div>
                    <p class="font-semibold mb-1">Terdapat beberapa error:</p>
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li class="text-sm">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    {{-- Form Card --}}
    <div class="bg-white rounded-3xl shadow-lg border border-[#52a08a]/10 overflow-hidden">
        <div class="p-8">
            <form action="{{ route('manage-consultation.update', $consultation->id) }}" method="POST">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-[#23272F] mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input name="name" type="text" required value="{{ old('name', $consultation->name) }}" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="Masukkan nama lengkap">
                        @error('name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-[#23272F] mb-2">Email</label>
                        <input name="email" type="email" value="{{ old('email', $consultation->email) }}" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="nama@email.com">
                        @error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div>
                        <label class="block text-sm font-semibold text-[#23272F] mb-2">No. Telepon</label>
                        <input name="phone" type="tel" value="{{ old('phone', $consultation->phone) }}" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="+62 xxx-xxxx-xxxx">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-[#23272F] mb-2">Perusahaan</label>
                        <input name="company" type="text" value="{{ old('company', $consultation->company) }}" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="Nama perusahaan">
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-semibold text-[#23272F] mb-2">Layanan yang Dibutuhkan</label>
                    <select name="service" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors">
                        <option value="">Pilih layanan konsultasi</option>
                        @foreach(($services ?? []) as $s)
                            <option value="{{ optional($s)->id ?? $s }}"
                                @if(old('service', $consultation->service) == (optional($s)->service_name ?? $s) || old('service', $consultation->service) == (optional($s)->id ?? $s)) selected @endif>
                                {{ optional($s)->service_name ?? $s }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-semibold text-[#23272F] mb-2">Status</label>
                    <select name="status" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors">
                        <option value="pending" @selected(old('status', 'pending') == 'pending')>Belum Selesai</option>
                        <option value="done" @selected(old('status') == 'done')>Selesai</option>
                    </select>
                    @error('status')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-semibold text-[#23272F] mb-2">Deskripsi Kebutuhan</label>
                    <textarea name="description" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="Jelaskan kebutuhan dan tantangan yang dihadapi...">{{ old('description', $consultation->description) }}</textarea>
                </div>

                <div class="flex items-center justify-end gap-4 pt-6 border-t border-gray-200 mt-8">
                    {{-- <a href="{{ route('manage-consultation') }}" class="px-6 py-2.5 border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-all duration-200">Batal</a> --}}
                    <button type="submit" class="px-6 py-2.5 bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold rounded-lg shadow-lg transition-all duration-200">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
