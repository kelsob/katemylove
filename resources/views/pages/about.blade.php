<x-app-layout>
    <!-- Hero Section -->
    <div class="relative pt-24 pb-16 overflow-hidden bg-black">
        <!-- Fixed star field background -->
        <div class="absolute inset-0 bg-black">
            <img src="{{ asset('images/space/star_field.jpg') }}" alt="Star Field" class="fixed w-full h-full object-cover opacity-80">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
                <div class="lg:col-span-7">
                    <h1 class="text-4xl font-extrabold text-warm-yellow sm:text-5xl md:text-6xl glow-text">
                        About Kate
                    </h1>
                    <div class="mt-6 prose prose-lg prose-invert">
                        <p class="text-xl text-warm-gray">
                            As a public speaker, writer, and communications strategist, I bridge the gap between complex space science 
                            and public understanding. My work with the Planetary Society and various space organizations has allowed me 
                            to share the wonders of space exploration with audiences worldwide.
                        </p>
                    </div>
                </div>
                <div class="mt-12 lg:mt-0 lg:col-span-5">
                    <div class="relative max-w-md mx-auto">
                        <div class="aspect-w-3 aspect-h-4 rounded-lg overflow-hidden transform hover:scale-105 transition-all duration-500">
                            <img src="{{ config('images.profile.kate_full') }}" alt="Kate" class="relative z-10 w-full h-full object-cover rounded-lg shadow-cosmic">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Career Timeline -->
    <div class=" py-24 relative">

        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-warm-yellow mb-12 glow-text text-center">Highlights</h2>
            
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-px h-full w-1 glow-line"></div>

                <div class="space-y-16">
                    <!-- Current Role -->
                    <div class="relative">
                        <div class="relative flex items-center justify-between">
                            <div class="flex-1 text-right pr-8">
                                <h3 class="text-xl font-bold text-warm-yellow">Communications Director</h3>
                                <p class="text-warm-orange">The Planetary Society</p>
                                <p class="text-warm-gray">2020 - Present</p>
                            </div>
                            <div class="w-4 h-4 rounded-full bg-warm-orange border-4 border-black relative z-10 glow-point"></div>
                            <div class="flex-1 pl-8">
                                <p class="text-warm-gray">Leading science communication initiatives and public outreach programs. Developing strategies to make space science accessible to diverse audiences.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Previous Roles -->
                    <div class="relative">
                        <div class="relative flex items-center justify-between">
                            <div class="flex-1 text-right pr-8">
                                <h3 class="text-xl font-bold text-warm-yellow">Science Communicator</h3>
                                <p class="text-warm-orange">Space Science Institute</p>
                                <p class="text-warm-gray">2017 - 2020</p>
                            </div>
                            <div class="w-4 h-4 rounded-full bg-warm-orange border-4 border-black relative z-10 glow-point"></div>
                            <div class="flex-1 pl-8">
                                <p class="text-warm-gray">Developed and delivered educational programs about space exploration. Created content for museums and science centers.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="relative flex items-center justify-between">
                            <div class="flex-1 text-right pr-8">
                                <h3 class="text-xl font-bold text-warm-yellow">Science Writer</h3>
                                <p class="text-warm-orange">Freelance</p>
                                <p class="text-warm-gray">2015 - 2017</p>
                            </div>
                            <div class="w-4 h-4 rounded-full bg-warm-orange border-4 border-black relative z-10 glow-point"></div>
                            <div class="flex-1 pl-8">
                                <p class="text-warm-gray">Contributed articles to major science publications. Covered space missions, astronomical discoveries, and space technology developments.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Approach Section -->
    <div class="py-24 relative overflow-hidden">


        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-2xl overflow-hidden">
                <div class="relative px-8 py-12 sm:px-12 sm:py-16">
                    <h2 class="text-3xl font-bold text-warm-yellow mb-6 glow-text">My Approach</h2>
                    <div class="prose prose-lg prose-invert">
                        <p class="text-warm-gray">
                            My work is all about empowering people through science, inspiring appreciation for the natural world, and bringing creativity and humour into science outreach and education.
                        </p>
                        <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('images/space/mercury.png') }}" alt="Planet" class="w-8 h-6">
                                </div>
                                <p class="ml-3 text-warm-gray">Making complex science accessible and engaging</p>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('images/space/venus.png') }}" alt="Planet" class="h-6 w-8">
                                </div>
                                <p class="ml-3 text-warm-gray">Fostering curiosity about space exploration</p>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('images/space/earth.png') }}" alt="Planet" class="h-6 w-8">
                                </div>
                                <p class="ml-3 text-warm-gray">Building bridges between scientists and the public</p>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('images/space/moon.png') }}" alt="Planet" class="h-6 w-8">
                                </div>
                                <p class="ml-3 text-warm-gray">Inspiring the next generation of space explorers</p>
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
        .text-warm-yellow {
            color: #FFD700; /* Warm yellow */
        }
        .text-warm-orange {
            color: #FF8C00; /* Warm orange */
        }
        .text-warm-gray {
            color: #D3D3D3; /* Light warm gray */
        }
        .glow-text {
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.5),
                         0 0 20px rgba(255, 140, 0, 0.3),
                         0 0 20px rgba(255, 140, 0, 0.3);
        }
        .shadow-cosmic {
            box-shadow: 0 0 30px rgba(255, 215, 0, 0.3),
                        0 0 60px rgba(255, 140, 0, 0.2);
        }
        .glow-point {
            box-shadow: 0 0 15px currentColor;
        }
    </style>
    @endpush
</x-app-layout> 