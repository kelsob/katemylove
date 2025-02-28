<nav x-data="{ 
    open: false,
    activeSection: 'home',
    checkActiveSection() {
        const sections = ['home', 'services', 'portfolio', 'contact'];
        const windowHeight = window.innerHeight;
        const scrollPosition = window.scrollY + (windowHeight / 3); // Check at 1/3 of the viewport height

        for (const section of sections) {
            const element = document.getElementById(section);
            if (element) {
                const sectionTop = element.offsetTop;
                const sectionBottom = sectionTop + element.offsetHeight;
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    this.activeSection = section;
                    break;
                }
            }
        }
    }
}" 
@scroll.window="checkActiveSection()"
x-init="checkActiveSection()"
class="bg-spaceBrown-2 border-b border-spaceOrange-2 z-50 py-8 fixed w-full top-0" 
style="background-image: url('{{ asset(request()->header('User-Agent') && preg_match('/\b(Android|iPhone|iPad|iPod)\b/i', request()->header('User-Agent')) ? 'images/space/saturn_rings_colored_mobile.webp' : 'images/space/saturn_rings_colored.webp') }}'); background-size: cover; background-position: bottom;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="#home" class="logo flex flex-col leading-none -space-y-3">
                    <span class="text-spaceTeal-2 text-5xl drop-shadow-md">Kate</span>
                    <span class="text-spaceTeal-3 text-5xl drop-shadow-md">Howells</span>
                </a>
            </div>
            <!-- Navigation Links -->
            <div class="hidden space-x-4 md:flex items-center">
                <x-nav-link href="#home" 
                    class="rounded-lg px-4 text-xl pb-1 bg-spaceTeal-3 text-spaceTeal-1 hover:text-spaceWhite-1"
                    x-bind:class="activeSection === 'home' ? 'text-spaceWhite-1' : ''">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link href="#services" 
                    class="rounded-lg px-4 text-xl pb-1 bg-spaceTeal-3 text-spaceTeal-1 hover:text-spaceWhite-1"
                    x-bind:class="activeSection === 'services' ? 'text-spaceWhite-1' : ''">
                    {{ __('Services') }}
                </x-nav-link>
                <x-nav-link href="#portfolio" 
                    class="rounded-lg px-4 text-xl pb-1 bg-spaceTeal-3 text-spaceTeal-1 hover:text-spaceWhite-1"
                    x-bind:class="activeSection === 'portfolio' ? 'text-spaceWhite-1' : ''">
                    <span class="whitespace-nowrap">{{ __('My Work') }}</span>
                </x-nav-link>
                <x-nav-link href="#contact" 
                    class="rounded-lg px-4 text-xl pb-1 bg-spaceTeal-3 text-spaceTeal-1 hover:text-spaceWhite-1"
                    x-bind:class="activeSection === 'contact' ? 'text-spaceWhite-1' : ''">
                    {{ __('Contact') }}
                </x-nav-link>
            </div>
            <!-- Hamburger -->
            <div class="-me-2 flex items-center md:hidden pr-6">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-spaceTeal-2 hover:text-spaceTeal-2 transition-colors duration-200 bg-black/20">
                    <svg class="h-8 w-8 stroke-current" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'translate-x-0 opacity-100': open, '-translate-x-full opacity-0': ! open}" 
         class="fixed inset-0 transform transition-all duration-300 ease-in-out md:hidden"
         style="background: rgba(0, 0, 0, 0.9); backdrop-filter: blur(8px);">
        <div class="h-full flex flex-col justify-center px-8 space-y-6">
            <x-responsive-nav-link href="#home" 
                @click="open = false"
                class="text-2xl font-medium text-center transition-all duration-200 py-2 px-4 rounded-lg flex items-center justify-center gap-3"
                x-bind:class="activeSection === 'home' 
                    ? 'bg-spaceTeal-3/20 text-spaceTeal-2 border-l-4 border-spaceTeal-2'
                    : 'text-spaceWhite-1 hover:text-spaceTeal-2 hover:bg-spaceTeal-3/10'">
                {{ __('Home') }}
                <template x-if="activeSection === 'home'">
                    <svg class="h-4 w-4 min-h-[1rem] min-w-[1rem] text-spaceTeal-2" viewBox="0 0 24 24" fill="currentColor">
                        <ellipse cx="12" cy="12" rx="7" ry="7"/>
                        <ellipse cx="12" cy="12" rx="12" ry="4" fill="none" stroke-width="2" stroke="currentColor" transform="rotate(-35 12 12)"/>
                    </svg>
                </template>
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#services" 
                @click="open = false"
                class="text-2xl font-medium text-center transition-all duration-200 py-2 px-4 rounded-lg flex items-center justify-center gap-3"
                x-bind:class="activeSection === 'services' 
                    ? 'bg-spaceTeal-3/20 text-spaceTeal-2 border-l-4 border-spaceTeal-2'
                    : 'text-spaceWhite-1 hover:text-spaceTeal-2 hover:bg-spaceTeal-3/10'">
                {{ __('Services') }}
                <template x-if="activeSection === 'services'">
                    <svg class="h-4 w-4 min-h-[1rem] min-w-[1rem] text-spaceTeal-2" viewBox="0 0 24 24" fill="currentColor">
                        <ellipse cx="12" cy="12" rx="7" ry="7"/>
                        <ellipse cx="12" cy="12" rx="12" ry="4" fill="none" stroke-width="2" stroke="currentColor" transform="rotate(-35 12 12)"/>
                    </svg>
                </template>
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#portfolio" 
                @click="open = false"
                class="text-2xl font-medium text-center transition-all duration-200 py-2 px-4 rounded-lg flex items-center justify-center gap-3"
                x-bind:class="activeSection === 'portfolio' 
                    ? 'bg-spaceTeal-3/20 text-spaceTeal-2 border-l-4 border-spaceTeal-2'
                    : 'text-spaceWhite-1 hover:text-spaceTeal-2 hover:bg-spaceTeal-3/10'">
                {{ __('Previous Work') }}
                <template x-if="activeSection === 'portfolio'">
                    <svg class="h-4 w-4 min-h-[1rem] min-w-[1rem] text-spaceTeal-2" viewBox="0 0 24 24" fill="currentColor">
                        <ellipse cx="12" cy="12" rx="7" ry="7"/>
                        <ellipse cx="12" cy="12" rx="12" ry="4" fill="none" stroke-width="2" stroke="currentColor" transform="rotate(-35 12 12)"/>
                    </svg>
                </template>
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#contact" 
                @click="open = false"
                class="text-2xl font-medium text-center transition-all duration-200 py-2 px-4 rounded-lg flex items-center justify-center gap-3"
                x-bind:class="activeSection === 'contact' 
                    ? 'bg-spaceTeal-3/20 text-spaceTeal-2 border-l-4 border-spaceTeal-2'
                    : 'text-spaceWhite-1 hover:text-spaceTeal-2 hover:bg-spaceTeal-3/10'">
                {{ __('Contact') }}
                <template x-if="activeSection === 'contact'">
                    <svg class="h-4 w-4 min-h-[1rem] min-w-[1rem] text-spaceTeal-2" viewBox="0 0 24 24" fill="currentColor">
                        <ellipse cx="12" cy="12" rx="7" ry="7"/>
                        <ellipse cx="12" cy="12" rx="12" ry="4" fill="none" stroke-width="2" stroke="currentColor" transform="rotate(-35 12 12)"/>
                    </svg>
                </template>
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
