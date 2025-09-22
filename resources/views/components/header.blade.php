<header id="main-header" class="absolute top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent">
    <nav class="container mx-auto flex items-center justify-between py-4 px-6">
        <div id="logo-text" class="text-xl font-bold text-white transition-colors duration-300">
            Logo
        </div>
        <ul class="flex space-x-6">
            <li><a href="#" class="nav-link text-white transition-colors duration-300">Home</a></li>
            <li><a href="#" class="nav-link text-white transition-colors duration-300">About</a></li>
            <li><a href="#" class="nav-link text-white transition-colors duration-300">Services</a></li>
            <li><a href="#" class="nav-link text-white transition-colors duration-300">Contact</a></li>
        </ul>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.addEventListener('scroll', function() {
            const header = document.getElementById('main-header');
            const coverSection = document.getElementById('cover');
            const logoText = document.getElementById('logo-text');
            const navLinks = document.querySelectorAll('.nav-link');

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
    });
</script>
