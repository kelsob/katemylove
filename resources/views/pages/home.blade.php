<x-app-layout>
    <!-- Hero Section with Space Theme -->
    <div class="relative min-h-screen flex items-center">
        <!-- Animated Nebula Background -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute inset-0 bg-black">
                <!-- Animated nebula effect using gradients and animation -->
                <div class="absolute inset-0 opacity-30 animate-nebula">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-900 via-transparent to-pink-900"></div>
                    <div class="absolute inset-0 bg-gradient-to-tl from-blue-900 via-transparent to-indigo-900"></div>
                    <div class="absolute inset-0 bg-gradient-to-tr from-teal-900/50 via-transparent to-teal-600/30"></div>
                    <div class="absolute inset-0 bg-gradient-radial from-purple-900/20 via-transparent to-transparent"></div>
                </div>
                <!-- Twinkling stars effect -->
                <div class="absolute inset-0" id="stars"></div>
                <!-- Floating orbs with enhanced gradients -->
                <div class="absolute inset-0 overflow-hidden">
                    <div class="floating-orb absolute h-32 w-32 rounded-full bg-gradient-to-r from-teal-500/20 via-purple-500/20 to-pink-500/20 blur-xl"></div>
                    <div class="floating-orb-2 absolute h-48 w-48 rounded-full bg-gradient-to-r from-pink-500/20 via-teal-500/20 to-purple-500/20 blur-xl"></div>
                    <div class="floating-orb-3 absolute h-24 w-24 rounded-full bg-gradient-to-r from-purple-500/20 via-teal-500/20 to-pink-500/20 blur-xl"></div>
                </div>
            </div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
                <div class="lg:col-span-7 space-y-8 relative">
                    <!-- Earth Background -->
                    <div class="absolute right-56 -top-12 pointer-events-none">
                        <img 
                            src="{{ asset('images/space/earth.png') }}" 
                            alt="Earth Background" 
                            class="w-48 floating-earth"
                            style="mix-blend-mode: screen;"
                        >
                    </div>
                    <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl relative z-10">
                        <span class="block xl:inline">Kate on Earth:</span>
                        <span class="block text-gradient xl:inline glow-text">Communicating the Wonders of Space</span>
                    </h1>
                    <p class="mt-3 text-xl text-gray-300 sm:mt-4">
                        Public speaker, writer, and communications strategist bringing space science down to Earth.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('about') }}" 
                           class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-black bg-gradient-to-r from-purple-400 to-teal-400 hover:from-purple-500 hover:to-teal-500 transform hover:scale-105 transition-all duration-300 glow-button">
                            About Me
                        </a>
                        <a href="{{ route('portfolio') }}" 
                           class="inline-flex items-center justify-center px-8 py-3 border-2 border-teal-400 text-base font-medium rounded-md text-teal-400 hover:bg-teal-400 hover:text-black transform hover:scale-105 transition-all duration-300">
                            Previous Work
                        </a>
                    </div>
                </div>
                <div class="mt-12 relative lg:mt-0 lg:col-span-5">
                    <div class="transform hover:scale-105 transition-all duration-500 relative z-10">
                        <div class="relative rounded-lg overflow-hidden shadow-cosmic">
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-500 via-teal-500 to-pink-500 opacity-50 animate-gradient"></div>
                            <img src="{{ config('images.profile.kate') }}" alt="Kate" class="relative z-10 w-full h-auto rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Work Section -->
    <div class="bg-black py-24 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-900/20 via-teal-900/20 to-pink-900/20"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl glow-text">
                    Featured Work
                </h2>
                <p class="mt-4 text-xl text-gray-300">
                    Exploring space science through various mediums
                </p>
            </div>

            <div class="mt-20 grid grid-cols-1 gap-12 lg:grid-cols-3">
                <!-- Interviews -->
                <div class="group relative bg-gray-900 p-8 rounded-lg hover:bg-gray-800 transition-all duration-300">
                    <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-purple-400 opacity-0 rounded-full blur-lg group-hover:opacity-20 transition-opacity"></div>
                    <div class="relative">
                        <svg class="h-12 w-12 text-purple-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                        </svg>
                        <h3 class="text-xl font-bold text-white">Media Appearances</h3>
                        <p class="mt-2 text-gray-300">Featured on major networks discussing space exploration and science communication.</p>
                    </div>
                </div>

                <!-- Lectures -->
                <div class="group relative bg-gray-900 p-8 rounded-lg hover:bg-gray-800 transition-all duration-300">
                    <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-purple-400 opacity-0 rounded-full blur-lg group-hover:opacity-20 transition-opacity"></div>
                    <div class="relative">
                        <svg class="h-12 w-12 text-purple-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                        <h3 class="text-xl font-bold text-white">Public Speaking</h3>
                        <p class="mt-2 text-gray-300">Keynote speeches and presentations at conferences worldwide on space science and exploration.</p>
                    </div>
                </div>

                <!-- Creative Work -->
                <div class="group relative bg-gray-900 p-8 rounded-lg hover:bg-gray-800 transition-all duration-300">
                    <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 bg-purple-400 opacity-0 rounded-full blur-lg group-hover:opacity-20 transition-opacity"></div>
                    <div class="relative">
                        <svg class="h-12 w-12 text-purple-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <h3 class="text-xl font-bold text-white">Creative Projects</h3>
                        <p class="mt-2 text-gray-300">Experimental and artistic collaborations exploring the intersection of space and creativity.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-black py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-purple-900 via-teal-900 to-pink-900 rounded-lg shadow-2xl overflow-hidden">
                <div class="px-6 py-12 sm:px-12 sm:py-16 lg:flex lg:items-center lg:justify-between">
                    <div>
                        <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                            <span class="block">Ready to explore?</span>
                            <span class="block text-purple-300">Let's connect and talk space.</span>
                        </h2>
                    </div>
                    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                        <div class="inline-flex rounded-md shadow">
                            <a href="{{ route('contact') }}" 
                               class="inline-flex items-center px-6 py-3 border border-transparent text-lg font-medium rounded-md text-black bg-purple-400 hover:bg-purple-500 transition-all duration-300 glow-button">
                                Get in Touch
                            </a>
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
            background: linear-gradient(to right, 
                #a78bfa 0%,
                #2dd4bf 20%,
                #f472b6 40%,
                #2dd4bf 60%,
                #a78bfa 80%,
                #a78bfa 100%
            );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% 100%;
            animation: smoothShine 8s linear infinite;
        }
        .glow-text {
            text-shadow: 0 0 10px rgba(167, 139, 250, 0.5),
                         0 0 20px rgba(45, 212, 191, 0.3),
                         0 0 30px rgba(244, 114, 182, 0.2);
        }
        .glow-button {
            box-shadow: 0 0 15px rgba(167, 139, 250, 0.3),
                        0 0 30px rgba(45, 212, 191, 0.2);
            background: linear-gradient(to right,
                #a78bfa 0%,
                #2dd4bf 20%,
                #f472b6 40%,
                #2dd4bf 60%,
                #a78bfa 80%,
                #a78bfa 100%
            );
            background-size: 200% 100%;
            animation: smoothShine 6s linear infinite;
        }
        .shadow-cosmic {
            box-shadow: 0 0 30px rgba(167, 139, 250, 0.3),
                        0 0 60px rgba(45, 212, 191, 0.2);
        }
        @keyframes smoothShine {
            from {
                background-position: 100% 50%;
            }
            to {
                background-position: -100% 50%;
            }
        }
        @keyframes nebula {
            0% { transform: scale(1); opacity: 0.3; }
            50% { transform: scale(1.1); opacity: 0.4; }
            100% { transform: scale(1); opacity: 0.3; }
        }
        .animate-nebula {
            animation: nebula 20s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translate(0, 0) rotate(0deg); }
            50% { transform: translate(30px, -30px) rotate(180deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }
        .floating-orb {
            top: 15%;
            left: 10%;
            animation: float 20s ease-in-out infinite;
        }
        .floating-orb-2 {
            top: 40%;
            right: 15%;
            animation: float 25s ease-in-out infinite reverse;
        }
        .floating-orb-3 {
            bottom: 20%;
            left: 30%;
            animation: float 22s ease-in-out infinite;
        }
        #stars {
            background-image: 
                radial-gradient(2px 2px at 20px 30px, #eee, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 40px 70px, #fff, rgba(0,0,0,0)),
                radial-gradient(1px 1px at 90px 40px, #fff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 160px 120px, #ddd, rgba(0,0,0,0));
            background-repeat: repeat;
            animation: twinkle 7s ease-in-out infinite;
        }
        @keyframes twinkle {
            0% { opacity: 0.3; }
            50% { opacity: 0.6; }
            100% { opacity: 0.3; }
        }
        .floating-earth {
            animation: floatingEarth 30s ease-in-out infinite;
            filter: brightness(1.2) contrast(1.1) drop-shadow(0 0 30px rgba(78, 142, 229, 0.3));
            opacity: 0.8;
        }
        @keyframes floatingEarth {
            0%, 100% {
                transform: rotate(0deg) scale(1);
            }
            25% {
                transform: rotate(3deg) scale(1.02);
            }
            50% {
                transform: rotate(-2deg) scale(0.98);
            }
            75% {
                transform: rotate(1deg) scale(1.02);
            }
        }
    </style>
    @endpush
</x-app-layout> 