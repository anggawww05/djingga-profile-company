<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Djingga Company</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-[#f8fafc] to-[#e6f4f1] min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md px-6">
        {{-- Login Card --}}
        <div class="bg-white rounded-3xl shadow-2xl border border-[#52a08a]/10 overflow-hidden">

            {{-- Header --}}
            <div class="bg-gradient-to-br from-[#52a08a] to-[#578E7E] px-8 py-10 text-center">
                <h1 class="text-3xl font-bold text-white mb-2">Selamat Datang</h1>
                <p class="text-white/90 text-sm">Silakan login untuk menuju Dashboard</p>
            </div>

            {{-- Form --}}
            <div class="px-8 py-10">
                @if(session('error'))
                    <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm">
                        {{ session('error') }}
                    </div>
                @endif

                @if(session('success'))
                    <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl text-sm">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('login.post') }}" method="POST" class="space-y-6">
                    @csrf

                    {{-- Email Field --}}
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                            Email
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            class="w-full px-4 py-3 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-xl focus:outline-none focus:ring-2 focus:ring-[#52a08a] focus:border-transparent transition-all duration-200"
                            placeholder="nama@email.com"
                        >
                        @error('email')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Password Field --}}
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                            Password
                        </label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            class="w-full px-4 py-3 border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} rounded-xl focus:outline-none focus:ring-2 focus:ring-[#52a08a] focus:border-transparent transition-all duration-200"
                            placeholder="Masukkan password"
                        >
                        @error('password')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-[#52a08a] to-[#578E7E] hover:from-[#466e62] hover:to-[#4a7866] text-white font-semibold py-3 px-6 rounded-xl shadow-lg transition-all duration-200 transform hover:scale-[1.02]"
                    >
                        Login
                    </button>
                </form>

                {{-- Back to Home Link --}}
                <div class="mt-6 text-center">
                    <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-[#52a08a] transition-colors inline-flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>

        {{-- Footer Text --}}
        <div class="text-center mt-6 text-sm text-gray-600">
            <p>&copy; {{ date('Y') }} Djingga Company. All rights reserved.</p>
        </div>
    </div>

</body>
</html>
