<section id="projects" class="py-24 bg-muted/30 fade-in-section">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Featured Projects
            </h2>
            <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
                A selection of my recent work and side projects
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project Card 1 -->
            <x-ui.card class="group overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <!-- Project Image -->
                <div class="relative h-48 bg-gradient-to-br from-primary/20 to-purple-500/20 overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="size-20 text-primary/40" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <!-- Hover Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <x-ui.card-content class="p-6">
                    <div class="mb-4">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">
                            E-Commerce Platform
                        </h3>
                        <p class="text-sm text-muted-foreground line-clamp-3">
                            A full-featured e-commerce platform with payment integration, inventory management,
                            and real-time analytics dashboard.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <x-ui.badge variant="secondary">Laravel</x-ui.badge>
                        <x-ui.badge variant="secondary">Vue.js</x-ui.badge>
                        <x-ui.badge variant="secondary">MySQL</x-ui.badge>
                    </div>

                    <div class="flex gap-3">
                        <x-ui.button size="sm" variant="outline" tag="a" href="#" class="flex-1">
                            <svg class="size-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </x-ui.button>
                        <x-ui.button size="sm" tag="a" href="#" class="flex-1">
                            <x-icons.arrow-up-right class="size-4 mr-1" />
                            Demo
                        </x-ui.button>
                    </div>
                </x-ui.card-content>
            </x-ui.card>

            <!-- Project Card 2 -->
            <x-ui.card class="group overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative h-48 bg-gradient-to-br from-blue-500/20 to-cyan-500/20 overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="size-20 text-blue-500/40" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/>
                        </svg>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <x-ui.card-content class="p-6">
                    <div class="mb-4">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition-colors">
                            Task Management SaaS
                        </h3>
                        <p class="text-sm text-muted-foreground line-clamp-3">
                            Collaborative task management tool with real-time updates, team chat,
                            and advanced project tracking features.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <x-ui.badge variant="secondary">React</x-ui.badge>
                        <x-ui.badge variant="secondary">Node.js</x-ui.badge>
                        <x-ui.badge variant="secondary">MongoDB</x-ui.badge>
                    </div>

                    <div class="flex gap-3">
                        <x-ui.button size="sm" variant="outline" tag="a" href="#" class="flex-1">
                            <svg class="size-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </x-ui.button>
                        <x-ui.button size="sm" tag="a" href="#" class="flex-1">
                            <x-icons.arrow-up-right class="size-4 mr-1" />
                            Demo
                        </x-ui.button>
                    </div>
                </x-ui.card-content>
            </x-ui.card>

            <!-- Project Card 3 -->
            <x-ui.card class="group overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative h-48 bg-gradient-to-br from-green-500/20 to-emerald-500/20 overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="size-20 text-green-500/40" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/>
                        </svg>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <x-ui.card-content class="p-6">
                    <div class="mb-4">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-green-500 transition-colors">
                            Fitness Tracking App
                        </h3>
                        <p class="text-sm text-muted-foreground line-clamp-3">
                            Mobile-first fitness application with workout tracking, nutrition logging,
                            and social features for motivation.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <x-ui.badge variant="secondary">React Native</x-ui.badge>
                        <x-ui.badge variant="secondary">Firebase</x-ui.badge>
                        <x-ui.badge variant="secondary">Redux</x-ui.badge>
                    </div>

                    <div class="flex gap-3">
                        <x-ui.button size="sm" variant="outline" tag="a" href="#" class="flex-1">
                            <svg class="size-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </x-ui.button>
                        <x-ui.button size="sm" tag="a" href="#" class="flex-1">
                            <x-icons.arrow-up-right class="size-4 mr-1" />
                            Demo
                        </x-ui.button>
                    </div>
                </x-ui.card-content>
            </x-ui.card>

            <!-- Add more project cards as needed -->
        </div>

        <!-- View More Button -->
        <div class="text-center mt-12">
            <x-ui.button variant="outline" size="lg" tag="a" href="https://github.com/yourusername" target="_blank">
                <svg class="size-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
                View All Projects on GitHub
            </x-ui.button>
        </div>
    </div>
</section>
