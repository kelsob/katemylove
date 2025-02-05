<x-app-layout>
    <!-- Hero Section -->
    <div class="relative pt-24 pb-16 bg-black overflow-hidden">
        <!-- Animated star background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0" id="stars"></div>
            <!-- Floating elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="floating-element absolute h-32 w-32 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-full blur-xl"></div>
                <div class="floating-element-2 absolute h-48 w-48 bg-gradient-to-br from-blue-500/20 to-indigo-500/20 rounded-full blur-xl"></div>
                <div class="floating-element-3 absolute h-24 w-24 bg-gradient-to-br from-pink-500/20 to-purple-500/20 rounded-full blur-xl"></div>
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl glow-text">
                    Creative Explorations
                </h1>
                <p class="mt-4 text-xl text-gray-300 max-w-3xl mx-auto">
                    Where space science meets artistic expression. A collection of experimental projects and creative collaborations.
                </p>
            </div>
        </div>
    </div>

    <!-- Whoa Project Section -->
    <div class="bg-black py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-2xl overflow-hidden bg-gradient-to-br from-purple-900/50 to-blue-900/50 p-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                    <div>
                        <h2 class="text-3xl font-bold text-white mb-6 glow-text">The Whoa Project</h2>
                        <div class="prose prose-lg prose-invert">
                            <p class="text-gray-300">
                                An experimental video series exploring the most mind-bending concepts in space science. 
                                Each episode combines scientific accuracy with creative visualization to make complex 
                                ideas accessible and awe-inspiring.
                            </p>
                            <div class="mt-8 space-y-4">
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <p class="ml-3 text-gray-300">Collaboration with visual artists and musicians</p>
                                </div>
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <p class="ml-3 text-gray-300">Interactive elements for audience engagement</p>
                                </div>
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 text-purple-400 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <p class="ml-3 text-gray-300">Featured in science museums worldwide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 lg:mt-0">
                        <div class="relative aspect-w-16 aspect-h-9 rounded-lg overflow-hidden">
                            <img src="{{ config('images.creative.whoa_project') }}" alt="Whoa Project" class="object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-lg font-medium rounded-md text-black bg-purple-400 hover:bg-purple-500 transition-all duration-300 glow-button">
                                    Watch Series
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Art Collaborations -->
    <div class="bg-black py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white mb-12 glow-text text-center">Artistic Collaborations</h2>
            
            <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3">
                <!-- Collaboration 1 -->
                <div class="group relative bg-gray-900 rounded-lg overflow-hidden hover:bg-gray-800 transition-all duration-300">
                    <div class="aspect-w-4 aspect-h-3">
                        <img src="{{ config('images.creative.collab1') }}" alt="Space Symphony" class="object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">Space Symphony</h3>
                        <p class="text-purple-400">Musical Collaboration</p>
                        <p class="mt-2 text-gray-300">
                            A musical journey through the cosmos, translating astronomical data into symphonic compositions.
                        </p>
                    </div>
                </div>

                <!-- Collaboration 2 -->
                <div class="group relative bg-gray-900 rounded-lg overflow-hidden hover:bg-gray-800 transition-all duration-300">
                    <div class="aspect-w-4 aspect-h-3">
                        <img src="{{ config('images.creative.collab2') }}" alt="Nebula Dreams" class="object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">Nebula Dreams</h3>
                        <p class="text-purple-400">Virtual Reality Experience</p>
                        <p class="mt-2 text-gray-300">
                            An immersive VR journey through the most beautiful nebulae in our galaxy.
                        </p>
                    </div>
                </div>

                <!-- Collaboration 3 -->
                <div class="group relative bg-gray-900 rounded-lg overflow-hidden hover:bg-gray-800 transition-all duration-300">
                    <div class="aspect-w-4 aspect-h-3">
                        <img src="{{ config('images.creative.collab3') }}" alt="Cosmic Dance" class="object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">Cosmic Dance</h3>
                        <p class="text-purple-400">Performance Art</p>
                        <p class="mt-2 text-gray-300">
                            A fusion of dance and astronomy, interpreting celestial movements through contemporary choreography.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Experimental Projects -->
    <div class="bg-black py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-2xl overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900 to-blue-900 opacity-90"></div>
                <div class="relative px-8 py-12 sm:px-12 sm:py-16">
                    <h2 class="text-3xl font-bold text-white mb-12 glow-text">Experimental Projects</h2>
                    
                    <div class="space-y-12">
                        <!-- Project 1 -->
                        <div class="group relative">
                            <div class="flex flex-col md:flex-row gap-8">
                                <div class="md:w-1/3">
                                    <div class="aspect-w-4 aspect-h-3 rounded-lg overflow-hidden">
                                        <img src="{{ config('images.creative.experiment1') }}" alt="Space Poetry" class="object-cover">
                                    </div>
                                </div>
                                <div class="md:w-2/3">
                                    <h3 class="text-xl font-bold text-white">Space Poetry Generator</h3>
                                    <p class="mt-2 text-purple-400">AI & Literature</p>
                                    <p class="mt-3 text-gray-300">
                                        An AI-powered poetry generator trained on space science concepts and astronomical imagery. 
                                        Creating a unique blend of scientific accuracy and poetic expression.
                                    </p>
                                    <a href="#" class="inline-block mt-4 text-purple-400 hover:text-purple-300">
                                        Generate a Poem →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Project 2 -->
                        <div class="group relative">
                            <div class="flex flex-col md:flex-row gap-8">
                                <div class="md:w-1/3">
                                    <div class="aspect-w-4 aspect-h-3 rounded-lg overflow-hidden">
                                        <img src="{{ config('images.creative.experiment2') }}" alt="Sound of Stars" class="object-cover">
                                    </div>
                                </div>
                                <div class="md:w-2/3">
                                    <h3 class="text-xl font-bold text-white">The Sound of Stars</h3>
                                    <p class="mt-2 text-purple-400">Audio Installation</p>
                                    <p class="mt-3 text-gray-300">
                                        An interactive installation that converts stellar data into ambient soundscapes. 
                                        Visitors can "hear" different stars based on their temperature, size, and composition.
                                    </p>
                                    <a href="#" class="inline-block mt-4 text-purple-400 hover:text-purple-300">
                                        Listen to Samples →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add required styles -->
    @push('styles')
    <style>
        .glow-text {
            text-shadow: 0 0 10px rgba(167, 139, 250, 0.5);
        }
        .glow-button {
            box-shadow: 0 0 15px rgba(167, 139, 250, 0.3);
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
        .floating-element-3 {
            bottom: 20%;
            left: 40%;
            animation: float 18s ease-in-out infinite;
        }
    </style>
    @endpush
</x-app-layout> 