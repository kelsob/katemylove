<x-app-layout>
    <!-- Background Image -->
    <!-- Hero Section -->
    <div id="home" class="min-h-screen pt-40 flex items-center justify-center mx-4 px-4 sm:px-16 sm:mx-8 xl:mx-auto w-auto max-w-7xl">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
            <div class="lg:col-span-7">
                <div class="p-4 sm:p-8 rounded-xl bg-spaceOrange-2 backdrop-blur-sm shadow-lg shadow-black/50">
                    <div class="mt-4 sm:mt-6 prose prose-lg text-spaceTeal-1">
                        <p class="text-base sm:text-lg">
                        I am a writer, editor, speaker, and communications strategist with over a decade of experience in outreach and public education in the space sector.<br><br> 

My work is all about inspiring curiosity, cultivating appreciation for science and technology, and empowering people through knowledge. <br><br>

As a freelancer, I'm here to help you connect with your audiences and reach your goals. I live and work in Guelph, Ontario, Canada, but I am open to hearing from clients worldwide. 

                        </p>
                    </div>
                    <div class="mt-6 sm:mt-8 flex justify-end">
                        <a href="#portfolio" class="inline-block bg-spaceTeal-3 text-spaceWhite-1 hover:bg-spaceTeal-4 border border-transparent rounded-md py-2 px-6 sm:py-3 sm:px-8 font-eurostyle font-bold text-base sm:text-lg transition-colors duration-300">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8 lg:mt-0 lg:col-span-5">
                <div class="relative max-w-md mx-auto">
                    <div class="rounded-xl overflow-hidden transform hover:scale-105 transition-all duration-500 shadow-xl flex items-center justify-center">
                        <img src="{{ config('images.profile.kate') }}" alt="Kate" class="relative z-10 w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Services Section -->
    <section id="services" class="flex flex-col items-center mb-16 mx-4 sm:mx-8 p-4 sm:p-8 rounded-xl bg-spaceBrown-2/80 backdrop-blur-sm shadow-lg shadow-black/50 w-auto max-w-7xl xl:mx-auto">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-start flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-8">
                <h2 class="text-spaceOrange-1 font-semibold tracking-wide text-2xl sm:text-3xl font-space-crusaders">
                    Services
                </h2>
                <p class="text-lg sm:text-xl text-spaceWhite-2">
                I'm available as a freelancer to help with all kinds of projects, including:
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                <div class="pt-6">
                    <div class="flow-root bg-spaceTeal-4 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-spaceTeal-2 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-spaceOrange-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-2xl font-medium text-spaceTeal-1 tracking-tight">Public Speaking</h3>
                            <div class="mt-5 text-base text-spaceWhite-1 space-y-2">
                                <div class="flex items-start gap-2">
                                    <svg class="h-4 w-4 min-h-[1rem] min-w-[1rem] text-spaceTeal-2 mt-1" viewBox="0 0 24 24" fill="currentColor">
                                        <ellipse cx="12" cy="12" rx="7" ry="7"/>
                                        <ellipse cx="12" cy="12" rx="12" ry="4" fill="none" stroke-width="2" stroke="currentColor" transform="rotate(-35 12 12)"/>
                                    </svg>
                                    <span>Crafting engaging presentations tailored to your audience</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg class="h-4 w-4 min-h-[1rem] min-w-[1rem] text-spaceTeal-2 mt-1" viewBox="0 0 24 24" fill="currentColor">
                                        <ellipse cx="12" cy="12" rx="7" ry="7"/>
                                        <ellipse cx="12" cy="12" rx="12" ry="4" fill="none" stroke-width="2" stroke="currentColor" transform="rotate(-35 12 12)"/>
                                    </svg>
                                    <span>Available for conferences, events, festivals, and more</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="flow-root bg-spaceTeal-4 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-spaceTeal-2 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-spaceOrange-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-2xl font-medium text-spaceTeal-1 tracking-tight">Writing</h3>
                            <div class="mt-5 text-base text-spaceWhite-1 space-y-2">
                                <div class="flex items-start gap-2">
                                    <svg class="h-4 w-4 min-h-[1rem] min-w-[1rem] text-spaceTeal-2 mt-1" viewBox="0 0 24 24" fill="currentColor">
                                        <ellipse cx="12" cy="12" rx="7" ry="7"/>
                                        <ellipse cx="12" cy="12" rx="12" ry="4" fill="none" stroke-width="2" stroke="currentColor" transform="rotate(-35 12 12)"/>
                                    </svg>
                                    <span>Making complex science topics accessible through clear, relatable language</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg class="h-4 w-4 min-h-[1rem] min-w-[1rem] text-spaceTeal-2 mt-1" viewBox="0 0 24 24" fill="currentColor">
                                        <ellipse cx="12" cy="12" rx="7" ry="7"/>
                                        <ellipse cx="12" cy="12" rx="12" ry="4" fill="none" stroke-width="2" stroke="currentColor" transform="rotate(-35 12 12)"/>
                                    </svg>
                                    <span>Focusing on storytelling and connecting scientific information to familiar concepts</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="flow-root bg-spaceTeal-4 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-spaceTeal-2 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-spaceOrange-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-2xl font-medium text-spaceTeal-1 tracking-tight">Consulting</h3>
                            <div class="mt-5 text-base text-spaceWhite-1 space-y-2">
                                <div class="flex items-start gap-2">
                                    <svg class="h-4 w-4 min-h-[1rem] min-w-[1rem] text-spaceTeal-2 mt-1" viewBox="0 0 24 24" fill="currentColor">
                                        <ellipse cx="12" cy="12" rx="7" ry="7"/>
                                        <ellipse cx="12" cy="12" rx="12" ry="4" fill="none" stroke-width="2" stroke="currentColor" transform="rotate(-35 12 12)"/>
                                    </svg>
                                    <span>Strategic goal setting and non-profit management</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg class="h-4 w-4 min-h-[1rem] min-w-[1rem] text-spaceTeal-2 mt-1" viewBox="0 0 24 24" fill="currentColor">
                                        <ellipse cx="12" cy="12" rx="7" ry="7"/>
                                        <ellipse cx="12" cy="12" rx="12" ry="4" fill="none" stroke-width="2" stroke="currentColor" transform="rotate(-35 12 12)"/>
                                    </svg>
                                    <span>Communications plans</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="flow-root bg-spaceTeal-4 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-spaceTeal-2 rounded-md shadow-lg">
                                    <svg class="h-6 w-6 text-spaceOrange-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-2xl font-medium text-spaceTeal-1 tracking-tight">Editing</h3>
                            <div class="mt-5 text-base text-spaceWhite-1 space-y-2">
                                <div class="flex items-start gap-2">
                                    <svg class="h-4 w-4 min-h-[1rem] min-w-[1rem] text-spaceTeal-2 mt-1" viewBox="0 0 24 24" fill="currentColor">
                                        <ellipse cx="12" cy="12" rx="7" ry="7"/>
                                        <ellipse cx="12" cy="12" rx="12" ry="4" fill="none" stroke-width="2" stroke="currentColor" transform="rotate(-35 12 12)"/>
                                    </svg>
                                    <span>Improving clarity, cohesion, voice, and tone</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg class="h-4 w-4 min-h-[1rem] min-w-[1rem] text-spaceTeal-2 mt-1" viewBox="0 0 24 24" fill="currentColor">
                                        <ellipse cx="12" cy="12" rx="7" ry="7"/>
                                        <ellipse cx="12" cy="12" rx="12" ry="4" fill="none" stroke-width="2" stroke="currentColor" transform="rotate(-35 12 12)"/>
                                    </svg>
                                    <span>Proofreading and copyediting</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg class="h-4 w-4 min-h-[1rem] min-w-[1rem] text-spaceTeal-2 mt-1" viewBox="0 0 24 24" fill="currentColor">
                                        <ellipse cx="12" cy="12" rx="7" ry="7"/>
                                        <ellipse cx="12" cy="12" rx="12" ry="4" fill="none" stroke-width="2" stroke="currentColor" transform="rotate(-35 12 12)"/>
                                    </svg>
                                    <span>SEO optimization</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <p class="text-xl text-spaceWhite-2 mb-6">Ready to discuss your project? Let's connect!</p>
            <a href="#contact" class="inline-block bg-spaceOrange-2 hover:bg-spaceOrange-1 text-spaceWhite-1 font-eurostyle font-bold text-lg py-4 px-8 rounded-lg transition-colors duration-300">
                Get in Touch
            </a>
        </div>
    </section>

    <!-- Featured Work Section -->
    <section id="portfolio" class="min-h-screen flex items-center mx-4 sm:mx-8 p-4 sm:p-8 rounded-xl bg-spaceTeal-5/80 backdrop-blur-sm shadow-lg shadow-black/50 relative overflow-hidden w-auto max-w-7xl lg:mx-auto">
        <div class="mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
            <div class="text-start">
                <h2 class="text-spaceOrange-1 font-semibold tracking-wide text-3xl font-space-crusaders mb-8">
                    My Work
                </h2>
                <p class="text-lg text-spaceWhite-2">
