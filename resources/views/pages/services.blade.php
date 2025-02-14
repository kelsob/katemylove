<x-app-layout>
    <div class="relative pt-24 pb-16 overflow-hidden bg-black">
        <!-- Fixed star field background with vertical offset -->
        <div class="absolute inset-0 bg-black">
            <img src="{{ asset('images/space/star_field.jpg') }}" alt="Star Field" class="fixed w-full h-full object-cover opacity-80" style="top: -20%; transform: translateY(-50%);">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-warm-yellow sm:text-5xl md:text-6xl glow-text text-center">
                Our Services
            </h1>
            <div class="mt-6 prose prose-lg prose-invert">
                <p class="text-xl text-warm-gray">
                    We offer a range of services to help you understand and engage with space science. Our services include:
                </p>
                <ul class="text-warm-gray">
                    <li>Public Speaking Engagements</li>
                    <li>Workshops and Educational Programs</li>
                    <li>Consultation for Science Communication</li>
                    <li>Content Creation for Media</li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout> 