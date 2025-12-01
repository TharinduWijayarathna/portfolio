<section id="home" class="min-h-screen relative flex items-center justify-center overflow-hidden">
    <!-- Animated Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary/10 via-purple-500/10 to-pink-500/10">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iZ3JpZCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNIDQwIDAgTCAwIDAgMCA0MCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJyZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMDMpIiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-40"></div>
    </div>

    <!-- Floating Orbs -->
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/20 rounded-full blur-3xl animate-blob"></div>
    <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl animate-blob animation-delay-2000"></div>
    <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-pink-500/20 rounded-full blur-3xl animate-blob animation-delay-4000"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 py-20 text-center">
        <!-- Avatar -->
        <div class="mb-8 flex justify-center animate-fade-in-up">
            <x-ui.avatar class="size-32 border-4 border-primary/20 shadow-2xl">
                <x-ui.avatar-fallback 
                    name="Your Name" 
                    class="text-4xl font-bold bg-gradient-to-br from-primary to-purple-600 text-white"
                />
            </x-ui.avatar>
        </div>

        <!-- Greeting -->
        <div class="mb-4 animate-fade-in-up animation-delay-200">
            <span class="inline-block px-4 py-2 rounded-full bg-primary/10 border border-primary/20 text-sm font-medium text-primary mb-4">
                👋 Hello, I'm
            </span>
        </div>

        <!-- Name with Gradient -->
        <h1 class="text-6xl md:text-8xl font-bold mb-6 animate-fade-in-up animation-delay-400">
            <span class="bg-gradient-to-r from-primary via-purple-600 to-pink-600 bg-clip-text text-transparent">
                Your Name
            </span>
        </h1>

        <!-- Typewriter Title -->
        <div class="text-2xl md:text-4xl font-medium text-muted-foreground mb-8 h-12 animate-fade-in-up animation-delay-600">
            <span id="typewriter"></span>
            <span class="animate-pulse">|</span>
        </div>

        <!-- Description -->
        <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto mb-12 animate-fade-in-up animation-delay-800">
            I craft beautiful digital experiences with clean code and stunning designs. 
            Passionate about building scalable web applications that make a difference.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-wrap gap-4 justify-center animate-fade-in-up animation-delay-1000">
            <x-ui.button size="lg" tag="a" href="#projects" class="group">
                View My Work
                <x-icons.arrow-right class="ml-2 group-hover:translate-x-1 transition-transform" />
            </x-ui.button>
            <x-ui.button size="lg" variant="outline" tag="a" href="#contact">
                Get In Touch
            </x-ui.button>
        </div>

        <!-- Social Links -->
        <div class="mt-12 flex gap-4 justify-center animate-fade-in-up animation-delay-1200">
           <a href="https://github.com/yourusername" target="_blank" class="p-3 rounded-full bg-card hover:bg-accent transition-colors">
                <svg class="size-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
            </a>
            <a href="https://linkedin.com/in/yourusername" target="_blank" class="p-3 rounded-full bg-card hover:bg-accent transition-colors">
                <x-icons.linkedin class="size-5" />
            </a>
            <a href="https://twitter.com/yourusername" target="_blank" class="p-3 rounded-full bg-card hover:bg-accent transition-colors">
                <svg class="size-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                </svg>
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <a href="#about" class="flex flex-col items-center gap-2 text-muted-foreground hover:text-primary transition-colors">
            <span class="text-sm">Scroll Down</span>
            <x-icons.chevron-down class="size-6" />
        </a>
    </div>

    <script>
        // Typewriter effect
        const titles = [
            'Full Stack Developer',
            'UI/UX Enthusiast', 
            'Problem Solver',
            'Tech Innovator'
        ];
        let titleIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typewriterElement = document.getElementById('typewriter');

        function typeWriter() {
            const currentTitle = titles[titleIndex];
            
            if (isDeleting) {
                typewriterElement.textContent = currentTitle.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typewriterElement.textContent = currentTitle.substring(0, charIndex + 1);
                charIndex++;
            }

            let typeSpeed = isDeleting ? 50 : 100;

            if (!isDeleting && charIndex === currentTitle.length) {
                typeSpeed = 2000;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                titleIndex = (titleIndex + 1) % titles.length;
            }

            setTimeout(typeWriter, typeSpeed);
        }

        // Start typewriter effect
        setTimeout(typeWriter, 1000);
    </script>
</section>
