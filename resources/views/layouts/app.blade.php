<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'KateOnEarth') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=space-grotesk:400,500,600,700" rel="stylesheet" />

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
            <img src="{{ asset('images/space/star_field.jpg') }}" alt="Star Field" class="w-full h-full object-cover">
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
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <!-- Brand -->
                        <div class="col-span-1 md:col-span-2">
                            <div class="logo flex flex-col leading-none -space-y-3">
                                <span class="text-spaceTeal-2 text-3xl">Kate</span>
                                <span class="text-spaceTeal-3 text-3xl">Howells</span>
                            </div>
                            <p class="mt-4 text-spaceWhite-1">
                                Bringing space science down to Earth through engaging communication and creative exploration.
                            </p>
                        </div>

                        <!-- Quick Links -->
                        <div>
                            <h3 class="text-sm font-semibold text-spaceTeal-1 tracking-wider uppercase">Quick Links</h3>
                            <ul class="mt-4 space-y-4">
                                <li>
                                    <a href="{{ route('about') }}" class="text-spaceWhite-1 hover:text-spaceOrange-1">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('portfolio') }}" class="text-spaceWhite-1 hover:text-spaceOrange-1">
                                        Previous Work
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('services') }}" class="text-spaceWhite-1 hover:text-spaceOrange-1">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="text-spaceWhite-1 hover:text-spaceOrange-1">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Contact -->
                        <div>
                            <h3 class="text-sm font-semibold text-spaceTeal-1 tracking-wider uppercase">Contact</h3>
                            <ul class="mt-4 space-y-4">
                                <li class="flex items-center text-spaceWhite-1">
                                    <svg class="h-6 w-6 text-spaceTeal-2 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    kate.c.howells@gmail.com
                                </li>
                                <li class="flex items-center text-spaceWhite-1">
                                    <svg class="h-6 w-6 text-spaceTeal-2 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Guelph, ON
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-8 pt-8 border-t border-spaceOrange-2">
                        <p class="text-spaceWhite-2 text-sm text-center">
                            &copy; {{ date('Y') }} Kate Howells. All rights reserved.
                        </p>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Alpine.js -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </body>
</html>
