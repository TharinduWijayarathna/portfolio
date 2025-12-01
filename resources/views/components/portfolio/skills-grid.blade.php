<section id="skills" class="py-24 bg-muted/30 fade-in-section">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Skills & Expertise
            </h2>
            <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
                Technologies and tools I use to bring ideas to life
            </p>
        </div>

        <!-- Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Large Featured Skill -->
            <x-ui.card class="md:col-span-2 md:row-span-2 group hover:shadow-xl transition-all duration-300 border-2 hover:border-primary/50 bg-gradient-to-br from-primary/5 to-purple-500/5">
                <x-ui.card-content class="p-8 h-full flex flex-col justify-between">
                    <div>
                        <div class="mb-4 p-4 bg-primary/10 rounded-full w-fit">
                            <svg class="size-12 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Full Stack Development</h3>
                        <p class="text-muted-foreground mb-4">
                            Building end-to-end web applications with modern frameworks and best practices
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <x-ui.badge>Laravel</x-ui.badge>
                            <x-ui.badge>React</x-ui.badge>
                            <x-ui.badge>Node.js</x-ui.badge>
                            <x-ui.badge>PostgreSQL</x-ui.badge>
                        </div>
                    </div>
                    <x-ui.progress value="95" class="mt-6" />
                </x-ui.card-content>
            </x-ui.card>

            <!-- Frontend -->
            <x-ui.card class="group hover:shadow-lg transition-all duration-300 hover:scale-105 bg-card">
                <x-ui.card-content class="p-6">
                    <div class="mb-3 p-3 bg-blue-500/10 rounded-lg w-fit">
                        <svg class="size-8 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-2.29-2.333A17.9 17.9 0 018.027 13H4.062a8.008 8.008 0 005.648 6.667zM10.03 13c.151 2.439.848 4.73 1.97 6.752A15.905 15.905 0 0013.97 13h-3.94zm9.908 0h-3.965a17.9 17.9 0 01-1.683 6.667A8.008 8.008 0 0019.938 13zM4.062 11h3.965A17.9 17.9 0 019.71 4.333 8.008 8.008 0 004.062 11zm5.969 0h3.938A15.905 15.905 0 0012 4.248 15.905 15.905 0 0010.03 11zm4.259-6.667A17.9 17.9 0 0115.973 11h3.965a8.008 8.008 0 00-5.648-6.667z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold mb-2">Frontend</h4>
                    <p class="text-sm text-muted-foreground mb-3">Modern UI/UX</p>
                    <x-ui.progress value="90" />
                </x-ui.card-content>
            </x-ui.card>

            <!-- Backend -->
            <x-ui.card class="group hover:shadow-lg transition-all duration-300 hover:scale-105 bg-card">
                <x-ui.card-content class="p-6">
                    <div class="mb-3 p-3 bg-green-500/10 rounded-lg w-fit">
                        <svg class="size-8 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold mb-2">Backend</h4>
                    <p class="text-sm text-muted-foreground mb-3">APIs & Databases</p>
                    <x-ui.progress value="92" />
                </x-ui.card-content>
            </x-ui.card>

            <!-- DevOps -->
            <x-ui.card class="md:col-span-2 group hover:shadow-lg transition-all duration-300 hover:scale-105 bg-card">
                <x-ui.card-content class="p-6">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-orange-500/10 rounded-lg">
                            <svg class="size-8 text-orange-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13 3v7h7a10 10 0 11-10-10 10 10 0 013 .464z"/><path d="M13 3.055A9.952 9.952 0 0113 3v7h7a9.987 9.987 0 01-7 7.945z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold mb-2">DevOps & Cloud</h4>
                            <p class="text-sm text-muted-foreground mb-3">CI/CD, Docker, AWS</p>
                            <x-ui.progress value="85" />
                        </div>
                    </div>
                </x-ui.card-content>
            </x-ui.card>

            <!-- UI/UX Design -->
            <x-ui.card class="group hover:shadow-lg transition-all duration-300 hover:scale-105 bg-card">
                <x-ui.card-content class="p-6">
                    <div class="mb-3 p-3 bg-purple-500/10 rounded-lg w-fit">
                        <svg class="size-8 text-purple-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold mb-2">UI/UX</h4>
                    <p class="text-sm text-muted-foreground mb-3">Design Systems</p>
                    <x-ui.progress value="88" />
                </x-ui.card-content>
            </x-ui.card>

            <!-- Mobile Development -->
            <x-ui.card class="group hover:shadow-lg transition-all duration-300 hover:scale-105 bg-card">
                <x-ui.card-content class="p-6">
                    <div class="mb-3 p-3 bg-pink-500/10 rounded-lg w-fit">
                        <svg class="size-8 text-pink-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold mb-2">Mobile</h4>
                    <p class="text-sm text-muted-foreground mb-3">Cross-platform</p>
                    <x-ui.progress value="80" />
                </x-ui.card-content>
            </x-ui.card>
        </div>
    </div>
</section>
