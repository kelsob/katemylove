<x-app-layout>
    <!-- Background Image -->
    <!-- Hero Section -->
    <div class="relative mt-24 mb-16 mx-4 px-16 sm:mx-8 xl:mx-auto w-auto max-w-7xl">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
            <div class="lg:col-span-7">
                <div class="p-8 rounded-xl bg-spaceOrange-2 backdrop-blur-sm shadow-lg shadow-black/50">
                    <div class="mt-6 prose prose-lg text-spaceTeal-1">
                        <p>
                        I'm a science communication expert who can help you connect with your audiences and reach your goals. Whether you need a writer, editor, speaker, or communications strategist, I'm here to help. 

                        </p>
                    </div>
                    <div class="mt-8 flex justify-end">
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
    <div class="mx-4 sm:mx-8 p-8 my-8 rounded-xl bg-spaceBrown-2/80 backdrop-blur-sm shadow-lg shadow-black/50 w-auto max-w-7xl xl:mx-auto">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-start flex items-center gap-8">
                <h2 class="text-spaceOrange-1 font-semibold tracking-wide text-3xl font-space-crusaders">
                    Services
                </h2>
                <p class="text-xl text-spaceWhite-2">
                I'm available as a freelancer to help with all kinds of projects, including:
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="pt-6">
                    <div class="flow-root bg-spaceTeal-4 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-spaceTeal-2 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-spaceTeal-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-2xl font-medium text-spaceTeal-1 tracking-tight">Public Speaking</h3>
                            <p class="mt-5 text-base text-spaceWhite-1">
                            Engaging talks tailored to your audience.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="flow-root bg-spaceTeal-4 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-spaceTeal-2 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-spaceTeal-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-2xl font-medium text-spaceTeal-1 tracking-tight">Writing</h3>
                            <p class="mt-5 text-base text-spaceWhite-1">
                            Compelling storytelling to make complex science topics accessible.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="flow-root bg-spaceTeal-4 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-spaceTeal-2 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-spaceTeal-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-2xl font-medium text-spaceTeal-1 tracking-tight">Consulting</h3>
                            <p class="mt-5 text-base text-spaceWhite-1">
                            Expert guidance on non-profit and communications strategy
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-8 my-8 z-20 px-4 sm:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-spaceTeal-4 rounded-lg shadow-2xl overflow-hidden">
                <div class="px-6 py-12 sm:px-12 sm:py-16 lg:flex lg:items-center lg:justify-between">
                    <div>
                        <h2 class="text-3xl font-extrabold text-spaceWhite-1 sm:text-3xl">
                            <span class="block">Get in touch.</span>
                            <span class="block text-spaceTeal-2 text-lg">I'm always interested in opportunities to bring my skills to new projects. 
                            </span>
                        </h2>
                    </div>
                    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                        <div class="inline-flex rounded-md shadow">
                            <a href="{{ route('contact') }}" 
                            class="inline-flex items-center px-6 py-3 border border-transparent text-lg font-medium rounded-md text-spaceWhite-1 bg-spaceOrange-2 hover:bg-spaceOrange-1 transition-all duration-300">
                                Contact Me
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Work Section -->
    <div class="mx-4 sm:mx-8 p-8 rounded-xl bg-spaceTeal-5/80 backdrop-blur-sm shadow-lg shadow-black/50 relative overflow-hidden w-auto max-w-7xl lg:mx-auto">
        <div class="mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
            <div class="text-start flex items-center gap-8">
                <h2 class="text-spaceOrange-1 font-semibold tracking-wide text-3xl font-space-crusaders">
                    My Work
                </h2>
                <p class="text-xl text-spaceWhite-2">
                A few examples of my recent and most relevant work 
                </p>
            </div>

            <div class="mt-8 space-y-12">
                <!-- Books -->
                <div class="bg-spaceRed-2 rounded-lg p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-spaceTeal-2 mb-6 font-space-crusaders">Books</h3>
                    <div class="space-y-8">
                        <div class="bg-spaceRed-1 p-6 rounded-lg">
                            <div class="flex items-center space-x-6">
                                <div class="w-48 h-auto bg-spaceRed-2 rounded-lg p-2 flex items-center justify-center">
                                    <img src="{{ asset('images/media/moons.png') }}" alt="Moons Book Cover" class="w-full h-full object-contain rounded">
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xl font-bold text-spaceTeal-1">Moons</h4>
                                    <p class="mt-2 text-spaceWhite-1 text-sm">Join space evangelist Kate Howells on an interplanetary voyage to explore the mind-boggling moons of our solar system, from the volcanic hellscape of Io to the ice mountains and methane seas of Titan.</p>
                                    <div class="mt-4 flex items-center gap-4">
                                        <a href="https://www.amazon.ca/Moons-Mysteries-Marvels-Solar-System/dp/0645817996" 
                                           target="_blank"
                                           class="inline-block px-6 py-2 bg-spaceTeal-3 text-spaceWhite-1 rounded-lg hover:bg-spaceTeal-2 transition-colors duration-300">
                                            Pre-Order
                                        </a>
                                        <span class="text-spaceTeal-1 font-bold">Releasing September 2025</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-spaceRed-1 p-6 rounded-lg">
                            <div class="flex items-center space-x-6">
                                <div class="w-48 h-auto bg-spaceRed-2 rounded-lg p-2 flex items-center justify-center">
                                    <img src="{{ asset('images/media/spaceiscoolasfuck.png') }}" alt="Space is Cool as F**k Book Cover" class="w-full h-full object-contain rounded">
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xl font-bold text-spaceTeal-1">Space is Cool as F**k</h4>
                                    <p class="mt-2 text-spaceWhite-1 text-sm">From astrophysics to rocket science to the future of space exploration, Space Is Cool as F*ck explains everything you thought you'd never understand about the universe in plain-old filthy English.</p>
                                    <a href="https://www.amazon.ca/Space-Cool-as-F-ck/dp/1524862975" 
                                       target="_blank"
                                       class="mt-4 inline-block px-6 py-2 bg-spaceTeal-3 text-spaceWhite-1 rounded-lg hover:bg-spaceTeal-2 transition-colors duration-300">
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured Articles -->
                <div class="bg-spaceOrange-2 rounded-lg p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-spaceTeal-2 font-space-crusaders mb-6">Featured Articles</h3>
                    <div class="space-y-6">
                        <a href="https://www.planetary.org/articles/how-space-explorers-could-grow-habitats-from-fungus" 
                           target="_blank" 
                           class="block bg-spaceOrange-1 p-6 rounded-lg flex items-center gap-6 transform transition-transform duration-300 hover:scale-[1.02]">
                            <div class="w-32 h-32 bg-spaceOrange-2 rounded-lg p-2 flex items-center justify-center">
                                <img src="{{ asset('images/media/fungus.png') }}" alt="Fungal Space Habitat Concept" class="w-full h-full object-cover rounded">
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-spaceTeal-1">How space explorers could grow habitats from fungus</h4>
                                <p class="mt-2 text-spaceTeal-2">A far-out but very real possibility for sustainable space habitation.</p>
                                <div class="mt-3 flex items-center text-spaceTeal-1 text-sm">
                                    <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-spaceTeal-2">Feb 13, 2025 • The Planetary Society</span>
                                </div>
                            </div>
                        </a>

                        <a href="https://www.planetary.org/articles/an-exquisite-cosmic-coincidence" 
                           target="_blank" 
                           class="block bg-spaceOrange-1 p-6 rounded-lg flex items-center gap-6 transform transition-transform duration-300 hover:scale-[1.02]">
                            <div class="w-32 h-32 bg-spaceOrange-2 rounded-lg p-2 flex items-center justify-center">
                                <img src="{{ asset('images/media/cosmiccoincidence.png') }}" alt="Solar Eclipse" class="w-full h-full object-cover rounded">
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-spaceTeal-1">An exquisite cosmic coincidence</h4>
                                <p class="mt-2 text-spaceTeal-2">Why total solar eclipses don't happen anywhere other than Earth.</p>
                                <div class="mt-3 flex items-center text-spaceTeal-1 text-sm">
                                    <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-spaceTeal-2">March 19, 2024 • The Planetary Society</span>
                                </div>
                            </div>
                        </a>

                        <a href="https://www.planetary.org/articles/are-aliens-real" 
                           target="_blank" 
                           class="block bg-spaceOrange-1 p-6 rounded-lg flex items-center gap-6 transform transition-transform duration-300 hover:scale-[1.02]">
                            <div class="w-32 h-32 bg-spaceOrange-2 rounded-lg p-2 flex items-center justify-center">
                                <img src="{{ asset('images/media/arealiensreal.png') }}" alt="Tardigrade in Space" class="w-full h-full object-cover rounded">
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-spaceTeal-1">Are aliens real?</h4>
                                <p class="mt-2 text-spaceTeal-2">What scientists know about the possibility of alien life, from microbes to UFOs.</p>
                                <div class="mt-3 flex items-center text-spaceTeal-1 text-sm">
                                    <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-spaceTeal-2">June 07, 2023 • The Planetary Society</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Public Speaking and Media -->
                <div class="bg-spaceTeal-4 rounded-lg p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-spaceTeal-2 font-space-crusaders mb-6">Public Speaking and Media</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                        <div class="bg-spaceTeal-3 p-4 rounded-lg">
                            <div class="bg-spaceWhite-1 rounded-lg p-2 h-full flex items-center justify-center">
                                <img src="{{ asset('images/media/nyt-logo.png') }}" alt="New York Times Logo" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <div class="bg-spaceTeal-3 p-4 rounded-lg">
                            <div class="bg-spaceWhite-1 rounded-lg p-2 h-full flex items-center justify-center">
                                <img src="{{ asset('images/media/rom-logo.png') }}" alt="Royal Ontario Museum Logo" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <div class="bg-spaceTeal-3 p-4 rounded-lg">
                            <div class="bg-spaceWhite-1 rounded-lg p-2 h-full flex items-center justify-center">
                                <img src="{{ asset('images/media/cbc-logo.png') }}" alt="CBC Logo" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <div class="bg-spaceTeal-3 p-4 rounded-lg">
                            <div class="bg-spaceWhite-1 rounded-lg p-2 h-full flex items-center justify-center">
                                <img src="{{ asset('images/media/ctv-news-logo.png') }}" alt="CTV News Logo" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <div class="bg-spaceTeal-3 p-4 rounded-lg">
                            <div class="bg-spaceWhite-1 rounded-lg p-2 h-full flex items-center justify-center">
                                <img src="{{ asset('images/media/medium-logo.png') }}" alt="Medium Logo" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <div class="bg-spaceTeal-3 p-4 rounded-lg">
                            <div class="bg-spaceWhite-1 rounded-lg p-2 h-full flex items-center justify-center">
                                <img src="{{ asset('images/media/cmn-logo.png') }}" alt="CMN Logo" class="w-full h-auto object-contain">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Communications and Non-Profit Consulting -->
                <div class="bg-spaceBrown-2 rounded-lg p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-spaceTeal-2 font-space-crusaders mb-6">Communications and Non-Profit Consulting</h3>
                    <div class="space-y-6">
                        <div class="bg-spaceBrown-1 p-6 rounded-lg flex items-center gap-6">
                            <div class="bg-spaceBrown-2 p-2 rounded-lg">
                                <div class="w-32 h-32 bg-spaceWhite-1 rounded-lg p-2 flex items-center justify-center">
                                    <img src="{{ asset('images/media/govcanada-logo.png') }}" alt="Government of Canada Logo" class="w-full h-auto object-contain">
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-spaceWhite-1">Government of Canada</h4>
                                <p class="mt-2 text-spaceWhite-2">Member of the Space Advisory Board (2017-2020), providing strategic guidance for Canada's space program.</p>
                            </div>
                        </div>
                        <div class="bg-spaceBrown-1 p-6 rounded-lg flex items-center gap-6">
                            <div class="bg-spaceBrown-2 p-2 rounded-lg">
                                <div class="w-32 h-32 bg-spaceWhite-1 rounded-lg p-2 flex items-center justify-center">
                                    <img src="{{ asset('images/media/seds-canada-logo.png') }}" alt="SEDS Canada Logo" class="w-full h-auto object-contain">
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-spaceWhite-1">SEDS Canada</h4>
                                <p class="mt-2 text-spaceWhite-2">Member of the board of advisors (current), supporting student engagement in space exploration and development.</p>
                            </div>
                        </div>
                        <div class="bg-spaceBrown-1 p-6 rounded-lg flex items-center gap-6">
                            <div class="bg-spaceBrown-2 p-2 rounded-lg">
                                <div class="w-32 h-32 bg-spaceWhite-1 rounded-lg p-2 flex items-center justify-center">
                                    <img src="{{ asset('images/media/rcs-logo.png') }}" alt="Royal City Science Logo" class="w-full h-auto object-contain">
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-spaceWhite-1">Royal City Science</h4>
                                <p class="mt-2 text-spaceWhite-2">Member of the board of directors (2020-2024), advising on non-profit strategy for community science education.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="py-8 my-8 z-20 px-4 sm:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-spaceTeal-4 rounded-lg shadow-2xl overflow-hidden">
                <div class="px-6 py-12 sm:px-12 sm:py-16 lg:flex lg:items-center lg:justify-between">
                    <div>
                        <h2 class="text-3xl font-extrabold text-spaceWhite-1">
                            <span class="block">Let's connect.</span>
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