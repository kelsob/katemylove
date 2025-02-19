<nav x-data="{ open: false }" class="bg-black border-b border-gray-800 z-50 relative" style="background-image: url('{{ asset('images/space/saturn_rings_colored.png') }}'); background-size: cover; background-position: bottom;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                    <span class="text-spaceOrange">Kate</span><span class="text-spacePeach font-space-crusaders">Howells</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:ms-10 sm:flex items-center">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="bg-spacePurple text-spacePeach hover:text-purple-400 rounded-lg px-3 py-1 inline-block"
                    >
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')" class="bg-spacePurple text-spacePeach hover:text-purple-400 rounded-lg px-3 py-1 inline-block">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link :href="route('portfolio')" :active="request()->routeIs('portfolio')" class="bg-spacePurple text-spacePeach hover:text-purple-400 rounded-lg px-3 py-1 inline-block">
                        {{ __('Previous Work') }}
                    </x-nav-link>
                    <x-nav-link :href="route('services')" :active="request()->routeIs('services')" class="bg-spacePurple text-spacePeach hover:text-purple-400 rounded-lg px-3 py-1 inline-block">
                        {{ __('Services') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="bg-spacePurple text-spacePeach hover:text-purple-400 rounded-lg px-3 py-1 inline-block">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>
            </div>
            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-mainColor">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" class="text-spaceOrange hover:text-purple-400">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')" class="text-spaceOrange hover:text-purple-400">
                {{ __('About') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('services')" :active="request()->routeIs('services')" class="text-spaceOrange hover:text-purple-400">
                {{ __('Services') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('portfolio')" :active="request()->routeIs('portfolio')" class="text-spaceOrange hover:text-purple-400">
                {{ __('Previous Work') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="text-spaceOrange hover:text-purple-400">
                {{ __('Contact') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
