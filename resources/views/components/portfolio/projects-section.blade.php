<section id="projects" class="py-24 bg-muted/30 fade-in-section">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Featured Projects
            </h2>
            <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
                A selection of my recent work and open source contributions
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Sectify -->
            <x-ui.card class="group overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative h-48 bg-gradient-to-br from-blue-500/20 to-cyan-500/20 overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="size-20 text-blue-500/40" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6zm-1 2l5 5h-5V4zM8 18v-2h8v2H8zm0-4v-2h8v2H8z"/>
                        </svg>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <x-ui.card-content class="p-6">
                    <div class="mb-4">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-500 transition-colors">
                            Sectify
                        </h3>
                        <p class="text-sm text-muted-foreground line-clamp-3">
                            Intelligent document processing powered by NLP and machine learning. Automates data extraction and analysis from various document types.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <x-ui.badge variant="secondary">NLP</x-ui.badge>
                        <x-ui.badge variant="secondary">Machine Learning</x-ui.badge>
                        <x-ui.badge variant="secondary">Laravel</x-ui.badge>
                    </div>

                    <div class="flex gap-3">
                        <x-ui.button size="sm" variant="outline" tag="a" href="https://github.com/TharinduWijayarathna/sectify" target="_blank" class="flex-1">
                            <svg class="size-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </x-ui.button>
                    </div>
                </x-ui.card-content>
            </x-ui.card>

            <!-- BladeCN -->
            <x-ui.card class="group overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative h-48 bg-gradient-to-br from-red-500/20 to-orange-500/20 overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="size-20 text-red-500/40" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/>
                        </svg>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <x-ui.card-content class="p-6">
                    <div class="mb-4">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-red-500 transition-colors">
                            BladeCN
                        </h3>
                        <p class="text-sm text-muted-foreground line-clamp-3">
                            A beautiful component library for Laravel that looks like ShadCN. Modern, accessible, and customizable components for Blade templates.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <x-ui.badge variant="secondary">Laravel</x-ui.badge>
                        <x-ui.badge variant="secondary">Blade</x-ui.badge>
                        <x-ui.badge variant="secondary">UI Components</x-ui.badge>
                    </div>

                    <div class="flex gap-3">
                        <x-ui.button size="sm" variant="outline" tag="a" href="https://github.com/TharinduWijayarathna/bladecn" target="_blank" class="flex-1">
                            <svg class="size-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </x-ui.button>
                    </div>
                </x-ui.card-content>
            </x-ui.card>

            <!-- Hirely -->
            <x-ui.card class="group overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative h-48 bg-gradient-to-br from-purple-500/20 to-pink-500/20 overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="size-20 text-purple-500/40" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
                        </svg>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <x-ui.card-content class="p-6">
                    <div class="mb-4">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-purple-500 transition-colors">
                            Hirely
                        </h3>
                        <p class="text-sm text-muted-foreground line-clamp-3">
                            Mock interviewing platform designed to help people prepare effectively for job interviews using AI-powered feedback and practice sessions.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <x-ui.badge variant="secondary">AI</x-ui.badge>
                        <x-ui.badge variant="secondary">Interview Prep</x-ui.badge>
                        <x-ui.badge variant="secondary">Laravel</x-ui.badge>
                    </div>

                    <div class="flex gap-3">
                        <x-ui.button size="sm" variant="outline" tag="a" href="https://github.com/TharinduWijayarathna/hirely" target="_blank" class="flex-1">
                            <svg class="size-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </x-ui.button>
                    </div>
                </x-ui.card-content>
            </x-ui.card>

            <!-- Vaultix -->
            <x-ui.card class="group overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative h-48 bg-gradient-to-br from-green-500/20 to-emerald-500/20 overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="size-20 text-green-500/40" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
                        </svg>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <x-ui.card-content class="p-6">
                    <div class="mb-4">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-green-500 transition-colors">
                            Vaultix
                        </h3>
                        <p class="text-sm text-muted-foreground line-clamp-3">
                            A simple and intuitive application to help people manage their personal finances properly with budgeting, expense tracking, and financial insights.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <x-ui.badge variant="secondary">Finance</x-ui.badge>
                        <x-ui.badge variant="secondary">Budgeting</x-ui.badge>
                        <x-ui.badge variant="secondary">Laravel</x-ui.badge>
                    </div>

                    <div class="flex gap-3">
                        <x-ui.button size="sm" variant="outline" tag="a" href="https://github.com/TharinduWijayarathna/vaultix" target="_blank" class="flex-1">
                            <svg class="size-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </x-ui.button>
                    </div>
                </x-ui.card-content>
            </x-ui.card>

            <!-- Laravel Chaos -->
            <x-ui.card class="group overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative h-48 bg-gradient-to-br from-orange-500/20 to-red-500/20 overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="size-20 text-orange-500/40" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13 3L3 14h8v7l10-11h-8V3z"/>
                        </svg>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <x-ui.card-content class="p-6">
                    <div class="mb-4">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-orange-500 transition-colors">
                            Laravel Chaos
                        </h3>
                        <p class="text-sm text-muted-foreground line-clamp-3">
                            A Laravel package for chaos engineering - test your application's resilience by introducing controlled failures and testing disaster recovery.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <x-ui.badge variant="secondary">Laravel</x-ui.badge>
                        <x-ui.badge variant="secondary">Testing</x-ui.badge>
                        <x-ui.badge variant="secondary">DevOps</x-ui.badge>
                    </div>

                    <div class="flex gap-3">
                        <x-ui.button size="sm" variant="outline" tag="a" href="https://github.com/TharinduWijayarathna/laravel-chaos" target="_blank" class="flex-1">
                            <svg class="size-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </x-ui.button>
                    </div>
                </x-ui.card-content>
            </x-ui.card>

            <!-- Open Site -->
            <x-ui.card class="group overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative h-48 bg-gradient-to-br from-indigo-500/20 to-blue-500/20 overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="size-20 text-indigo-500/40" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <x-ui.card-content class="p-6">
                    <div class="mb-4">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-indigo-500 transition-colors">
                            Open Site
                        </h3>
                        <p class="text-sm text-muted-foreground line-clamp-3">
                            Transform your static sites into dynamic content management experiences. Turn any static website into an editable CMS.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <x-ui.badge variant="secondary">CMS</x-ui.badge>
                        <x-ui.badge variant="secondary">Static Sites</x-ui.badge>
                        <x-ui.badge variant="secondary">Laravel</x-ui.badge>
                    </div>

                    <div class="flex gap-3">
                        <x-ui.button size="sm" variant="outline" tag="a" href="https://github.com/TharinduWijayarathna/open-site" target="_blank" class="flex-1">
                            <svg class="size-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Code
                        </x-ui.button>
                    </div>
                </x-ui.card-content>
            </x-ui.card>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-12">
            <x-ui.button variant="outline" size="lg" tag="a" href="https://github.com/TharinduWijayarathna?tab=repositories" target="_blank">
                <svg class="size-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
                View All 52 Projects on GitHub
            </x-ui.button>
        </div>
    </div>
</section>
