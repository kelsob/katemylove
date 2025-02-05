<x-app-layout>
    <!-- Hero Section -->
    <div class="relative pt-24 pb-16 overflow-hidden bg-black">
        <!-- Animated star background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0" id="stars"></div>
            <!-- Enhanced cosmic elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="cosmic-ring absolute w-[800px] h-[800px] rounded-full border-2 border-teal-500/20 blur-sm"></div>
                <div class="cosmic-ring-2 absolute w-[600px] h-[600px] rounded-full border-2 border-purple-500/20 blur-sm"></div>
                <div class="cosmic-dust absolute w-full h-full opacity-30"></div>
                <!-- Added gradient background -->
                <div class="absolute inset-0 bg-gradient-conic from-purple-900/50 via-teal-900/50 to-pink-900/50 opacity-30"></div>
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
                <div class="lg:col-span-7">
                    <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl glow-text">
                        About Kate
                    </h1>
                    <div class="mt-6 prose prose-lg prose-invert">
                        <p class="text-xl text-gray-300">
                            As a public speaker, writer, and communications strategist, I bridge the gap between complex space science 
                            and public understanding. My work with the Planetary Society and various space organizations has allowed me 
                            to share the wonders of space exploration with audiences worldwide.
                        </p>
                    </div>
                </div>
                <div class="mt-12 lg:mt-0 lg:col-span-5">
                    <div class="relative max-w-md mx-auto">
                        <div class="aspect-w-3 aspect-h-4 rounded-lg overflow-hidden transform hover:scale-105 transition-all duration-500">
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-500 via-teal-500 to-pink-500 opacity-50 animate-gradient">                            <img src="{{ config('images.profile.kate_full') }}" alt="Kate" class="relative z-10 w-full h-full object-cover rounded-lg shadow-cosmic">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Career Timeline -->
    <div class="bg-black py-24 relative">
        <!-- Enhanced background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-b from-purple-900/20 via-teal-900/20 to-pink-900/20"></div>
            <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white mb-12 glow-text text-center">Career Milestones</h2>
            
            <div class="relative">
                <!-- Timeline line with enhanced gradient -->
                <div class="absolute left-1/2 transform -translate-x-px h-full w-1 bg-gradient-to-b from-purple-400 via-teal-400 to-pink-400 glow-line"></div>

                <!-- Timeline entries -->
                <div class="space-y-16">
                    <!-- Current Role -->
                    <div class="relative">
                        <div class="relative flex items-center justify-between">
                            <div class="flex-1 text-right pr-8">
                                <h3 class="text-xl font-bold text-white">Communications Director</h3>
                                <p class="text-purple-400">The Planetary Society</p>
                                <p class="text-gray-400">2020 - Present</p>
                            </div>
                            <div class="w-4 h-4 rounded-full bg-purple-400 border-4 border-black relative z-10 glow-point"></div>
                            <div class="flex-1 pl-8">
                                <p class="text-gray-300">Leading science communication initiatives and public outreach programs. Developing strategies to make space science accessible to diverse audiences.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Previous Roles -->
                    <div class="relative">
                        <div class="relative flex items-center justify-between">
                            <div class="flex-1 text-right pr-8">
                                <h3 class="text-xl font-bold text-white">Science Communicator</h3>
                                <p class="text-purple-400">Space Science Institute</p>
                                <p class="text-gray-400">2017 - 2020</p>
                            </div>
                            <div class="w-4 h-4 rounded-full bg-pink-500 border-4 border-black relative z-10 glow-point"></div>
                            <div class="flex-1 pl-8">
                                <p class="text-gray-300">Developed and delivered educational programs about space exploration. Created content for museums and science centers.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="relative flex items-center justify-between">
                            <div class="flex-1 text-right pr-8">
                                <h3 class="text-xl font-bold text-white">Science Writer</h3>
                                <p class="text-purple-400">Freelance</p>
                                <p class="text-gray-400">2015 - 2017</p>
                            </div>
                            <div class="w-4 h-4 rounded-full bg-blue-500 border-4 border-black relative z-10 glow-point"></div>
                            <div class="flex-1 pl-8">
                                <p class="text-gray-300">Contributed articles to major science publications. Covered space missions, astronomical discoveries, and space technology developments.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Philosophy Section -->
    <div class="bg-black py-24 relative overflow-hidden">
        <!-- Enhanced background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-conic from-purple-900 via-teal-900 to-pink-900 opacity-40"></div>
            <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-2xl overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900/90 via-teal-900/90 to-pink-900/90 backdrop-blur-sm"></div>
                <div class="relative px-8 py-12 sm:px-12 sm:py-16">
                    <h2 class="text-3xl font-bold text-white mb-6 glow-text">My Philosophy</h2>
                    <div class="prose prose-lg prose-invert">
                        <p class="text-gray-300">
                            I believe that space science belongs to everyone. My mission is to break down complex scientific concepts 
                            into engaging stories that inspire curiosity and wonder. Through creative communication and innovative 
                            outreach, I aim to make the cosmos more accessible to all.
                        </p>
                        <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <p class="ml-3 text-gray-300">Making complex science accessible and engaging</p>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <p class="ml-3 text-gray-300">Fostering curiosity about space exploration</p>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <p class="ml-3 text-gray-300">Building bridges between scientists and the public</p>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <p class="ml-3 text-gray-300">Inspiring the next generation of space explorers</p>
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
        .text-gradient {
            background: linear-gradient(to right, #a78bfa, #2dd4bf, #f472b6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .glow-text {
            text-shadow: 0 0 10px rgba(167, 139, 250, 0.5),
                         0 0 20px rgba(45, 212, 191, 0.3),
                         0 0 20px rgba(45, 212, 191, 0.3);
        }
        .shadow-cosmic {
            box-shadow: 0 0 30px rgba(167, 139, 250, 0.3),
                        0 0 60px rgba(45, 212, 191, 0.2);
        }
        .cosmic-ring {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: rotate 60s linear infinite;
        }
        .cosmic-ring-2 {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: rotate 45s linear infinite reverse;
        }
        .cosmic-dust {
            background-image: 
                radial-gradient(2px 2px at 40px 60px, #2dd4bf, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 20px 50px, #a78bfa, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 30px 100px, #f472b6, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 40px 60px, #2dd4bf, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 110px 90px, #a78bfa, rgba(0,0,0,0));
            background-repeat: repeat;
            animation: twinkle 8s ease-in-out infinite;
        }
        @keyframes rotate {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 15s ease infinite;
        }
        .glow-point {
            box-shadow: 0 0 15px currentColor;
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
    </style>
    @endpush
</x-app-layout> 