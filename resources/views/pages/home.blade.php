<x-app-layout>
    <!-- Background Image -->
    <!-- Hero Section -->
    <div class="relative mt-24 mb-16 mx-4 sm:mx-8 xl:mx-auto w-auto max-w-7xl">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
            <div class="lg:col-span-7">
                <div class="p-8 rounded-xl bg-spaceOrange-2 backdrop-blur-sm shadow-lg shadow-black/50">
                    <h1 class="text-4xl font-extrabold text-spaceTeal-1 sm:text-5xl md:text-6xl">
                        Bringing Space Science Down to Earth
                    </h1>
                    <div class="mt-6 prose prose-lg text-spaceTeal-1">
                        <p>
                            Discover the wonders of the universe with Kate Howells, a passionate science communicator dedicated to making space exploration accessible and engaging for all.
                        </p>
                    </div>
                    <div class="mt-8">
                        <a href="{{ route('about') }}" class="inline-block bg-spaceTeal-3 hover:text-spaceWhite-1 hover:bg-spaceTeal-4 border border-transparent rounded-md py-3 px-8 font-medium text-spaceTeal-1 transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
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

    <!-- Services Section -->
    <div class="mx-4 sm:mx-8 my-16 p-8 rounded-xl bg-spaceBrown-2/80 backdrop-blur-sm shadow-lg shadow-black/50 w-auto max-w-7xl xl:mx-auto">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-spaceOrange-1 font-semibold tracking-wide uppercase">Services</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-spaceTeal-1 sm:text-4xl">
                    Igniting Curiosity Through Engaging Communication
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="pt-6">
                    <div class="flow-root bg-spaceTeal-4 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-spaceTeal-2 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-spaceWhite-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-spaceTeal-1 tracking-tight">Public Speaking</h3>
                            <p class="mt-5 text-base text-spaceWhite-1">
                                Engaging talks that inspire audiences to explore the wonders of space and science.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="flow-root bg-spaceTeal-4 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-spaceTeal-2 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-spaceWhite-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-spaceTeal-1 tracking-tight">Writing</h3>
                            <p class="mt-5 text-base text-spaceWhite-1">
                                Crafting compelling articles and content that make complex space topics accessible.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="flow-root bg-spaceTeal-4 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-spaceTeal-2 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-spaceWhite-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-spaceTeal-1 tracking-tight">Consulting</h3>
                            <p class="mt-5 text-base text-spaceWhite-1">
                                Providing expert guidance on science communication strategies and outreach programs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Work Section -->
    <div class="mx-4 sm:mx-8 my-16 p-8 rounded-xl bg-spaceTeal-5/80 backdrop-blur-sm shadow-lg shadow-black/50 relative overflow-hidden w-auto max-w-7xl lg:mx-auto">
        <div class="mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-spaceWhite-1 sm:text-4xl glow-text">
                    My Work
                </h2>
                <p class="mt-4 text-xl text-spaceWhite-2">
                    Exploring space science through various mediums
                </p>
            </div>

            <div class="mt-20 space-y-12">
                <!-- Books -->
                <div class="bg-spaceRed-2 rounded-lg p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-spaceWhite-1 mb-6">Books</h3>
                    <div class="space-y-6">
                        <div class="bg-spaceRed-1 p-6 rounded-lg">
                            <h4 class="text-xl font-bold text-spaceTeal-1">Moons</h4>
                            <p class="mt-2 text-spaceWhite-1">A comprehensive exploration of lunar bodies across our solar system.</p>
                        </div>
                        <div class="bg-spaceRed-1 p-6 rounded-lg">
                            <h4 class="text-xl font-bold text-spaceTeal-1">Space is Cool as F**k</h4>
                            <p class="mt-2 text-spaceWhite-1">An engaging journey through the most fascinating aspects of space exploration.</p>
                        </div>
                    </div>
                </div>

                <!-- Featured Articles -->
                <div class="bg-spaceOrange-2 rounded-lg p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-spaceWhite-1 mb-6">Featured Articles</h3>
                    <div class="space-y-6">
                        <div class="bg-spaceOrange-1 p-6 rounded-lg">
                            <h4 class="text-xl font-bold text-spaceWhite-1">How space explorers could grow habitats from fungus</h4>
                            <p class="mt-2 text-spaceWhite-2">Exploring innovative solutions for sustainable space habitation.</p>
                        </div>
                        <div class="bg-spaceOrange-1 p-6 rounded-lg">
                            <h4 class="text-xl font-bold text-spaceWhite-1">Are aliens real?</h4>
                            <p class="mt-2 text-spaceWhite-2">A scientific examination of the possibility of extraterrestrial life.</p>
                        </div>
                        <div class="bg-spaceOrange-1 p-6 rounded-lg">
                            <h4 class="text-xl font-bold text-spaceWhite-1">An exquisite cosmic coincidence</h4>
                            <p class="mt-2 text-spaceWhite-2">Unveiling the remarkable alignments in our universe.</p>
                        </div>
                    </div>
                </div>

                <!-- Public Speaking and Media -->
                <div class="bg-spaceTeal-4 rounded-lg p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-spaceWhite-1 mb-6">Public Speaking and Media</h3>
                    <div class="space-y-6">
                        <div class="bg-spaceTeal-3 p-6 rounded-lg">
                            <h4 class="text-xl font-bold text-spaceWhite-1">New York Times</h4>
                            <p class="mt-2 text-spaceWhite-2">Expert commentary on space exploration and science communication.</p>
                        </div>
                        <div class="bg-spaceTeal-3 p-6 rounded-lg">
                            <h4 class="text-xl font-bold text-spaceWhite-1">Royal Ontario Museum</h4>
                            <p class="mt-2 text-spaceWhite-2">Educational presentations on space science and astronomy.</p>
                        </div>
                        <div class="bg-spaceTeal-3 p-6 rounded-lg">
                            <h4 class="text-xl font-bold text-spaceWhite-1">CBC</h4>
                            <p class="mt-2 text-spaceWhite-2">Regular appearances discussing space news and discoveries.</p>
                        </div>
                    </div>
                </div>

                <!-- Communications and Non-Profit Consulting -->
                <div class="bg-spaceBrown-2 rounded-lg p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-spaceWhite-1 mb-6">Communications and Non-Profit Consulting</h3>
                    <div class="space-y-6">
                        <div class="bg-spaceBrown-1 p-6 rounded-lg">
                            <h4 class="text-xl font-bold text-spaceWhite-1">Government of Canada</h4>
                            <p class="mt-2 text-spaceWhite-2">Strategic communications consulting for space-related initiatives.</p>
                        </div>
                        <div class="bg-spaceBrown-1 p-6 rounded-lg">
                            <h4 class="text-xl font-bold text-spaceWhite-1">SEDS Canada</h4>
                            <p class="mt-2 text-spaceWhite-2">Supporting student engagement in space exploration and development.</p>
                        </div>
                        <div class="bg-spaceBrown-1 p-6 rounded-lg">
                            <h4 class="text-xl font-bold text-spaceWhite-1">Royal City Science</h4>
                            <p class="mt-2 text-spaceWhite-2">Advancing science education and community engagement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="py-16 z-20 px-4 sm:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-spaceTeal-4 rounded-lg shadow-2xl overflow-hidden">
                <div class="px-6 py-12 sm:px-12 sm:py-16 lg:flex lg:items-center lg:justify-between">
                    <div>
                        <h2 class="text-3xl font-extrabold text-spaceWhite-1 sm:text-4xl">
                            <span class="block">Let's connect and talk space.</span>
                            <span class="block text-spaceTeal-2 text-lg">I am available for writing, editing, speaking engagements, strategy consulting, and many other forms of freelance work. </span>
                        </h2>
                    </div>
                    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                        <div class="inline-flex rounded-md shadow">
                            <a href="{{ route('contact') }}" 
                            class="inline-flex items-center px-6 py-3 border border-transparent text-lg font-medium rounded-md text-spaceWhite-1 bg-spaceOrange-2 hover:bg-spaceOrange-1 transition-all duration-300">
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
                var(--space-teal-1) 0%,
                var(--space-orange-1) 20%,
                var(--space-red-1) 40%,
                var(--space-orange-1) 60%,
                var(--space-teal-1) 80%,
                var(--space-teal-1) 100%
            );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% 100%;
            animation: smoothShine 8s linear infinite;
        }
        .glow-text {
            text-shadow: 0 0 10px var(--space-teal-1),
                         0 0 20px var(--space-orange-1),
                         0 0 30px var(--space-red-1);
        }
        .glow-button {
            box-shadow: 0 0 15px var(--space-teal-1),
                        0 0 30px var(--space-orange-1);
            background: linear-gradient(to right,
                var(--space-teal-1) 0%,
                var(--space-orange-1) 20%,
                var(--space-red-1) 40%,
                var(--space-orange-1) 60%,
                var(--space-teal-1) 80%,
                var(--space-teal-1) 100%
            );
            background-size: 200% 100%;
            animation: smoothShine 6s linear infinite;
        }
        .shadow-cosmic {
            box-shadow: 0 0 30px var(--space-teal-1),
                        0 0 60px var(--space-orange-1);
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