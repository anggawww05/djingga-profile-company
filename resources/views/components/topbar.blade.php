{{-- Simple Topbar Component for Dashboard --}}
<header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-30">
    <div class="flex items-center justify-between px-6 py-4">

        {{-- Left Section --}}
        <div class="flex items-center space-x-4">
            {{-- Mobile Menu Toggle --}}
            <button class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            {{-- Page Title --}}
            <div>
                <h1 class="text-xl font-semibold text-[#23272F]">Dashboard</h1>
                <p class="text-sm text-gray-500">Welcome back, Admin</p>
            </div>
        </div>

        {{-- Right Section --}}
        <div class="flex items-center space-x-4">

            {{-- Search Bar --}}
            <div class="hidden md:block relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" placeholder="Search..."
                       class="w-64 pl-9 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#52a08a] focus:border-transparent text-sm">
            </div>

            {{-- Notifications --}}
            <button class="p-2 rounded-lg hover:bg-gray-100 transition-colors relative">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-3.5-3.5a4.95 4.95 0 01-1.5-3.5V7a6 6 0 00-12 0v3c0 1.33-.5 2.6-1.5 3.5L0 17h5m10 0v1a3 3 0 01-3 3 3 3 0 01-3-3v-1m6 0H9"/>
                </svg>
                <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 text-white rounded-full text-xs flex items-center justify-center">3</span>
            </button>

            {{-- Profile --}}
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-gradient-to-br from-[#52a08a] to-[#578E7E] rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold text-sm">A</span>
                </div>
                <div class="hidden md:block text-left">
                    <p class="text-sm font-medium text-[#23272F]">Admin User</p>
                    <p class="text-xs text-gray-500">Super Admin</p>
                </div>
            </div>
        </div>
    </div>
</header>