Since 2013, I have worked in communications roles with The Planetary Society, the world's largest space interest organization founded by Carl Sagan and led today by Bill Nye. I currently serve as Public Education Specialist, writing educational articles and a weekly newsletter for a mailing list of over 100,000 people around the world, and as Editor-in-Chief of The Planetary Report, our quarterly magazine.<br><br>

I have written two books on space science for public audiences, spoken at conferences and public events, and given dozens of interviews for television, radio, podcasts, and print. <br><br>

I have also served on several boards and advisory councils in the space community, and in 2017, I was one of ten experts appointed to the Government of Canada's Space Advisory Board. 

Below are a few examples of my recent and most relevant work.
                </p>
            </div>

            <div class="mt-8 space-y-12">
                <!-- Books -->
                <div class="bg-spaceRed-2 rounded-lg p-4 sm:p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-spaceTeal-2 mb-6 font-space-crusaders">Books</h3>
                    <div class="space-y-8">
                        <div class="bg-spaceRed-1 p-4 sm:p-6 rounded-lg">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-6 space-y-4 sm:space-y-0">
                                <div class="w-full sm:w-48 h-auto bg-spaceRed-2 rounded-lg p-2 flex items-center justify-center">
                                    <img src="{{ asset('images/media/moons.png') }}" alt="Moons Book Cover" class="w-full h-auto object-contain rounded">
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xl font-bold text-spaceTeal-1">Moons</h4>
                                    <p class="mt-2 text-spaceWhite-1 text-sm">Join space evangelist Kate Howells on an interplanetary voyage to explore the mind-boggling moons of our solar system, from the volcanic hellscape of Io to the ice mountains and methane seas of Titan.</p>
                                    <div class="mt-4 flex flex-col sm:flex-row items-start sm:items-center gap-4">
                                        <a href="https://www.amazon.ca/Moons-Mysteries-Marvels-Solar-System/dp/0645817996" 
                                           target="_blank"
                                           class="w-full sm:w-auto inline-block px-6 py-2 bg-spaceTeal-3 text-spaceWhite-1 rounded-lg font-eurostyle font-bold text-lg hover:bg-spaceTeal-2 transition-colors duration-300 text-center">
                                            <span class="whitespace-nowrap">Pre-Order</span>
                                        </a>
                                        <span class="text-spaceTeal-1 font-bold">Releasing September 2025</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-spaceRed-1 p-4 sm:p-6 rounded-lg">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-6 space-y-4 sm:space-y-0">
                                <div class="w-full sm:w-48 h-auto bg-spaceRed-2 rounded-lg p-2 flex items-center justify-center">
                                    <img src="{{ asset('images/media/spaceiscoolasfuck.png') }}" alt="Space is Cool as F**k Book Cover" class="w-full h-auto object-contain rounded">
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-xl font-bold text-spaceTeal-1">Space is Cool as F**k</h4>
                                    <p class="mt-2 text-spaceWhite-1 text-sm">From astrophysics to rocket science to the future of space exploration, Space Is Cool as F*ck explains everything you thought you'd never understand about the universe in plain-old filthy English.</p>
                                    <a href="https://www.amazon.ca/Space-Cool-as-F-ck/dp/1524862975" 
                                       target="_blank"
                                       class="mt-4 w-full sm:w-auto inline-block px-6 py-2 bg-spaceTeal-3 text-spaceWhite-1 rounded-lg font-eurostyle font-bold text-lg hover:bg-spaceTeal-2 transition-colors duration-300 text-center">
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
                           class="block bg-spaceOrange-1 p-4 sm:p-6 rounded-lg flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6 transform transition-transform duration-300 hover:scale-[1.02]">
                            <div class="w-full sm:w-32 h-48 sm:h-32 bg-spaceOrange-2 rounded-lg p-2 flex items-center justify-center">
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
                           class="block bg-spaceOrange-1 p-4 sm:p-6 rounded-lg flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6 transform transition-transform duration-300 hover:scale-[1.02]">
                            <div class="w-full sm:w-32 h-48 sm:h-32 bg-spaceOrange-2 rounded-lg p-2 flex items-center justify-center">
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
                           class="block bg-spaceOrange-1 p-4 sm:p-6 rounded-lg flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6 transform transition-transform duration-300 hover:scale-[1.02]">
                            <div class="w-full sm:w-32 h-48 sm:h-32 bg-spaceOrange-2 rounded-lg p-2 flex items-center justify-center">
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
                <div class="bg-spaceTeal-4 rounded-lg p-4 sm:p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-spaceTeal-2 mb-6 font-space-crusaders">Public Speaking and Media</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6">
                        <div class="bg-spaceTeal-3 p-3 sm:p-4 rounded-lg">
                            <div class="bg-spaceWhite-1 rounded-lg p-2 h-full flex items-center justify-center">
                                <img src="{{ asset('images/media/nyt-logo.png') }}" alt="New York Times Logo" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <div class="bg-spaceTeal-3 p-3 sm:p-4 rounded-lg">
                            <div class="bg-spaceWhite-1 rounded-lg p-2 h-full flex items-center justify-center">
                                <img src="{{ asset('images/media/rom-logo.png') }}" alt="Royal Ontario Museum Logo" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <div class="bg-spaceTeal-3 p-3 sm:p-4 rounded-lg">
                            <div class="bg-spaceWhite-1 rounded-lg p-2 h-full flex items-center justify-center">
                                <img src="{{ asset('images/media/cbc-logo.png') }}" alt="CBC Logo" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <div class="bg-spaceTeal-3 p-3 sm:p-4 rounded-lg">
                            <div class="bg-spaceWhite-1 rounded-lg p-2 h-full flex items-center justify-center">
                                <img src="{{ asset('images/media/ctv-news-logo.png') }}" alt="CTV News Logo" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <div class="bg-spaceTeal-3 p-3 sm:p-4 rounded-lg">
                            <div class="bg-spaceWhite-1 rounded-lg p-2 h-full flex items-center justify-center">
                                <img src="{{ asset('images/media/medium-logo.png') }}" alt="Medium Logo" class="w-full h-auto object-contain">
                            </div>
                        </div>
                        <div class="bg-spaceTeal-3 p-3 sm:p-4 rounded-lg">
                            <div class="bg-spaceWhite-1 rounded-lg p-2 h-full flex items-center justify-center">
                                <img src="{{ asset('images/media/cmn-logo.png') }}" alt="CMN Logo" class="w-full h-auto object-contain">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Communications and Non-Profit Consulting -->
                <div class="bg-spaceBrown-2 rounded-lg p-4 sm:p-8 shadow-xl">
                    <h3 class="text-2xl font-bold text-spaceTeal-2 mb-6 font-space-crusaders">Communications and Non-Profit Consulting</h3>
                    <div class="space-y-6">
                        <div class="bg-spaceBrown-1 p-4 sm:p-6 rounded-lg flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6">
                            <div class="bg-spaceBrown-2 p-2 rounded-lg w-full sm:w-auto">
                                <div class="w-full sm:w-32 h-32 bg-spaceWhite-1 rounded-lg p-2 flex items-center justify-center">
                                    <img src="{{ asset('images/media/govcanada-logo.png') }}" alt="Government of Canada Logo" class="w-full h-auto object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-spaceWhite-1">Government of Canada</h4>
                                <p class="mt-2 text-spaceWhite-2">Member of the Space Advisory Board (2017-2020), providing strategic guidance for Canada's space program.</p>
                            </div>
                        </div>
                        <div class="bg-spaceBrown-1 p-4 sm:p-6 rounded-lg flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6">
                            <div class="bg-spaceBrown-2 p-2 rounded-lg w-full sm:w-auto">
                                <div class="w-full sm:w-32 h-32 bg-spaceWhite-1 rounded-lg p-2 flex items-center justify-center">
                                    <img src="{{ asset('images/media/seds-canada-logo.png') }}" alt="SEDS Canada Logo" class="w-full h-auto object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-spaceWhite-1">SEDS Canada</h4>
                                <p class="mt-2 text-spaceWhite-2">Member of the board of advisors (current), supporting student engagement in space exploration and development.</p>
                            </div>
                        </div>
                        <div class="bg-spaceBrown-1 p-4 sm:p-6 rounded-lg flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6">
                            <div class="bg-spaceBrown-2 p-2 rounded-lg w-full sm:w-auto">
                                <div class="w-full sm:w-32 h-32 bg-spaceWhite-1 rounded-lg p-2 flex items-center justify-center">
                                    <img src="{{ asset('images/media/rcs-logo.png') }}" alt="Royal City Science Logo" class="w-full h-auto object-contain">
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-spaceWhite-1">Royal City Science</h4>
                                <p class="mt-2 text-spaceWhite-2">Member of the board of directors (2020-2024), advising on non-profit strategy for community science education.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-8 sm:py-16 flex items-center relative overflow-hidden">
        <!-- Fixed star field background -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/space/star_field.jpg') }}" alt="Star Field" class="fixed w-full h-full object-cover opacity-80">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-spaceOrange-1 font-space-crusaders text-center">
                Contact Me
            </h2>
            <div class="mt-4 sm:mt-6 prose prose-lg text-spaceWhite-1">
                <p class="text-lg sm:text-xl">
                    I would love to hear from you! Please reach out with any questions or inquiries.
                </p>
                <form class="mt-4">
                    <input type="text" placeholder="Your Name" class="w-full p-3 mb-4 rounded bg-spaceTeal-4 text-spaceWhite-1">
                    <input type="email" placeholder="Your Email" class="w-full p-3 mb-4 rounded bg-spaceTeal-4 text-spaceWhite-1">
                    <textarea placeholder="Your Message" rows="4" class="w-full p-3 mb-4 rounded bg-spaceTeal-4 text-spaceWhite-1"></textarea>
                    <button type="submit" class="w-full sm:w-auto bg-spaceOrange-1 text-spaceWhite-1 font-eurostyle font-bold text-lg py-3 px-6 rounded hover:bg-spaceOrange-2 transition-colors duration-300">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Add required styles -->
    @push('styles')
    <style>
        html {
            scroll-padding-top: 8rem; /* Keep some padding for the fixed navbar */
        }
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

        /* Add responsive typography */
        @media (max-width: 640px) {
            .prose {
                font-size: 0.95rem;
            }
            
            h2 {
                font-size: 1.75rem;
                line-height: 1.2;
            }
            
            h3 {
                font-size: 1.5rem;
                line-height: 1.3;
            }
        }

        /* Adjust animations for mobile performance */
        @media (max-width: 768px) {
            .floating-orb,
            .floating-orb-2,
            .floating-orb-3 {
                animation-duration: 15s;
            }
            
            .animate-nebula {
                animation-duration: 15s;
            }
        }

        /* Improve touch targets on mobile */
        @media (max-width: 640px) {
            button,
            .button,
            a {
                min-height: 44px;
                padding: 0.75rem 1rem;
            }
            
            input,
            textarea {
                font-size: 16px; /* Prevent iOS zoom on focus */
            }
        }

    </style>
    @endpush
</x-app-layout> 