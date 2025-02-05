<x-app-layout>
    <!-- Hero Section -->
    <div class="relative pt-24 pb-16 bg-black overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0" id="stars"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl glow-text">
                    Previous Work
                </h1>
                <p class="mt-4 text-xl text-gray-300 max-w-3xl mx-auto">
                    A collection of my contributions to space science communication, public speaking engagements, and creative projects.
                </p>
            </div>
        </div>
    </div>

    <!-- Media Appearances Section -->
    <div class="bg-black py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white glow-text">Media Appearances</h2>
                <p class="mt-4 text-gray-300">Featured interviews and discussions about space exploration</p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Media Item 1 -->
                <div class="group relative bg-gray-900 rounded-lg overflow-hidden hover:bg-gray-800 transition-all duration-300">
                    <div class="aspect-w-16 aspect-h-9">
                        <img src="{{ config('images.media.interview1') }}" alt="TV Interview" class="object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="h-16 w-16 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white">Space Exploration Today</h3>
                        <p class="text-purple-400">National Science Network</p>
                        <p class="mt-2 text-gray-300">Discussion on the future of space exploration and the role of private companies.</p>
                    </div>
                </div>

                <!-- Media Item 2 -->
                <div class="group relative bg-gray-900 rounded-lg overflow-hidden hover:bg-gray-800 transition-all duration-300">
                    <div class="aspect-w-16 aspect-h-9">
                        <img src="{{ config('images.media.podcast1') }}" alt="Podcast Interview" class="object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="h-16 w-16 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white">The Space Podcast</h3>
                        <p class="text-purple-400">Science Communication Series</p>
                        <p class="mt-2 text-gray-300">Deep dive into making space science accessible to the public.</p>
                    </div>
                </div>

                <!-- Media Item 3 -->
                <div class="group relative bg-gray-900 rounded-lg overflow-hidden hover:bg-gray-800 transition-all duration-300">
                    <div class="aspect-w-16 aspect-h-9">
                        <img src="{{ config('images.media.article1') }}" alt="Magazine Feature" class="object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="h-16 w-16 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-white">Space Science Monthly</h3>
                        <p class="text-purple-400">Featured Article</p>
                        <p class="mt-2 text-gray-300">Breaking down the latest Mars mission discoveries.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Speaking Engagements -->
    <div class="bg-black py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white glow-text">Speaking Engagements</h2>
                <p class="mt-4 text-gray-300">Keynotes and presentations at major conferences</p>
            </div>

            <div class="space-y-12">
                <!-- Event 1 -->
                <div class="group relative bg-gray-900 rounded-lg overflow-hidden hover:bg-gray-800 transition-all duration-300">
                    <div class="p-8 sm:flex sm:items-center sm:justify-between">
                        <div class="sm:flex-1">
                            <h3 class="text-xl font-bold text-white">International Space Conference 2023</h3>
                            <p class="mt-2 text-purple-400">Keynote Speaker</p>
                            <p class="mt-3 text-gray-300">
                                "Making Space Accessible: Bridging the Gap Between Science and Public Understanding"
                            </p>
                            <div class="mt-4 flex items-center text-sm text-gray-400">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                October 15, 2023
                            </div>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-6">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-purple-400 text-sm font-medium rounded-md text-purple-400 hover:bg-purple-400 hover:text-black transition-all duration-300">
                                Watch Presentation
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="group relative bg-gray-900 rounded-lg overflow-hidden hover:bg-gray-800 transition-all duration-300">
                    <div class="p-8 sm:flex sm:items-center sm:justify-between">
                        <div class="sm:flex-1">
                            <h3 class="text-xl font-bold text-white">TEDx Space Exploration</h3>
                            <p class="mt-2 text-purple-400">Featured Speaker</p>
                            <p class="mt-3 text-gray-300">
                                "The Future of Human Space Exploration: Making Dreams Reality"
                            </p>
                            <div class="mt-4 flex items-center text-sm text-gray-400">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                July 8, 2023
                            </div>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-6">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-purple-400 text-sm font-medium rounded-md text-purple-400 hover:bg-purple-400 hover:text-black transition-all duration-300">
                                Watch Talk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Advisory Roles -->
    <div class="bg-black py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white glow-text">Boards & Advisory Roles</h2>
                <p class="mt-4 text-gray-300">Organizations I've worked with to advance space science communication</p>
            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Organization 1 -->
                <div class="bg-gray-900 rounded-lg p-8 hover:bg-gray-800 transition-all duration-300">
                    <img src="{{ config('images.organizations.planetary_society') }}" alt="Planetary Society" class="h-12 w-auto mb-4">
                    <h3 class="text-lg font-bold text-white">The Planetary Society</h3>
                    <p class="mt-2 text-purple-400">Communications Director</p>
                    <p class="mt-3 text-gray-300">Leading public engagement and educational initiatives.</p>
                </div>

                <!-- Organization 2 -->
                <div class="bg-gray-900 rounded-lg p-8 hover:bg-gray-800 transition-all duration-300">
                    <img src="{{ config('images.organizations.space_foundation') }}" alt="Space Foundation" class="h-12 w-auto mb-4">
                    <h3 class="text-lg font-bold text-white">Space Foundation</h3>
                    <p class="mt-2 text-purple-400">Advisory Board Member</p>
                    <p class="mt-3 text-gray-300">Guiding educational outreach and public programs.</p>
                </div>

                <!-- Organization 3 -->
                <div class="bg-gray-900 rounded-lg p-8 hover:bg-gray-800 transition-all duration-300">
                    <img src="{{ config('images.organizations.science_museum') }}" alt="Science Museum" class="h-12 w-auto mb-4">
                    <h3 class="text-lg font-bold text-white">National Space Museum</h3>
                    <p class="mt-2 text-purple-400">Content Advisor</p>
                    <p class="mt-3 text-gray-300">Developing engaging space science exhibits.</p>
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