<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap');

    @keyframes scroll-burgers-left {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    @keyframes scroll-burgers-right {
        0% { transform: translateX(-50%); }
        100% { transform: translateX(0); }
    }
    .animate-scroll-left {
        animation: scroll-burgers-left 35s linear infinite;
    }
    .animate-scroll-right {
        animation: scroll-burgers-right 35s linear infinite;
    }
    .font-montserrat {
        font-family: 'Montserrat', sans-serif;
    }
</style>

<section id="home" class="relative pt-6 pb-16 lg:pt-8 lg:pb-24 bg-gradient-to-br from-amber-50 via-[#FFF4E6] to-orange-100 overflow-hidden">
    
    <!-- Background Animated Burger Loops -->
    <div class="absolute inset-0 z-0 pointer-events-none opacity-50 flex flex-col justify-around py-4 overflow-hidden">
        <!-- Row 1 (Scrolls Left) -->
        <div class="flex animate-scroll-left text-orange-200/60 w-max">
            <div class="flex gap-20 px-10 items-center">
                @for ($i = 0; $i < 10; $i++)
                    <svg class="w-32 h-32 sm:w-40 sm:h-40 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.5 10.5a7.5 7.5 0 0 1 15 0z" />
                        <rect x="3.5" y="11.5" width="17" height="3" rx="1.5" />
                        <path d="M4.5 16h15a2.5 2.5 0 0 1-2.5 2.5h-10A2.5 2.5 0 0 1 4.5 16z" />
                    </svg>
                @endfor
            </div>
            <div class="flex gap-20 px-10 items-center">
                @for ($i = 0; $i < 10; $i++)
                    <svg class="w-32 h-32 sm:w-40 sm:h-40 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.5 10.5a7.5 7.5 0 0 1 15 0z" />
                        <rect x="3.5" y="11.5" width="17" height="3" rx="1.5" />
                        <path d="M4.5 16h15a2.5 2.5 0 0 1-2.5 2.5h-10A2.5 2.5 0 0 1 4.5 16z" />
                    </svg>
                @endfor
            </div>
        </div>

        <!-- Row 2 (Scrolls Right) -->
        <div class="flex animate-scroll-right text-orange-200/60 w-max">
            <div class="flex gap-20 px-10 items-center">
                @for ($i = 0; $i < 10; $i++)
                    <svg class="w-32 h-32 sm:w-40 sm:h-40 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.5 10.5a7.5 7.5 0 0 1 15 0z" />
                        <rect x="3.5" y="11.5" width="17" height="3" rx="1.5" />
                        <path d="M4.5 16h15a2.5 2.5 0 0 1-2.5 2.5h-10A2.5 2.5 0 0 1 4.5 16z" />
                    </svg>
                @endfor
            </div>
            <div class="flex gap-20 px-10 items-center">
                @for ($i = 0; $i < 10; $i++)
                    <svg class="w-32 h-32 sm:w-40 sm:h-40 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.5 10.5a7.5 7.5 0 0 1 15 0z" />
                        <rect x="3.5" y="11.5" width="17" height="3" rx="1.5" />
                        <path d="M4.5 16h15a2.5 2.5 0 0 1-2.5 2.5h-10A2.5 2.5 0 0 1 4.5 16z" />
                    </svg>
                @endfor
            </div>
        </div>

        <!-- Row 3 (Scrolls Left) -->
        <div class="flex animate-scroll-left text-orange-200/60 w-max">
            <div class="flex gap-20 px-10 items-center">
                @for ($i = 0; $i < 10; $i++)
                    <svg class="w-32 h-32 sm:w-40 sm:h-40 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.5 10.5a7.5 7.5 0 0 1 15 0z" />
                        <rect x="3.5" y="11.5" width="17" height="3" rx="1.5" />
                        <path d="M4.5 16h15a2.5 2.5 0 0 1-2.5 2.5h-10A2.5 2.5 0 0 1 4.5 16z" />
                    </svg>
                @endfor
            </div>
            <div class="flex gap-20 px-10 items-center">
                @for ($i = 0; $i < 10; $i++)
                    <svg class="w-32 h-32 sm:w-40 sm:h-40 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.5 10.5a7.5 7.5 0 0 1 15 0z" />
                        <rect x="3.5" y="11.5" width="17" height="3" rx="1.5" />
                        <path d="M4.5 16h15a2.5 2.5 0 0 1-2.5 2.5h-10A2.5 2.5 0 0 1 4.5 16z" />
                    </svg>
                @endfor
            </div>
        </div>

        <!-- Row 4 (Scrolls Right) -->
        <div class="flex animate-scroll-right text-orange-200/60 w-max">
            <div class="flex gap-20 px-10 items-center">
                @for ($i = 0; $i < 10; $i++)
                    <svg class="w-32 h-32 sm:w-40 sm:h-40 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.5 10.5a7.5 7.5 0 0 1 15 0z" />
                        <rect x="3.5" y="11.5" width="17" height="3" rx="1.5" />
                        <path d="M4.5 16h15a2.5 2.5 0 0 1-2.5 2.5h-10A2.5 2.5 0 0 1 4.5 16z" />
                    </svg>
                @endfor
            </div>
            <div class="flex gap-20 px-10 items-center">
                @for ($i = 0; $i < 10; $i++)
                    <svg class="w-32 h-32 sm:w-40 sm:h-40 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.5 10.5a7.5 7.5 0 0 1 15 0z" />
                        <rect x="3.5" y="11.5" width="17" height="3" rx="1.5" />
                        <path d="M4.5 16h15a2.5 2.5 0 0 1-2.5 2.5h-10A2.5 2.5 0 0 1 4.5 16z" />
                    </svg>
                @endfor
            </div>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col items-center text-center space-y-10">
            
            <!-- Automatic & Manual Carousel -->
            <div id="hero-carousel-container" 
                 class="w-full relative shadow-2xl rounded-2xl overflow-hidden border-4 border-white bg-amber-100 group">
                
                <!-- Slides Track (Height adapts dynamically to image's native aspect ratio) -->
                <div id="hero-carousel-track" class="flex transition-transform duration-700 ease-in-out w-full">
                    @php
                        $slides = [
                            asset('assets/content-1.png'),
                            asset('assets/content-2.png'),
                            asset('assets/content-3.png'),
                        ];
                    @endphp

                    @foreach($slides as $slide)
                        <div class="w-full flex-shrink-0 relative">
                            <!-- w-full and h-auto display the image in full resolution without cropping -->
                            <img src="{{ $slide }}" alt="Minute Burger Banner Feature" class="w-full h-auto block">
                        </div>
                    @endforeach
                </div>

                <!-- Left/Right Navigation Controls -->
                <button onclick="heroPrevSlide()" type="button" aria-label="Previous Slide" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-stone-900 rounded-full w-10 h-10 flex items-center justify-center shadow-lg transition transform opacity-0 group-hover:opacity-100 focus:opacity-100 z-20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button onclick="heroNextSlide()" type="button" aria-label="Next Slide" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-stone-900 rounded-full w-10 h-10 flex items-center justify-center shadow-lg transition transform opacity-0 group-hover:opacity-100 focus:opacity-100 z-20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </button>
                
                <!-- Navigation Dots -->
                <div id="hero-carousel-dots" class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-20">
                    <button onclick="heroGoToSlide(0)" type="button" class="hero-dot h-2.5 rounded-full transition-all duration-300 shadow-sm bg-orange-500 w-8"></button>
                    <button onclick="heroGoToSlide(1)" type="button" class="hero-dot h-2.5 rounded-full transition-all duration-300 shadow-sm bg-white/70 hover:bg-white w-2.5"></button>
                    <button onclick="heroGoToSlide(2)" type="button" class="hero-dot h-2.5 rounded-full transition-all duration-300 shadow-sm bg-white/70 hover:bg-white w-2.5"></button>
                </div>
            </div>

            <!-- Content Centered Below Banner -->
            <div class="max-w-3xl space-y-6">
                <p class="text-orange-600 font-bold tracking-wider uppercase text-sm">Everyday Happy Time!</p>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-stone-900 leading-tight">
                    Your Favorite <span class="text-orange-500 drop-shadow-sm">Buy 1 Take 1</span> Burgers.
                </h1>
                
                <!-- Updated paragraph with aesthetic font and highlight -->
                <p class="font-montserrat text-lg text-slate-700 font-medium leading-relaxed">
                    Serving Filipinos with delicious, affordable, and quality burgers <span class="font-semibold text-orange-600">24/7 since 1982</span>. Craving a midnight snack or looking for a profitable franchise? We've got you covered.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center pt-2">
                    <x-button type="primary" href="#menu" class="px-8 py-3.5 text-base shadow-orange-500/25">View Menu</x-button>
                    <x-button type="secondary" href="#franchise" class="px-8 py-3.5 text-base shadow-amber-400/25 border border-amber-300">Franchise With Us</x-button>
                </div>
            </div>

        </div>
    </div>

    <script>
        let currentHeroSlide = 0;
        const totalHeroSlides = 3;
        let heroTimer = null;

        function updateHeroCarousel() {
            const track = document.getElementById('hero-carousel-track');
            if (track) {
                track.style.transform = `translateX(-${currentHeroSlide * 100}%)`;
            }
            
            const dots = document.querySelectorAll('.hero-dot');
            dots.forEach((dot, index) => {
                if (index === currentHeroSlide) {
                    dot.className = 'hero-dot h-2.5 rounded-full transition-all duration-300 shadow-sm bg-orange-500 w-8';
                } else {
                    dot.className = 'hero-dot h-2.5 rounded-full transition-all duration-300 shadow-sm bg-white/70 hover:bg-white w-2.5';
                }
            });
        }

        function heroNextSlide() {
            currentHeroSlide = (currentHeroSlide + 1) % totalHeroSlides;
            updateHeroCarousel();
        }

        function heroPrevSlide() {
            currentHeroSlide = (currentHeroSlide - 1 + totalHeroSlides) % totalHeroSlides;
            updateHeroCarousel();
        }

        function heroGoToSlide(index) {
            currentHeroSlide = index;
            updateHeroCarousel();
        }

        function startHeroTimer() {
            stopHeroTimer();
            heroTimer = setInterval(heroNextSlide, 5000);
        }

        function stopHeroTimer() {
            if (heroTimer) clearInterval(heroTimer);
        }

        document.addEventListener('DOMContentLoaded', () => {
            startHeroTimer();
            const container = document.getElementById('hero-carousel-container');
            if (container) {
                container.addEventListener('mouseenter', stopHeroTimer);
                container.addEventListener('mouseleave', startHeroTimer);
            }
        });
    </script>
</section>