<x-app-layout>
    <div class="relative pt-24 pb-16 overflow-hidden">
        <!-- Fixed star field background -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/space/star_field.jpg') }}" alt="Star Field" class="fixed w-full h-full object-cover opacity-80">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-spaceOrange-1 sm:text-5xl md:text-6xl font-space-crusaders text-center">
                Our Services
            </h1>
            <div class="mt-6 prose prose-lg text-spaceWhite-1">
                <p class="text-xl">
                    We offer a range of services to help you understand and engage with space science. Our services include:
                </p>
                <ul>
                    <li>Public Speaking Engagements</li>
                    <li>Workshops and Educational Programs</li>
                    <li>Consultation for Science Communication</li>
                    <li>Content Creation for Media</li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout> 