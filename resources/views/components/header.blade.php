<header id="main-header" class="absolute top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent">
    <nav class="container mx-auto flex items-center justify-between py-4 px-6">
        <div id="logo-text" class="text-xl font-bold text-white transition-colors duration-300">
            Logo
        </div>
        <ul class="flex space-x-6">
            <li><a href="{{ route('home') }}" class="nav-link text-white transition-colors duration-300">Home</a></li>
            <li><a href="{{ route('profile') }}" class="nav-link text-white transition-colors duration-300">Profile</a></li>
            <li><a href="{{ route('project') }}" class="nav-link text-white transition-colors duration-300">Project</a></li>
            <li><a href="{{ route('activity') }}" class="nav-link text-white transition-colors duration-300">Activity</a></li>
            <li><a href="{{ route('consultation') }}" class="nav-link text-white transition-colors duration-300">Consultation</a></li>
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
        const isDetailProjectPage = window.location.pathname === '/project/detail-project';
        const isActivityPage = window.location.pathname === '/activity';
        const isConsultationPage = window.location.pathname === '/consultation';

        if (isProfilePage || isProjectPage || isDetailProjectPage || isActivityPage || isConsultationPage) {
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
</style>
