@extends('user.main')

@section('container')
    {{-- Hero Section --}}
    <section id="cover" class="relative bg-gradient-to-br from-[#578E7E] to-[#23272F] py-20 overflow-hidden mt-20">
        <div class="max-w-6xl mx-auto px-6 md:px-12 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Consultation Services
            </h1>
            <div class="w-20 h-1 bg-[#52a08a] rounded mx-auto mb-6"></div>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">
                Dapatkan konsultasi ahli dari tim profesional kami untuk mengembangkan bisnis dan solusi teknologi yang tepat sasaran.
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
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-[#23272F] mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="Masukkan nama lengkap">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-[#23272F] mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="nama@email.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-[#23272F] mb-2">No. Telepon</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="+62 xxx-xxxx-xxxx">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-[#23272F] mb-2">Perusahaan</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="Nama perusahaan">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#23272F] mb-2">Layanan yang Dibutuhkan</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors">
                            <option>Pilih layanan konsultasi</option>
                            <option>IT Infrastructure Consulting</option>
                            <option>Digital Transformation Strategy</option>
                            <option>Digital Marketing Optimization</option>
                            <option>Cybersecurity Assessment</option>
                            <option>Software Architecture Consulting</option>
                            <option>Data Analytics & BI Strategy</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#23272F] mb-2">Deskripsi Kebutuhan</label>
                        <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-[#52a08a] transition-colors" placeholder="Jelaskan kebutuhan dan tantangan yang dihadapi..."></textarea>
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
