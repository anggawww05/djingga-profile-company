<header id="main-header" class="absolute top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent">
    <nav class="container mx-auto flex items-center justify-between py-4 px-6">
        <div id="logo-text" class="flex items-center gap-2 text-xl font-bold text-white transition-colors duration-300">
            <img src="{{ asset('assets/logo-djingga.png') }}" alt="Djingga Logo" class="h-8 w-auto">
            <span>Djingga</span>
        </div>
        @php
            // determine active nav by current route/path
            $isHome = request()->routeIs('home') || request()->is('/');
            $isProfile = request()->routeIs('profile') || request()->is('profile*');
            $isProject = request()->is('project*') || request()->routeIs('project');
            $isActivity = request()->is('activity*') || request()->routeIs('activity');
            $isConsultation = request()->is('consultation*') || request()->routeIs('consultation');
        @endphp

        <ul class="flex space-x-6">
            <li>
                <a href="{{ route('home') }}" class="nav-link {{ $isHome ? 'active' : '' }} text-white transition-colors duration-300">Beranda</a>
            </li>
            <li>
                <a href="{{ route('profile') }}" class="nav-link {{ $isProfile ? 'active' : '' }} text-white transition-colors duration-300">Profil</a>
            </li>
            <li>
                <a href="{{ route('project') }}" class="nav-link {{ $isProject ? 'active' : '' }} text-white transition-colors duration-300">Project</a>
            </li>
            <li>
                <a href="{{ route('activity') }}" class="nav-link {{ $isActivity ? 'active' : '' }} text-white transition-colors duration-300">Aktivitas</a>
            </li>
            <li>
                <a href="{{ route('consultation') }}" class="nav-link {{ $isConsultation ? 'active' : '' }} text-white transition-colors duration-300">Konsultasi</a>
            </li>
        </ul>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('main-header');
        const logoText = document.getElementById('logo-text');
        const navLinks = document.querySelectorAll('.nav-link');

        // Deteksi halaman profile, project, activity, dan consultation berdasarkan URL
        const isProfilePage = window.location.pathname === '/profile';
        const isProjectPage = window.location.pathname === '/project';
    // detail pages include an id segment, e.g. /project/detail-project/123
        const isDetailProjectPage = window.location.pathname.startsWith('/project/detail-project');
        const isFullProjectPage = window.location.pathname.startsWith('/project/full-project');
        const isActivityPage = window.location.pathname === '/activity';
        const isDetailActivityPage = window.location.pathname.startsWith('/activity/detail-activity');
        const isFullActivityPage = window.location.pathname.startsWith('/activity/full-activity');
        const isConsultationPage = window.location.pathname === '/consultation';

        if (isProfilePage || isProjectPage || isDetailProjectPage || isFullProjectPage || isActivityPage || isDetailActivityPage || isFullActivityPage || isConsultationPage) {
            // Untuk halaman profile: header putih permanen tanpa animasi
            header.classList.remove('absolute', 'bg-transparent');
            header.classList.add('fixed', 'bg-white', 'shadow-md');
            logoText.classList.remove('text-white');
            logoText.classList.add('text-black');
            navLinks.forEach(link => {
                link.classList.remove('text-white');
                link.classList.add('text-black');
            });

            // Tambahkan margin top ke body untuk kompensasi header fixed
            document.body.style.paddingTop = '80px';
        } else {
            // Untuk halaman lain (seperti landing page): gunakan animasi scroll
            window.addEventListener('scroll', function() {
                const coverSection = document.getElementById('cover');

                if (coverSection) {
                    const coverHeight = coverSection.offsetHeight;

                    if (window.scrollY > coverHeight - 100) {
                        header.classList.remove('absolute', 'bg-transparent');
                        header.classList.add('fixed', 'bg-white', 'shadow-md');
                        logoText.classList.remove('text-white');
                        logoText.classList.add('text-black');
                        navLinks.forEach(link => {
                            link.classList.remove('text-white');
                            link.classList.add('text-black');
                        });
                    } else {
                        header.classList.remove('fixed', 'bg-white', 'shadow-md');
                        header.classList.add('absolute', 'bg-transparent');
                        logoText.classList.remove('text-black');
                        logoText.classList.add('text-white');
                        navLinks.forEach(link => {
                            link.classList.remove('text-black');
                            link.classList.add('text-white');
                        });
                    }
                }
            });
        }
    });
</script>

<style>
    /* Hover effect untuk nav links pada halaman profile */
    .nav-link:hover {
        color: #52a08a !important;
        transition: color 0.3s ease;
    }

    /* Active nav indicator */
    .nav-link.active {
        color: #52a08a !important;
        font-weight: 700;
        position: relative;
    }

    .nav-link.active::after {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: -8px;
        width: 60%;
        height: 3px;
        background: #52a08a;
        border-radius: 2px;
    }
</style>
