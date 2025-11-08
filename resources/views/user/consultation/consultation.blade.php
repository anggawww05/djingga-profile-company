@extends('user.main')

@section('container')
    {{-- Hero Section --}}
    <section id="cover" class="relative bg-gradient-to-br from-[#578E7E] to-[#23272F] py-20 overflow-hidden mt-5">
        <div class="max-w-6xl mx-auto px-6 md:px-12 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Layanan Konsultasi
            </h1>
            <div class="w-20 h-1 bg-[#52a08a] rounded mx-auto mb-6"></div>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Lakukan konsultasi dengan tim mengenai kebutuhan bisnis dan teknologi Anda.
            </p>
        </div>
        <div class="absolute top-0 right-0 w-48 h-48 bg-[#52a08a]/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
    </section>

    {{-- Contact Form Section --}}
    <section class="py-20 bg-gradient-to-br from-[#f8fafc] to-[#e6f4f1] relative">
        <div class="max-w-4xl mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#23272F] mb-4">Mulai Konsultasi Anda</h2>
                <div class="w-20 h-1 bg-[#52a08a] rounded mx-auto mb-4"></div>
                <p class="text-lg text-gray-600">
                    Isi form di bawah ini dan tim kami akan menghubungi Anda dalam 24 jam
                </p>
            </div>

            <div class="bg-white rounded-3xl shadow-2xl p-8">
                @if (session('success'))
                    <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif
                <form class="space-y-6" method="POST" action="{{ route('consultation.store') }}">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-[#23272F] mb-2">Nama Lengkap</label>
                            <input name="name" type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="Input nama lengkap...">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-[#23272F] mb-2">Email</label>
                            <input name="email" type="email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="Input email...">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-[#23272F] mb-2">No. Telepon</label>
                            <input name="phone" type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="Input no. telepon...">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-[#23272F] mb-2">Perusahaan</label>
                            <input name="company" type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="Input nama perusahaan...">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#23272F] mb-2">Layanan yang Dibutuhkan</label>
                        <select name="service" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors">
                            <option value="">Pilih layanan konsultasi</option>
                            @foreach(($services ?? []) as $s)
                                <option value="{{ optional($s)->id ?? $s }}">{{ optional($s)->service_name ?? $s }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#23272F] mb-2">Deskripsi Kebutuhan</label>
                        <textarea name="description" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="Input deskripsi kebutuhan..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-[#52a08a] hover:bg-[#466e62] text-white font-semibold py-4 px-8 rounded-xl shadow-lg transition-all duration-200">
                        Kirim Permintaan Konsultasi
                    </button>
                </form>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-[#52a08a]/10 rounded-full blur-3xl -z-10"></div>
    </section>
@endsection
