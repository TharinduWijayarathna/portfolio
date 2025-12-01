<section id="about" class="py-24 fade-in-section">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                About Me
            </h2>
            <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
                Passionate developer with a love for creating exceptional digital experiences
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Bio Content -->
            <div class="space-y-6">
                <h3 class="text-2xl font-semibold">Hi, I'm [Your Name]</h3>
                <p class="text-muted-foreground leading-relaxed">
                    I'm a <strong>Full Stack Developer</strong> with [X] years of experience building modern web applications.
                    I specialize in creating scalable, performant, and user-friendly solutions that solve real-world problems.
                </p>
                <p class="text-muted-foreground leading-relaxed">
                    My journey in tech started with [brief story]. Since then, I've worked on diverse projects ranging from
                    [project types] to [other types], always pushing the boundaries of what's possible.
                </p>
                <p class="text-muted-foreground leading-relaxed">
                    When I'm not coding, you'll find me [hobbies/interests]. I believe in continuous learning and
                    staying updated with the latest technologies to deliver the best solutions.
                </p>

                <div class="flex gap-4 pt-4">
                    <x-ui.button tag="a" href="#contact">
                        Let's Connect
                    </x-ui.button>
                    <x-ui.button variant="outline" tag="a" href="/path-to-resume.pdf" download>
                        <x-icons.download class="mr-2 size-4" />
                        Download CV
                    </x-ui.button>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-2 gap-6">
                <x-ui.card class="group hover:scale-105 transition-transform duration-300">
                    <x-ui.card-content class="p-6">
                        <div class="text-4xl font-bold text-primary mb-2 group-hover:scale-110 transition-transform">
                            5+
                        </div>
                        <div class="text-sm text-muted-foreground">
                            Years Experience
                        </div>
                    </x-ui.card-content>
                </x-ui.card>

                <x-ui.card class="group hover:scale-105 transition-transform duration-300">
                    <x-ui.card-content class="p-6">
                        <div class="text-4xl font-bold text-purple-600 mb-2 group-hover:scale-110 transition-transform">
                            50+
                        </div>
                        <div class="text-sm text-muted-foreground">
                            Projects Completed
                        </div>
                    </x-ui.card-content>
                </x-ui.card>

                <x-ui.card class="group hover:scale-105 transition-transform duration-300">
                    <x-ui.card-content class="p-6">
                        <div class="text-4xl font-bold text-pink-600 mb-2 group-hover:scale-110 transition-transform">
                            100%
                        </div>
                        <div class="text-sm text-muted-foreground">
                            Client Satisfaction
                        </div>
                    </x-ui.card-content>
                </x-ui.card>

                <x-ui.card class="group hover:scale-105 transition-transform duration-300">
                    <x-ui.card-content class="p-6">
                        <div class="text-4xl font-bold text-blue-600 mb-2 group-hover:scale-110 transition-transform">
                            20+
                        </div>
                        <div class="text-sm text-muted-foreground">
                            Technologies
                        </div>
                    </x-ui.card-content>
                </x-ui.card>
            </div>
        </div>
    </div>
</section>
