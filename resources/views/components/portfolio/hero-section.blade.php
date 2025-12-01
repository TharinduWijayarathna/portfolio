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
                <img src="{{ asset('profile.png') }}" alt="Tharindu Wijayarathna" class="object-cover" />
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
                Tharindu Wijayarathna
            </span>
        </h1>

        <!-- Typewriter Title -->
        <div class="text-2xl md:text-4xl font-medium text-muted-foreground mb-8 h-12 animate-fade-in-up animation-delay-600">
            <span id="typewriter"></span>
            <span class="animate-pulse">|</span>
        </div>

        <!-- Description -->
        <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto mb-12 animate-fade-in-up animation-delay-800">
            Software Engineer with 4+ years of experience building scalable web applications. 
            Passionate about creating innovative solutions using modern technologies and best practices.
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
            <a href="https://tharinduwijayarathna.link" target="_blank" class="p-3 rounded-full bg-card hover:bg-accent transition-colors">
                <svg class="size-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M13.5 2C13.5 2 13.8181 3.31818 15 4.5C16.1819 5.68182 17.5 6 17.5 6L15.5 8C15.5 8 14.6819 7.81818 13.5 6.5C12.3181 5.18182 12 4 12 4L13.5 2ZM9.5 6C9.5 6 9.81809 7.31818 11 8.5C12.1819 9.68182 13.5 10 13.5 10L11.5 12C11.5 12 10.6819 11.8182 9.5 10.5C8.31809 9.18182 8 8 8 8L9.5 6ZM20.5 15C20.5 15 19.1819 14.682 18 13.5C16.8181 12.318 16.5 11 16.5 11L18.5 9C18.5 9 19.3181 9.18182 20.5 10.5C21.6819 11.8182 22 13 22 13L20.5 15ZM16.5 19C16.5 19 15.1819 18.682 14 17.5C12.8181 16.318 12.5 15 12.5 15L14.5 13C14.5 13 15.3181 13.1818 16.5 14.5C17.6819 15.8182 18 17 18 17L16.5 19Z"/>
                </svg>
            </a>
            <a href="https://linkedin.com/in/tharindu-wijayarathna" target="_blank" class="p-3 rounded-full bg-card hover:bg-accent transition-colors">
                <x-icons.linkedin class="size-5" />
            </a>
            <a href="mailto:tharinduwijayarathne87@gmail.com" class="p-3 rounded-full bg-card hover:bg-accent transition-colors">
                <x-icons.mail class="size-5" />
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
            'Software Engineer',
            'Node.js & Laravel Developer',
            'Full Stack Developer',
            'Tech Enthusiast'
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
