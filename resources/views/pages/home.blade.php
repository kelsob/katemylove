<x-app-layout>
    <!-- Background Image -->
    <!-- Hero Section -->
    <div class="relative mx-auto mt-24 mb-16 p-8 rounded-xl bg-spaceOrange/80 backdrop-blur-sm shadow-lg shadow-black/50 w-fit max-w-7xl">
        <div class="relative mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
                <div class="lg:col-span-7">
                    <h1 class="text-4xl font-extrabold text-spacePeach sm:text-5xl md:text-6xl">
                        Bringing Space Science Down to Earth
                    </h1>
                    <div class="mt-6 prose prose-lg text-spacePeach">
                        <p>
                            Discover the wonders of the universe with Kate Howells, a passionate science communicator dedicated to making space exploration accessible and engaging for all.
                        </p>
                    </div>
                    <div class="mt-8">
                        <a href="{{ route('about') }}" class="inline-block bg-spaceCerulean/90 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-spaceCerulean transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="mt-12 lg:mt-0 lg:col-span-5">
                    <div class="relative max-w-md mx-auto">
                        <div class="rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-500 shadow-xl flex items-center justify-center">
                            <img src="{{ config('images.profile.kate') }}" alt="Kate" class="relative z-10 w-full h-auto rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="mx-auto my-16 p-8 rounded-xl bg-spaceYellow/80 backdrop-blur-sm shadow-lg shadow-black/50 w-fit max-w-7xl">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-spaceCerulean font-semibold tracking-wide uppercase">Services</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-spaceOrange sm:text-4xl">
                    Igniting Curiosity Through Engaging Communication
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="pt-6">
                    <div class="flow-root bg-spaceOrange rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-spaceCerulean rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-spaceCerulean tracking-tight">Public Speaking</h3>
                            <p class="mt-5 text-base text-spaceOrange">
                                Engaging talks that inspire audiences to explore the wonders of space and science.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="flow-root bg-spaceOrange rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-spaceCerulean rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-spaceCerulean tracking-tight">Writing</h3>
                            <p class="mt-5 text-base text-spaceOrange">
                                Crafting compelling articles and content that make complex space topics accessible.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="flow-root bg-spaceOrange rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-spaceCerulean rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-spaceCerulean tracking-tight">Consulting</h3>
                            <p class="mt-5 text-base text-spaceOrange">
                                Providing expert guidance on science communication strategies and outreach programs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="mx-auto my-16 p-8 rounded-xl bg-spacePeach/80 backdrop-blur-sm shadow-lg shadow-black/50 w-fit max-w-7xl">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-spaceCerulean font-semibold tracking-wide uppercase">Testimonials</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-spaceOrange sm:text-4xl">
                    What People Are Saying
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-spaceCerulean">
                                    Emily Selman
                                </p>
                                <div class="flex space-x-1 text-sm text-spaceOrange">
                                    <span>Planetary Society Member</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-spaceOrange">
                            <p>
                                "Kate's passion for space is contagious. Her talks always leave me feeling inspired and eager to learn more."
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-spaceCerulean">
                                    Michael Foster
                                </p>
                                <div class="flex space-x-1 text-sm text-spaceOrange">
                                    <span>Science Museum Curator</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-spaceOrange">
                            <p>
                                "Kate's ability to make complex science accessible is unparalleled. She's a true asset to any educational program."
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-spaceCerulean">
                                    Jared Keller
                                </p>
                                <div class="flex space-x-1 text-sm text-spaceOrange">
                                    <span>Astronomy Club President</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-spaceOrange">
                            <p>
                                "Our club members were thrilled to have Kate as a guest speaker. Her engaging style kept everyone captivated."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Work Section -->
    <div class="mx-auto my-16 p-8 rounded-xl bg-black/80 backdrop-blur-sm shadow-lg shadow-black/50 relative overflow-hidden w-fit max-w-7xl">
        <div class="absolute inset-0">
            <div class="absolute inset-0"></div>
        </div>

        <div class="mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
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
        <!-- Call to Action -->
        <div class="py-16 z-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-gradient-to-r from-purple-900 via-teal-900 to-pink-900 rounded-lg shadow-2xl overflow-hidden">
                    <div class="px-6 py-12 sm:px-12 sm:py-16 lg:flex lg:items-center lg:justify-between">
                        <div>
                            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                                <span class="block">Let's connect and talk space.</span>
                                <span class="block text-purple-300">I am available for writing, editing, speaking engagements, strategy consulting, and many other forms of freelance work. </span>
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