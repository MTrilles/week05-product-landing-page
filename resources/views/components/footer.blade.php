<footer class="bg-stone-900 text-stone-300 py-10 sm:py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 sm:gap-12">
            
            <!-- Company Info -->
            <div class="space-y-4">
                <a href="#" class="flex items-center bg-white p-2 rounded-lg inline-block w-max">
                    <img src="{{ asset('assets/minute-burger-logo.png') }}" alt="Minute Burger" class="h-8 sm:h-10 w-auto">
                </a>
                <p class="text-sm text-white mt-3 sm:mt-4 leading-relaxed">
                    Providing Everyday Happy Time through affordable, delicious, and quality meals since 1982.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-bold mb-3 sm:mb-4 uppercase tracking-wider text-sm sm:text-base">Quick Links</h4>
                <ul class="space-y-2 text-white text-sm sm:text-base">
                    <li><a href="#home" class="hover:text-orange-400 transition">Home</a></li>
                    <li><a href="#menu" class="hover:text-orange-400 transition">Our Menu</a></li>
                    <li><a href="#franchise" class="hover:text-orange-400 transition">Franchising</a></li>
                    <li><a href="#locations" class="hover:text-orange-400 transition">Store Locations</a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div>
                <h4 class="text-white font-bold mb-3 sm:mb-4 uppercase tracking-wider text-sm sm:text-base">Legal</h4>
                <ul class="space-y-2 text-white text-sm sm:text-base">
                    <li><a href="#" class="hover:text-orange-400 transition">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-orange-400 transition">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div id="contact">
                <h4 class="text-white font-bold mb-3 sm:mb-4 uppercase tracking-wider text-sm sm:text-base">Contact Us</h4>
                <ul class="space-y-3 text-xs sm:text-sm text-white">
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-orange-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>4 Dama de Noche St., New Manila, Quezon City, Philippines</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-orange-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>(02) 8776-7740</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-orange-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>info@minuteburger.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-stone-800 mt-10 sm:mt-12 pt-6 sm:pt-8 text-center text-xs sm:text-sm text-stone-500">
            <p>&copy; {{ date('Y') }} Leslie Corporation (Minute Burger). All rights reserved.</p>
        </div>
    </div>
</footer>