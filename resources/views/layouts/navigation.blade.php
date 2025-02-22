<nav x-data="{ open: false }" class="bg-spaceBrown-2 border-b border-spaceOrange-2 z-50 py-6 relative" style="background-image: url('{{ asset('images/space/saturn_rings_colored.png') }}'); background-size: cover; background-position: bottom;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="logo flex flex-col leading-none -space-y-3">
                    <span class="text-spaceTeal-2 text-5xl">Kate</span>
                    <span class="text-spaceTeal-3 text-5xl">Howells</span>
                </a>
            </div>
            <!-- Navigation Links -->
            <div class="hidden space-x-4 sm:flex items-center">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="bg-spaceTeal-3 text-spaceTeal-1 hover:text-spaceWhite-1 rounded-lg px-5 py-2 inline-block whitespace-nowrap !text-xl">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('about')" :active="request()->routeIs('about')" class="bg-spaceTeal-3 text-spaceTeal-1 hover:text-spaceWhite-1 rounded-lg px-5 py-2 inline-block whitespace-nowrap !text-xl">
                    {{ __('About') }}
                </x-nav-link>
                <x-nav-link :href="route('portfolio')" :active="request()->routeIs('portfolio')" class="bg-spaceTeal-3 text-spaceTeal-1 hover:text-spaceWhite-1 rounded-lg px-5 py-2 inline-block whitespace-nowrap !text-xl">
                    {{ __('Previous Work') }}
                </x-nav-link>
                <x-nav-link :href="route('services')" :active="request()->routeIs('services')" class="bg-spaceTeal-3 text-spaceTeal-1 hover:text-spaceWhite-1 rounded-lg px-5 py-2 inline-block whitespace-nowrap !text-xl">
                    {{ __('Services') }}
                </x-nav-link>
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="bg-spaceTeal-3 text-spaceTeal-1 hover:text-spaceWhite-1 rounded-lg px-5 py-2 inline-block whitespace-nowrap !text-xl">
                    {{ __('Contact') }}
                </x-nav-link>
            </div>
            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-spaceTeal-1">
                    <svg class="h-6 w-6" stroke="spaceTeal-1" fill="none" viewBox="0 0 24 24">
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
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" class="text-spaceWhite-1 hover:text-spaceOrange-1">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')" class="text-spaceWhite-1 hover:text-spaceOrange-1">
                {{ __('About') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('services')" :active="request()->routeIs('services')" class="text-spaceWhite-1 hover:text-spaceOrange-1">
                {{ __('Services') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('portfolio')" :active="request()->routeIs('portfolio')" class="text-spaceWhite-1 hover:text-spaceOrange-1">
                {{ __('Previous Work') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="text-spaceWhite-1 hover:text-spaceOrange-1">
                {{ __('Contact') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
