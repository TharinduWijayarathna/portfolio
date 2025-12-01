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
                <h3 class="text-2xl font-semibold">Hi, I'm Tharindu Wijayarathna</h3>
                <p class="text-muted-foreground leading-relaxed">
                    I'm a <strong>Software Engineer</strong> with 4+ years of experience building modern web applications.
                    I specialize in Node.js and Laravel, creating scalable, performant, and user-friendly solutions that solve real-world problems.
                </p>
                <p class="text-muted-foreground leading-relaxed">
                    Bringing four years of software industry expertise, I've adeptly navigated diverse projects, mastering various programming languages and methodologies. From architecting scalable solutions to troubleshooting technical challenges, I excel in delivering innovative software that exceeds expectations.
                </p>
                <p class="text-muted-foreground leading-relaxed">
                    Currently working at Eequate in Sydney, Australia, I'm committed to continuous learning and excellence in software development. My experience spans across various technologies including React, PostgreSQL, Business Intelligence, and R programming.
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
                            4+
                        </div>
                        <div class="text-sm text-muted-foreground">
                            Years Experience
                        </div>
                    </x-ui.card-content>
                </x-ui.card>

                <x-ui.card class="group hover:scale-105 transition-transform duration-300">
                    <x-ui.card-content class="p-6">
                        <div class="text-4xl font-bold text-purple-600 mb-2 group-hover:scale-110 transition-transform">
                            20+
                        </div>
                        <div class="text-sm text-muted-foreground">
                            Projects Completed
                        </div>
                    </x-ui.card-content>
                </x-ui.card>

                <x-ui.card class="group hover:scale-105 transition-transform duration-300">
                    <x-ui.card-content class="p-6">
                        <div class="text-4xl font-bold text-pink-600 mb-2 group-hover:scale-110 transition-transform">
                            3
                        </div>
                        <div class="text-sm text-muted-foreground">
                            Companies
                        </div>
                    </x-ui.card-content>
                </x-ui.card>

                <x-ui.card class="group hover:scale-105 transition-transform duration-300">
                    <x-ui.card-content class="p-6">
                        <div class="text-4xl font-bold text-blue-600 mb-2 group-hover:scale-110 transition-transform">
                            10+
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
