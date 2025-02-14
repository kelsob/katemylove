<x-app-layout>
    <div class="relative pt-24 pb-16 overflow-hidden bg-black">
        <!-- Fixed star field background -->
        <div class="absolute inset-0 bg-black">
            <img src="{{ asset('images/space/star_field.jpg') }}" alt="Star Field" class="fixed w-full h-full object-cover opacity-80">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-warm-yellow sm:text-5xl md:text-6xl glow-text text-center">
                Previous Work
            </h1>
            <div class="mt-6 prose prose-lg prose-invert">
                <p class="text-xl text-warm-gray">
                    Here are some of the projects and initiatives I have been involved in:
                </p>
                <ul class="text-warm-gray">
                    <li>Project A - Description</li>
                    <li>Project B - Description</li>
                    <li>Project C - Description</li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout> 