<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Portfolio') }} - Full Stack Developer</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|space-grotesk:400,500,600,700" rel="stylesheet" />
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background text-foreground antialiased overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-background/80 border-b border-border/40">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="#home" class="text-xl font-bold bg-gradient-to-r from-primary to-purple-600 bg-clip-text text-transparent">
                    Portfolio
                </a>
                
                <div class="hidden md:flex items-center gap-8">
                    <a href="#about" class="text-sm font-medium hover:text-primary transition-colors">About</a>
                    <a href="#skills" class="text-sm font-medium hover:text-primary transition-colors">Skills</a>
                    <a href="#experience" class="text-sm font-medium hover:text-primary transition-colors">Experience</a>
                    <a href="#projects" class="text-sm font-medium hover:text-primary transition-colors">Projects</a>
                    <a href="#contact" class="text-sm font-medium hover:text-primary transition-colors">Contact</a>
                </div>

                <x-ui.button size="sm" class="hidden md:inline-flex" tag="a" href="#contact">
                    Let's Talk
                </x-ui.button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <x-portfolio.hero-section />

    <!-- About Section -->
    <x-portfolio.about-section />

    <!-- Skills Section -->
    <x-portfolio.skills-grid />

    <!-- Experience Timeline -->
    <x-portfolio.experience-timeline />

    <!-- Projects Section -->
    <x-portfolio.projects-section />

    <!-- Contact Section -->
    <x-portfolio.contact-section />

    <!-- Footer -->
    <footer class="py-8 border-t border-border/40">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-sm text-muted-foreground">
                © {{ date('Y') }} {{ config('app.name') }}. Built with Laravel & BladeCN.
            </p>
        </div>
    </footer>

    <script>
        // Smooth scroll for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Scroll animations using Intersection Observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-section').forEach(el => observer.observe(el));
    </script>
</body>
</html>
