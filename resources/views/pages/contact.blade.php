<x-app-layout>
    <!-- Hero Section -->
    <div class="relative pt-24 pb-16 bg-black overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0" id="stars"></div>
            <!-- Floating elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="floating-element absolute h-32 w-32 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-full blur-xl"></div>
                <div class="floating-element-2 absolute h-48 w-48 bg-gradient-to-br from-blue-500/20 to-indigo-500/20 rounded-full blur-xl"></div>
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl glow-text">
                    Let's Connect
                </h1>
                <p class="mt-4 text-xl text-gray-300 max-w-3xl mx-auto">
                    Whether you're interested in a speaking engagement, collaboration, or just want to chat about space science, I'd love to hear from you.
                </p>
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="bg-black py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Contact Information -->
                <div>
                    <h2 class="text-2xl font-bold text-white mb-8 glow-text">Get in Touch</h2>
                    
                    <div class="space-y-8">
                        <!-- Email -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-900 text-purple-400">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-white">Email</h3>
                                <p class="mt-1 text-gray-300">contact@kateonearth.com</p>
                                <p class="mt-2 text-sm text-gray-400">For general inquiries and collaborations</p>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-900 text-purple-400">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-white">Location</h3>
                                <p class="mt-1 text-gray-300">Los Angeles, CA</p>
                                <p class="mt-2 text-sm text-gray-400">Available for global collaborations</p>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-purple-900 text-purple-400">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-white">Social Media</h3>
                                <div class="mt-4 flex space-x-6">
                                    <a href="#" class="text-gray-400 hover:text-purple-400">
                                        <span class="sr-only">Twitter</span>
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-purple-400">
                                        <span class="sr-only">LinkedIn</span>
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-purple-400">
                                        <span class="sr-only">Instagram</span>
                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <div class="bg-gray-900 rounded-lg p-8">
                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf
                            
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-white">Name</label>
                                <div class="mt-1">
                                    <input type="text" name="name" id="name" 
                                           class="block w-full bg-gray-800 border-gray-700 rounded-md shadow-sm py-2 px-3 text-white focus:ring-purple-400 focus:border-purple-400"
                                           required>
                                </div>
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-white">Email</label>
                                <div class="mt-1">
                                    <input type="email" name="email" id="email" 
                                           class="block w-full bg-gray-800 border-gray-700 rounded-md shadow-sm py-2 px-3 text-white focus:ring-purple-400 focus:border-purple-400"
                                           required>
                                </div>
                            </div>

                            <!-- Inquiry Type -->
                            <div>
                                <label for="inquiry_type" class="block text-sm font-medium text-white">Inquiry Type</label>
                                <div class="mt-1">
                                    <select name="inquiry_type" id="inquiry_type" 
                                            class="block w-full bg-gray-800 border-gray-700 rounded-md shadow-sm py-2 px-3 text-white focus:ring-purple-400 focus:border-purple-400">
                                        <option value="speaking">Speaking Engagement</option>
                                        <option value="collaboration">Creative Collaboration</option>
                                        <option value="media">Media Inquiry</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-sm font-medium text-white">Message</label>
                                <div class="mt-1">
                                    <textarea name="message" id="message" rows="4" 
                                              class="block w-full bg-gray-800 border-gray-700 rounded-md shadow-sm py-2 px-3 text-white focus:ring-purple-400 focus:border-purple-400"
                                              required></textarea>
                                </div>
                            </div>

                            <div>
                                <button type="submit" 
                                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-black bg-purple-400 hover:bg-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-400 transition-all duration-300">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Add required styles -->
@push('styles')
<style>
    .glow-text {
        text-shadow: 0 0 10px rgba(167, 139, 250, 0.5);
    }
    #stars {
        background-image: radial-gradient(2px 2px at 20px 30px, #eee, rgba(0,0,0,0)),
                        radial-gradient(2px 2px at 40px 70px, #fff, rgba(0,0,0,0)),
                        radial-gradient(1px 1px at 90px 40px, #fff, rgba(0,0,0,0));
        background-repeat: repeat;
        animation: twinkle 7s ease-in-out infinite;
    }
    @keyframes twinkle {
        0% { opacity: 0.3; }
        50% { opacity: 0.6; }
        100% { opacity: 0.3; }
    }
    @keyframes float {
        0% { transform: translate(0, 0); }
        50% { transform: translate(20px, -20px); }
        100% { transform: translate(0, 0); }
    }
    .floating-element {
        top: 10%;
        left: 20%;
        animation: float 15s ease-in-out infinite;
    }
    .floating-element-2 {
        top: 50%;
        right: 10%;
        animation: float 20s ease-in-out infinite reverse;
    }
</style>
@endpush 