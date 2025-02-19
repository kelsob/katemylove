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
        </style>

        <!-- Page Specific Styles -->
        @stack('styles')
    </head>
    <body class="font-sans antialiased min-h-screen">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Flash Messages -->
            <x-flash-message />

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="border-t border-gray-800 relative z-30">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <!-- Brand -->
                        <div class="col-span-1 md:col-span-2">
                            <div class="text-xl font-bold text-white">
                                Kate<span class="text-purple-400">Howells</span>
                            </div>
                            <p class="mt-4 text-gray-300">
                                Bringing space science down to Earth through engaging communication and creative exploration.
                            </p>
                        </div>

                        <!-- Quick Links -->
                        <div>
                            <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Quick Links</h3>
                            <ul class="mt-4 space-y-4">
                                <li>
                                    <a href="{{ route('about') }}" class="text-gray-300 hover:text-purple-400">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('portfolio') }}" class="text-gray-300 hover:text-purple-400">
                                        Previous Work
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('services') }}" class="text-gray-300 hover:text-purple-400">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="text-gray-300 hover:text-purple-400">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Contact -->
                        <div>
                            <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Contact</h3>
                            <ul class="mt-4 space-y-4">
                                <li class="flex items-center text-gray-300">
                                    <svg class="h-6 w-6 text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    kate.c.howells@gmail.com
                                </li>
                                <li class="flex items-center text-gray-300">
                                    <svg class="h-6 w-6 text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Guelph, ON
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-8 pt-8 border-t border-gray-800">
                        <p class="text-gray-400 text-sm text-center">
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
