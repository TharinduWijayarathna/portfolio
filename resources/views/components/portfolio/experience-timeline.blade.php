<section id="experience" class="py-24 fade-in-section">
    <div class="max-w-5xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Experience & Education
            </h2>
            <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
                My professional journey and academic background
            </p>
        </div>

        <!-- Timeline -->
        <div class="relative">
            <!-- Timeline Line -->
            <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-0.5 bg-border"></div>

            <!-- Timeline Items -->
            <div class="space-y-12">
                <!-- Experience Item 1 -->
                <div class="relative grid md:grid-cols-2 gap-8 items-center">
                    <!-- Timeline Dot -->
                    <div class="absolute left-8 md:left-1/2 w-4 h-4 bg-primary rounded-full -translate-x-2 md:-translate-x-2 border-4 border-background z-10"></div>
                    
                    <!-- Content (Right on desktop) -->
                    <div class="md:col-start-2 pl-16 md:pl-8">
                        <x-ui.card class="group hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <x-ui.card-content class="p-6">
                                <div class="flex items-start justify-between mb-3">
                                    <div>
                                        <h3 class="text-xl font-bold">Senior Full Stack Developer</h3>
                                        <p class="text-primary font-medium">Company Name</p>
                                    </div>
                                    <x-ui.badge variant="outline">2021 - Present</x-ui.badge>
                                </div>
                                <p class="text-muted-foreground mb-4">
                                    Led development of scalable web applications, mentored junior developers,
                                    and implemented modern DevOps practices. Increased system performance by 40%.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <x-ui.badge>Laravel</x-ui.badge>
                                    <x-ui.badge>React</x-ui.badge>
                                    <x-ui.badge>AWS</x-ui.badge>
                                    <x-ui.badge>Docker</x-ui.badge>
                                </div>
                            </x-ui.card-content>
                        </x-ui.card>
                    </div>
                </div>

                <!-- Experience Item 2 (Left side) -->
                <div class="relative grid md:grid-cols-2 gap-8 items-center">
                    <div class="absolute left-8 md:left-1/2 w-4 h-4 bg-purple-600 rounded-full -translate-x-2 md:-translate-x-2 border-4 border-background z-10"></div>
                    
                    <div class="md:col-start-1 pl-16 md:pl-0 md:pr-8 md:text-right">
                        <x-ui.card class="group hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <x-ui.card-content class="p-6">
                                <div class="flex items-start justify-between mb-3 md:flex-row-reverse">
                                    <x-ui.badge variant="outline">2019 - 2021</x-ui.badge>
                                    <div class="md:text-right">
                                        <h3 class="text-xl font-bold">Full Stack Developer</h3>
                                        <p class="text-purple-600 font-medium">Previous Company</p>
                                    </div>
                                </div>
                                <p class="text-muted-foreground mb-4">
                                    Developed and maintained multiple client projects, implemented RESTful APIs,
                                    and collaborated with design teams to create intuitive user interfaces.
                                </p>
                                <div class="flex flex-wrap gap-2 md:justify-end">
                                    <x-ui.badge>PHP</x-ui.badge>
                                    <x-ui.badge>Vue.js</x-ui.badge>
                                    <x-ui.badge>MySQL</x-ui.badge>
                                </div>
                            </x-ui.card-content>
                        </x-ui.card>
                    </div>
                </div>

                <!-- Education Item (Right side) -->
                <div class="relative grid md:grid-cols-2 gap-8 items-center">
                    <div class="absolute left-8 md:left-1/2 w-4 h-4 bg-pink-600 rounded-full -translate-x-2 md:-translate-x-2 border-4 border-background z-10"></div>
                    
                    <div class="md:col-start-2 pl-16 md:pl-8">
                        <x-ui.card class="group hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <x-ui.card-content class="p-6">
                                <div class="flex items-start justify-between mb-3">
                                    <div>
                                        <h3 class="text-xl font-bold">BSc in Computer Science</h3>
                                        <p class="text-pink-600 font-medium">University Name</p>
                                    </div>
                                    <x-ui.badge variant="outline">2015 - 2019</x-ui.badge>
                                </div>
                                <p class="text-muted-foreground mb-4">
                                    Graduated with honors. Focused on software engineering, algorithms,
                                    and web development. Led multiple academic projects and hackathons.
                                </p>
                                <div class="flex items-center gap-2 text-sm text-muted-foreground">
                                    <svg class="size-5 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                    First Class Honours
                                </div>
                            </x-ui.card-content>
                        </x-ui.card>
                    </div>
                </div>

                <!-- Add more experience/education items as needed -->
            </div>
        </div>
    </div>
</section>
