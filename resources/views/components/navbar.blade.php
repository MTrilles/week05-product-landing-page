<!-- Load Alpine.js and Collapse Plugin for x-collapse to work properly -->
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- Load Professional Typography Font (Plus Jakarta Sans) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

<nav x-data="{ 
    open: false, 
    activeSection: 'home' 
}" 
x-init="
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                activeSection = entry.target.id;
            }
        });
    }, { threshold: 0.3 });
    document.querySelectorAll('section[id]').forEach(section => observer.observe(section));
"
class="font-['Plus_Jakarta_Sans',sans-serif] sticky top-0 z-50 bg-gradient-to-r from-[#FFF9F2] via-[#F8EADB] to-[#EDD7BF] backdrop-blur-md border-b border-amber-900/10 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 sm:h-20">
            
            <!-- Logo with emphasized shadow -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center group transition-all duration-300 transform hover:scale-105">
                    <img src="{{ asset('assets/minute-burger-logo.png') }}" alt="Minute Burger Logo" class="h-10 sm:h-14 lg:h-16 w-auto drop-shadow-[0_10px_12px_rgba(0,0,0,0.35)]">
                </a>
            </div>
            
            <!-- Desktop Navigation Links with Active Page Indicator -->
            <div class="hidden md:flex items-center space-x-1 lg:space-x-3">
                <a href="#home" 
                   :class="activeSection === 'home' ? 'text-orange-600 bg-orange-500/15 shadow-sm font-black' : 'text-stone-800 hover:text-orange-600 hover:bg-orange-500/10'" 
                   class="px-3 lg:px-4 py-2 text-xs lg:text-sm font-bold uppercase tracking-wider rounded-full transition-all duration-200">Home</a>
                
                <a href="#features" 
                   :class="activeSection === 'features' ? 'text-orange-600 bg-orange-500/15 shadow-sm font-black' : 'text-stone-800 hover:text-orange-600 hover:bg-orange-500/10'" 
                   class="px-3 lg:px-4 py-2 text-xs lg:text-sm font-bold uppercase tracking-wider rounded-full transition-all duration-200">Why Us</a>
                
                <a href="#franchise" 
                   :class="activeSection === 'franchise' ? 'text-orange-600 bg-orange-500/15 shadow-sm font-black' : 'text-stone-800 hover:text-orange-600 hover:bg-orange-500/10'" 
                   class="px-3 lg:px-4 py-2 text-xs lg:text-sm font-bold uppercase tracking-wider rounded-full transition-all duration-200">Franchise</a>
                
                <a href="#testimonials" 
                   :class="activeSection === 'testimonials' ? 'text-orange-600 bg-orange-500/15 shadow-sm font-black' : 'text-stone-800 hover:text-orange-600 hover:bg-orange-500/10'" 
                   class="px-3 lg:px-4 py-2 text-xs lg:text-sm font-bold uppercase tracking-wider rounded-full transition-all duration-200">Reviews</a>
                
                <a href="#contact" 
                   :class="activeSection === 'contact' ? 'text-orange-600 bg-orange-500/15 shadow-sm font-black' : 'text-stone-800 hover:text-orange-600 hover:bg-orange-500/10'" 
                   class="px-3 lg:px-4 py-2 text-xs lg:text-sm font-bold uppercase tracking-wider rounded-full transition-all duration-200">Contact</a>
            </div>

            <!-- Action Buttons -->
            <div class="hidden md:flex items-center space-x-2 lg:space-x-4">
                <a href="#login" class="px-3 lg:px-4 py-2 text-xs lg:text-sm font-extrabold uppercase tracking-wider text-stone-800 hover:text-orange-600 transition-colors">Sign In</a>
                <a href="#order" class="inline-flex items-center gap-2 px-4 lg:px-6 py-2 lg:py-2.5 bg-gradient-to-r from-orange-500 via-orange-600 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white font-extrabold text-[10px] lg:text-xs uppercase tracking-wider rounded-full shadow-md hover:shadow-orange-500/25 transition-all transform hover:-translate-y-0.5 active:translate-y-0">
                    <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                    <span>Order Now</span>
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="open = !open" aria-label="Toggle Menu" class="p-2 rounded-xl text-stone-800 hover:bg-orange-500/10 focus:outline-none transition">
                    <!-- Hamburger Icon -->
                    <svg x-show="!open" class="h-6 w-6 sm:h-7 sm:w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <!-- Close X Icon -->
                    <svg x-show="open" style="display: none;" class="h-6 w-6 sm:h-7 sm:w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div x-show="open" style="display: none;" x-collapse class="md:hidden bg-[#FFF9F2]/98 border-t border-amber-900/10 px-4 pt-4 pb-6 space-y-2 shadow-xl">
        <a href="#home" @click="open = false" :class="activeSection === 'home' ? 'text-orange-600 bg-orange-500/15 font-black' : 'text-stone-800'" class="block px-4 py-2.5 text-xs font-bold uppercase tracking-wider hover:bg-orange-500/10 hover:text-orange-600 rounded-lg transition">Home</a>
        <a href="#features" @click="open = false" :class="activeSection === 'features' ? 'text-orange-600 bg-orange-500/15 font-black' : 'text-stone-800'" class="block px-4 py-2.5 text-xs font-bold uppercase tracking-wider hover:bg-orange-500/10 hover:text-orange-600 rounded-lg transition">Why Us</a>
        <a href="#franchise" @click="open = false" :class="activeSection === 'franchise' ? 'text-orange-600 bg-orange-500/15 font-black' : 'text-stone-800'" class="block px-4 py-2.5 text-xs font-bold uppercase tracking-wider hover:bg-orange-500/10 hover:text-orange-600 rounded-lg transition">Franchise</a>
        <a href="#testimonials" @click="open = false" :class="activeSection === 'testimonials' ? 'text-orange-600 bg-orange-500/15 font-black' : 'text-stone-800'" class="block px-4 py-2.5 text-xs font-bold uppercase tracking-wider hover:bg-orange-500/10 hover:text-orange-600 rounded-lg transition">Reviews</a>
        <a href="#contact" @click="open = false" :class="activeSection === 'contact' ? 'text-orange-600 bg-orange-500/15 font-black' : 'text-stone-800'" class="block px-4 py-2.5 text-xs font-bold uppercase tracking-wider hover:bg-orange-500/10 hover:text-orange-600 rounded-lg transition">Contact</a>
        <div class="pt-4 border-t border-amber-900/10 flex flex-col gap-3">
            <a href="#login" @click="open = false" class="text-center w-full py-2.5 text-xs font-extrabold uppercase tracking-wider text-stone-800 hover:text-orange-600 transition">Sign In</a>
            <a href="#order" @click="open = false" class="text-center w-full py-3 bg-gradient-to-r from-orange-500 to-amber-500 text-white font-extrabold text-xs uppercase tracking-wider rounded-xl shadow-md transition">Order Now</a>
        </div>
    </div>
</nav>