<section id="contact" class="py-24 fade-in-section">
    <div class="max-w-4xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Let's Work Together
            </h2>
            <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
                Have a project in mind? Let's discuss how we can work together to bring your ideas to life
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <x-ui.card class="backdrop-blur-sm bg-card/50 border-2">
                <x-ui.card-header>
                    <x-ui.card-title>Send me a message</x-ui.card-title>
                    <x-ui.card-description>
                        Fill out the form below and I'll get back to you as soon as possible
                    </x-ui.card-description>
                </x-ui.card-header>
                <x-ui.card-content>
                    <form class="space-y-4">
                        <div class="space-y-2">
                            <x-ui.label for="name">Name</x-ui.label>
                            <x-ui.input id="name" name="name" placeholder="Your name" required />
                        </div>

                        <div class="space-y-2">
                            <x-ui.label for="email">Email</x-ui.label>
                            <x-ui.input id="email" name="email" type="email" placeholder="your@email.com" required />
                        </div>

                        <div class="space-y-2">
                            <x-ui.label for="subject">Subject</x-ui.label>
                            <x-ui.input id="subject" name="subject" placeholder="Project inquiry" required />
                        </div>

                        <div class="space-y-2">
                            <x-ui.label for="message">Message</x-ui.label>
                            <textarea 
                                id="message" 
                                name="message" 
                                rows="4" 
                                class="w-full px-3 py-2 rounded-md border border-input bg-background text-sm ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
                                placeholder="Tell me about your project..."
                                required
                            ></textarea>
                        </div>

                        <x-ui.button type="submit" class="w-full">
                            <x-icons.mail class="mr-2 size-4" />
                            Send Message
                        </x-ui.button>
                    </form>
                </x-ui.card-content>
            </x-ui.card>

            <!-- Contact Info & Social -->
            <div class="space-y-8">
                <!-- Contact Methods -->
                <div class="space-y-6">
                    <h3 class="text-xl font-semibold mb-4">Other ways to reach me</h3>
                    
                    <!-- Email -->
                    <x-ui.card class="group hover:shadow-lg transition-all duration-300 hover:scale-105 bg-card">
                        <x-ui.card-content class="p-6">
                            <div class="flex items-start gap-4">
                                <div class="p-3 bg-primary/10 rounded-lg">
                                    <x-icons.mail class="size-6 text-primary" />
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Email</h4>
                                    <a href="mailto:tharinduwijayarathne87@gmail.com" class="text-sm text-muted-foreground hover:text-primary transition-colors">
                                        tharinduwijayarathne87@gmail.com
                                    </a>
                                </div>
                            </div>
                        </x-ui.card-content>
                    </x-ui.card>

                    <!-- Location (Optional) -->
                    <x-ui.card class="group hover:shadow-lg transition-all duration-300 hover:scale-105 bg-card">
                        <x-ui.card-content class="p-6">
                            <div class="flex items-start gap-4">
                                <div class="p-3 bg-purple-500/10 rounded-lg">
                                    <svg class="size-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Location</h4>
                                    <p class="text-sm text-muted-foreground">
                                        Kandy, Sri Lanka  
                                    </p>
                                    <p class="text-xs text-muted-foreground mt-1">
                                        Currently: Sydney, Australia
                                    </p>
                                </div>
                            </div>
                        </x-ui.card-content>
                    </x-ui.card>
                </div>

                <!-- Social Links -->
                <div>
                    <h3 class="text-xl font-semibold mb-4">Connect with me</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Portfolio -->
                        <a href="https://tharinduwijayarathna.link" target="_blank" class="group">
                            <x-ui.card class="hover:shadow-lg transition-all duration-300 hover:scale-105 bg-card">
                                <x-ui.card-content class="p-4">
                                    <div class="flex items-center gap-3">
                                        <svg class="size-8 group-hover:scale-110 transition-transform text-primary" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M13.5 2C13.5 2 13.8181 3.31818 15 4.5C16.1819 5.68182 17.5 6 17.5 6L15.5 8C15.5 8 14.6819 7.81818 13.5 6.5C12.3181 5.18182 12 4 12 4L13.5 2ZM9.5 6C9.5 6 9.81809 7.31818 11 8.5C12.1819 9.68182 13.5 10 13.5 10L11.5 12C11.5 12 10.6819 11.8182 9.5 10.5C8.31809 9.18182 8 8 8 8L9.5 6ZM20.5 15C20.5 15 19.1819 14.682 18 13.5C16.8181 12.318 16.5 11 16.5 11L18.5 9C18.5 9 19.3181 9.18182 20.5 10.5C21.6819 11.8182 22 13 22 13L20.5 15ZM16.5 19C16.5 19 15.1819 18.682 14 17.5C12.8181 16.318 12.5 15 12.5 15L14.5 13C14.5 13 15.3181 13.1818 16.5 14.5C17.6819 15.8182 18 17 18 17L16.5 19Z"/>
                                        </svg>
                                        <span class="font-medium text-sm">Portfolio</span>
                                    </div>
                                </x-ui.card-content>
                            </x-ui.card>
                        </a>

                        <!-- LinkedIn -->
                        <a href="https://linkedin.com/in/tharindu-wijayarathna" target="_blank" class="group">
                            <x-ui.card class="hover:shadow-lg transition-all duration-300 hover:scale-105 bg-card">
                                <x-ui.card-content class="p-4">
                                    <div class="flex items-center gap-3">
                                        <x-icons.linkedin class="size-8 group-hover:scale-110 transition-transform text-blue-500" />
                                        <span class="font-medium text-sm">LinkedIn</span>
                                    </div>
                                </x-ui.card-content>
                            </x-ui.card>
                        </a>

                        <!-- Twitter -->
                        <a href="https://twitter.com/yourusername" target="_blank" class="group">
                            <x-ui.card class="hover:shadow-lg transition-all duration-300 hover:scale-105 bg-card">
                                <x-ui.card-content class="p-4">
                                    <div class="flex items-center gap-3">
                                        <svg class="size-8 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                        </svg>
                                        <span class="font-medium text-sm">Twitter</span>
                                    </div>
                                </x-ui.card-content>
                            </x-ui.card>
                        </a>

                        <!-- Instagram (Optional) -->
                        <a href="https://instagram.com/yourusername" target="_blank" class="group">
                            <x-ui.card class="hover:shadow-lg transition-all duration-300 hover:scale-105 bg-card">
                                <x-ui.card-content class="p-4">
                                    <div class="flex items-center gap-3">
                                        <x-icons.instagram class="size-8 group-hover:scale-110 transition-transform text-pink-500" />
                                        <span class="font-medium text-sm">Instagram</span>
                                    </div>
                                </x-ui.card-content>
                            </x-ui.card>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
