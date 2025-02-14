<x-app-layout>
    <div class="relative pt-24 pb-16 overflow-hidden bg-black">
        <!-- Fixed star field background -->
        <div class="absolute inset-0 bg-black">
            <img src="{{ asset('images/space/star_field.jpg') }}" alt="Star Field" class="fixed w-full h-full object-cover opacity-80">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-warm-yellow sm:text-5xl md:text-6xl glow-text text-center">
                Contact Us
            </h1>
            <div class="mt-6 prose prose-lg prose-invert">
                <p class="text-xl text-warm-gray">
                    We would love to hear from you! Please reach out with any questions or inquiries.
                </p>
                <form class="mt-4">
                    <input type="text" placeholder="Your Name" class="w-full p-2 mb-4 rounded">
                    <input type="email" placeholder="Your Email" class="w-full p-2 mb-4 rounded">
                    <textarea placeholder="Your Message" class="w-full p-2 mb-4 rounded"></textarea>
                    <button type="submit" class="bg-warm-yellow text-black p-2 rounded">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

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
    @keyframes float {
        0% { transform: translate(0, 0); }
        50% { transform: translate(20px, -20px); }
        100% { transform: translate(0, 0); }
    }
    .floating-element {
        top: 10%;
        left: 20%;
        animation: float 15s ease-in-out infinite;
    }
    .floating-element-2 {
        top: 50%;
        right: 10%;
        animation: float 20s ease-in-out infinite reverse;
    }
</style>
@endpush 