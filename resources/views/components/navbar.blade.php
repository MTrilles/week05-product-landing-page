<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('image_07cb2d.png') }}" alt="Minute Burger Logo" class="h-16 w-auto">
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center font-medium">
                <a href="#home" class="text-stone-600 hover:text-orange-500 transition">Home</a>
                <a href="#features" class="text-stone-600 hover:text-orange-500 transition">Why Us</a>
                <a href="#franchise" class="text-stone-600 hover:text-orange-500 transition">Franchise</a>
                <a href="#testimonials" class="text-stone-600 hover:text-orange-500 transition">Reviews</a>
                <a href="#contact" class="text-stone-600 hover:text-orange-500 transition">Contact</a>
            </div>

            <!-- Auth Buttons -->
            <div class="hidden md:flex space-x-4 items-center">
                <a href="#login" class="text-stone-600 font-medium hover:text-orange-500 transition">Sign In</a>
                <x-button type="primary" href="#order" class="px-5 py-2 text-sm">Order Now</x-button>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="text-stone-500 hover:text-stone-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>