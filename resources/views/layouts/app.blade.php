<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Kate Howells - Public Education Specialist - Space Communicator</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/space/saturn_logo.png') }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/space/favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="{{ asset('') }}" crossorigin>
        <link rel="preload" href="{{ asset('fonts/SpaceCrusaders.ttf') }}" as="font" type="font/ttf" crossorigin fetchpriority="high">

        <!-- Preload navigation background images -->
        <link rel="preload" href="{{ asset('images/space/saturn_rings_colored.webp') }}" as="image">
        <link rel="preload" href="{{ asset('images/space/saturn_rings_colored_mobile.webp') }}" as="image" media="(max-width: 480px)">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Base Styles -->
        <style>
            @font-face {
                font-family: 'EuroStyle';
                src: url('/fonts/EuroStyle.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }

            @font-face {
                font-family: 'SpaceCrusaders';
                src: url('/fonts/SpaceCrusaders.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }

            
            @font-face {
                font-family: 'TitillumWeb';
                src: url('/fonts/TitillumWeb.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }
            
            /* Smooth scrolling */
            html {
                scroll-behavior: smooth;
            }

            /* Custom scrollbar */
            ::-webkit-scrollbar {
                width: 8px;
            }

            ::-webkit-scrollbar-track {
                background: #1a1a1a;
            }

            ::-webkit-scrollbar-thumb {
                background: #4B0082;
                border-radius: 4px;
            }

            ::-webkit-scrollbar-thumb:hover {
                background: #6B238E;
            }

            /* Font Classes */
        </style>

        <!-- Page Specific Styles -->
        @stack('styles')
    </head>
    <body class="font-sans antialiased min-h-screen relative">
        <!-- Fixed Background -->
        <div class="fixed inset-0 -z-10">
            <picture>
                <source media="(max-width: 480px)" srcset="{{ asset('images/space/star_field_mobile.webp') }}">
                <img src="{{ asset('images/space/star_field.webp') }}" alt="Star Field" class="w-full h-full object-cover">
            </picture>
        </div>
        
        <!-- Main Content -->
        <div class="relative z-10">
            @include('layouts.navigation')

            <!-- Flash Messages -->
            <x-flash-message />

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="border-t border-spaceOrange-2 relative z-30 bg-spaceBrown-2/80 backdrop-blur-sm">
                <div class="max-w-7xl mx-auto py-8 sm:py-12 px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 sm:gap-8">
                        <!-- Brand -->
                        <div class="col-span-1 sm:col-span-4">
                            <div class="logo flex flex-col leading-none -space-y-2">
                                <span class="text-spaceTeal-2 text-2xl sm:text-3xl">Kate</span>
                                <span class="text-spaceTeal-3 text-2xl sm:text-3xl">Howells</span>
                            </div>
                        </div>

                        <!-- Quick Links -->
                        <div class="col-span-1 sm:col-span-4">
                            <h3 class="text-base sm:text-lg font-semibold text-spaceTeal-1 mb-3 sm:mb-4">Quick Links</h3>
                            <nav class="flex flex-col space-y-2">
                                <a href="#home" class="text-sm sm:text-base text-spaceWhite-1 hover:text-spaceOrange-1 transition-colors duration-300">
                                    Home
                                </a>
                                <a href="#services" class="text-sm sm:text-base text-spaceWhite-1 hover:text-spaceOrange-1 transition-colors duration-300">
                                    Services
                                </a>
                                <a href="#portfolio" class="text-sm sm:text-base text-spaceWhite-1 hover:text-spaceOrange-1 transition-colors duration-300">
                                    My Work
                                </a>
                                <a href="#contact" class="text-sm sm:text-base text-spaceWhite-1 hover:text-spaceOrange-1 transition-colors duration-300">
                                    Contact
                                </a>
                            </nav>
                        </div>

                        <!-- Contact -->
                        <div class="col-span-1 sm:col-span-4">
                            <h3 class="text-base sm:text-lg font-semibold text-spaceTeal-1 mb-3 sm:mb-4">Contact</h3>
                            <div class="flex flex-col space-y-2">
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-spaceTeal-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <a href="mailto:kate.c.howells@gmail.com" class="text-sm text-base text-spaceWhite-1 hover:text-spaceOrange-1 transition-colors duration-300 break-all leading-tight">
                                        kate.c.howells@gmail.com
                                    </a>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-spaceTeal-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <a href="mailto:kate.c.howells@gmail.com" class="text-sm text-base text-spaceWhite-1 hover:text-spaceOrange-1 transition-colors duration-300 break-all leading-tight">
                                        Guelph, ON
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="mt-6 sm:mt-8 pt-4 sm:pt-6 border-t border-spaceOrange-2">
                        <p class="text-spaceWhite-2 text-xs sm:text-sm text-center">
                            &copy; {{ date('Y') }} Kate Howells. All rights reserved.
                        </p>
                        <p class="text-spaceWhite-2 text-xs sm:text-sm text-center mt-2">
                            Website designed by: <a href="https://www.pixelburstdigital.com" class="text-spaceTeal-1 hover:text-spaceOrange-1 transition-colors duration-300 hover:underline">www.pixelburstdigital.com</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Alpine.js -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </body>
</html>
