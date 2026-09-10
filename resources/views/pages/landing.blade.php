@extends('layouts.app')

@section('content')
    <!-- Scroll Animation & Marquee Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap');

        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }

        .font-serif-title { font-family: 'Playfair Display', serif; }
        .font-sans-body { font-family: 'Montserrat', sans-serif; }

        @keyframes marquee-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        @keyframes marquee-right {
            0% { transform: translateX(-50%); }
            100% { transform: translateX(0); }
        }
        .animate-marquee-left {
            animation: marquee-left 40s linear infinite;
        }
        .animate-marquee-right {
            animation: marquee-right 40s linear infinite;
        }
    </style>

    <!-- Hero Section -->
    <x-hero />

    <!-- Why Minute Burger Section -->
    <section id="features" class="py-16 md:py-24 bg-stone-50 overflow-hidden relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal text-center max-w-3xl mx-auto mb-10 md:mb-16">
                <span class="text-orange-600 font-bold uppercase tracking-wider text-xs sm:text-sm">Why Minute Burger?</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-stone-900 mt-2 font-sans-body">The Minute Burger Advantage</h2>
                <p class="text-stone-600 mt-3 sm:mt-4 text-base sm:text-lg font-sans-body">Delivering delicious, high-quality, and budget-friendly burgers to Filipinos nationwide.</p>
            </div>

            <!-- Card Spread Container -->
            <div class="reveal delay-200 relative w-full max-w-5xl mx-auto h-[400px] sm:h-[450px] md:h-[500px] mt-8 sm:mt-12 mb-16 md:mb-20">
                <div id="feature-cards-container" class="relative w-full h-full">
                    
                    <x-feature-card 
                        title="Buy 1 Take 1 Everyday" 
                        description="Experience unparalleled value with our iconic Buy 1 Take 1 offerings, delivering double the satisfaction and premium flavor in every order."
                        icon='<svg class="w-8 h-8 sm:w-9 sm:h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
                    />
                    <x-feature-card 
                        title="24/7 Operations" 
                        description="Designed for the modern lifestyle, our round-the-clock operations ensure that your premium burger cravings are satisfied at any hour."
                        icon='<svg class="w-8 h-8 sm:w-9 sm:h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
                    />
                    <x-feature-card 
                        title="100% Quality Beef" 
                        description="Savor the rich, authentic taste of our 100% pure beef patties, expertly grilled and paired with custom seasonings on freshly baked artisan buns."
                        icon='<svg class="w-8 h-8 sm:w-9 sm:h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>'
                    />
                    <x-feature-card 
                        title="Fast & Fresh Service" 
                        description="We bridge the gap between quality and convenience, offering lightning-fast preparation without compromising the freshness of your meal."
                        icon='<svg class="w-8 h-8 sm:w-9 sm:h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>'
                    />
                    <x-feature-card 
                        title="Nationwide Network" 
                        description="With a robust network of hundreds of locations, exceptional culinary consistency and accessibility are always just around the corner."
                        icon='<svg class="w-8 h-8 sm:w-9 sm:h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>'
                    />
                    <x-feature-card 
                        title="Proven Franchise Model" 
                        description="Leverage decades of industry excellence with our comprehensive, turnkey franchise ecosystem designed to empower aspiring entrepreneurs."
                        icon='<svg class="w-8 h-8 sm:w-9 sm:h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v12a2 2 0 01-2 2m-6 0h6"></path></svg>'
                    />

                </div>

                <!-- Navigation Controls -->
                <div class="absolute -bottom-12 md:-bottom-16 left-0 right-0 flex justify-center gap-4 sm:gap-6 z-50">
                    <button onclick="prevFeature()" aria-label="Previous Feature" class="bg-white hover:bg-stone-50 text-stone-800 rounded-full w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center shadow-[0_10px_20px_rgba(0,0,0,0.1)] transition transform hover:-translate-x-1 hover:scale-105 border border-stone-100 focus:outline-none focus:ring-4 focus:ring-orange-200">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button onclick="nextFeature()" aria-label="Next Feature" class="bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white rounded-full w-12 h-12 sm:w-14 sm:h-14 flex items-center justify-center shadow-[0_10px_20px_rgba(245,158,11,0.3)] transition transform hover:translate-x-1 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-orange-200">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const featureCards = document.querySelectorAll('.feature-card');
                const totalFeatureCards = featureCards.length;
                let currentFeature = 0;

                // Adjust spread width responsively
                function getSpreadWidth() {
                    const width = window.innerWidth;
                    if (width < 400) return 40;
                    if (width < 768) return 60;
                    return 130;
                }
                
                const CURVE_DROP = 15;
                const ANGLE = 8;

                function updateFeatureStack() {
                    const SPREAD_WIDTH = getSpreadWidth();
                    featureCards.forEach((card, index) => {
                        let diff = index - currentFeature;
                        
                        if (diff > Math.floor(totalFeatureCards / 2)) {
                            diff -= totalFeatureCards;
                        } else if (diff < -Math.floor(totalFeatureCards / 2)) {
                            diff += totalFeatureCards;
                        }

                        const absDiff = Math.abs(diff);

                        card.style.zIndex = 20 - absDiff;
                        
                        if (absDiff === 0) {
                            card.style.transform = `translateX(0px) translateY(0px) rotate(0deg) scale(1)`;
                            card.style.opacity = 1;
                            card.style.pointerEvents = 'auto';
                            card.classList.add('shadow-[0_25px_50px_-12px_rgba(234,88,12,0.4)]', 'border-orange-300');
                            card.classList.remove('border-amber-200/80');
                        } else {
                            const translateX = diff * SPREAD_WIDTH;
                            const translateY = (absDiff * absDiff) * CURVE_DROP;
                            const rotate = diff * ANGLE;
                            const scale = 1 - (absDiff * 0.05);
                            
                            card.style.transform = `translateX(${translateX}px) translateY(${translateY}px) rotate(${rotate}deg) scale(${scale})`;
                            card.style.opacity = absDiff > 2 ? 0 : 1 - (absDiff * 0.2);
                            card.style.pointerEvents = 'none';
                            
                            card.classList.remove('shadow-[0_25px_50px_-12px_rgba(234,88,12,0.4)]', 'border-orange-300');
                            card.classList.add('border-amber-200/80');
                        }
                    });
                }

                window.nextFeature = function() {
                    currentFeature = (currentFeature + 1) % totalFeatureCards;
                    updateFeatureStack();
                };

                window.prevFeature = function() {
                    currentFeature = (currentFeature - 1 + totalFeatureCards) % totalFeatureCards;
                    updateFeatureStack();
                };

                featureCards.forEach((card, index) => {
                    card.addEventListener('click', () => {
                        if (currentFeature !== index) {
                            currentFeature = index;
                            updateFeatureStack();
                        }
                    });
                });

                updateFeatureStack();
                
                window.addEventListener('resize', () => {
                    updateFeatureStack();
                });
            });
        </script>
    </section>

    <!-- Product Showcase -->
    <section class="py-16 md:py-24 bg-amber-50/60 relative overflow-hidden" id="showcase-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:grid lg:grid-cols-2 lg:gap-20 items-center">
                
                <!-- Left Side: Card Carousel -->
                <div class="reveal mb-12 lg:mb-0 relative w-full max-w-md lg:max-w-lg mx-auto lg:mx-0 group px-2 sm:px-0">
                    <div class="overflow-hidden rounded-[2rem] sm:rounded-[2.5rem] bg-white shadow-[0_20px_50px_-12px_rgba(0,0,0,0.15)] border border-stone-100 relative">
                        <div id="carousel-track" class="flex transition-transform duration-700 ease-in-out w-full h-full items-stretch">
                            
                            <!-- Slide 1: Bacon Pizza Burger -->
                            <div class="w-full flex-shrink-0 flex flex-col">
                                <div class="h-64 sm:h-[22rem] relative bg-stone-100">
                                    <img src="{{ asset('assets/bacon-pizza-burger.jpg') }}" alt="Bacon Pizza Burger" class="w-full h-full object-cover">
                                </div>
                                <div class="p-6 sm:p-10 flex flex-col bg-white flex-grow">
                                    <h3 class="font-serif-title text-2xl sm:text-[1.65rem] font-bold text-stone-900 mb-3 sm:mb-4 leading-tight">The Legend Lives On</h3>
                                    <p class="font-sans-body text-stone-600 mb-6 sm:mb-8 leading-relaxed font-medium text-sm sm:text-[1.05rem]">
                                        The legend of Bacon Pizza Burger lives on! Order Bacon Pizza Burger and all your Buy One Take One favorites.
                                    </p>
                                    <a href="#" class="mt-auto text-stone-900 font-bold underline decoration-2 underline-offset-4 hover:text-orange-600 transition-colors w-max text-base sm:text-lg font-sans-body">Order Now</a>
                                </div>
                            </div>

                            <!-- Slide 2: Chicken Nacho Nuggets -->
                            <div class="w-full flex-shrink-0 flex flex-col">
                                <div class="h-64 sm:h-[22rem] relative bg-stone-100">
                                    <img src="{{ asset('assets/nuggets.jpg') }}" alt="Chicken Nacho Nuggets" class="w-full h-full object-cover">
                                </div>
                                <div class="p-6 sm:p-10 flex flex-col bg-white flex-grow">
                                    <h3 class="font-serif-title text-2xl sm:text-[1.65rem] font-bold text-stone-900 mb-3 sm:mb-4 leading-tight">Crunchy, Juicy, Flavorful</h3>
                                    <p class="font-sans-body text-stone-600 mb-6 sm:mb-8 leading-relaxed font-medium text-sm sm:text-[1.05rem]">
                                        Your sulit sagot sa GUTOMoments is here! Kung ang cravings mo ay something crunchy, juicy, flavorful at gawa sa tunay na chicken, Chicken Nacho Nuggets ang para sa’yo. Available only in select stores.
                                    </p>
                                    <a href="#" class="mt-auto text-stone-900 font-bold underline decoration-2 underline-offset-4 hover:text-orange-600 transition-colors w-max text-base sm:text-lg font-sans-body">Order Now</a>
                                </div>
                            </div>

                            <!-- Slide 3: Pork Sisig Burger -->
                            <div class="w-full flex-shrink-0 flex flex-col">
                                <div class="h-64 sm:h-[22rem] relative bg-stone-100">
                                    <img src="{{ asset('assets/sisig.jpg') }}" alt="Pork Sisig Burger" class="w-full h-full object-cover">
                                </div>
                                <div class="p-6 sm:p-10 flex flex-col bg-white flex-grow">
                                    <h3 class="font-serif-title text-2xl sm:text-[1.65rem] font-bold text-stone-900 mb-3 sm:mb-4 leading-tight">The Ultimate Comeback</h3>
                                    <p class="font-sans-body text-stone-600 mb-6 sm:mb-8 leading-relaxed font-medium text-sm sm:text-[1.05rem]">
                                        May pa-comeback ang TOTGA nating Pork Sisig Burger! Single ka man or taken on this day, solb ang GUTOMoment mo sa Minute Burger. Order na!
                                    </p>
                                    <a href="#" class="mt-auto text-stone-900 font-bold underline decoration-2 underline-offset-4 hover:text-orange-600 transition-colors w-max text-base sm:text-lg font-sans-body">Order Now</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Left/Right Arrow Controls: Positioned safely to not cause horizontal scroll on mobile -->
                    <button onclick="prevSlide()" aria-label="Previous Product" class="absolute left-0 sm:-left-4 md:-left-6 top-[40%] bg-white hover:bg-stone-50 text-stone-800 rounded-full w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center shadow-[0_10px_20px_rgba(0,0,0,0.15)] transition transform hover:scale-105 border border-stone-100 z-10">
                        <svg class="w-5 h-5 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button onclick="nextSlide()" aria-label="Next Product" class="absolute right-0 sm:-right-4 md:-right-6 top-[40%] bg-white hover:bg-stone-50 text-stone-800 rounded-full w-10 h-10 sm:w-14 sm:h-14 flex items-center justify-center shadow-[0_10px_20px_rgba(0,0,0,0.15)] transition transform hover:scale-105 border border-stone-100 z-10">
                        <svg class="w-5 h-5 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>

                <!-- Right Side: Animated Descriptions -->
                <div class="reveal delay-200 flex flex-col justify-center pl-0 lg:pl-8">
                    <span class="text-orange-600 font-bold uppercase tracking-wider text-xs sm:text-sm font-sans-body text-center lg:text-left">Featured Menu</span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-stone-900 mt-2 mb-8 lg:mb-10 leading-tight font-sans-body text-center lg:text-left">Craving Satisfied. <br class="hidden sm:block"> Every Single Time.</h2>
                    
                    <!-- Animated Indicator List -->
                    <div class="space-y-4 sm:space-y-6" id="carousel-indicators">
                        
                        <!-- Item 1 -->
                        <div class="cursor-pointer border-l-4 pl-4 sm:pl-5 transition-all duration-500 border-orange-500 opacity-100 translate-x-0" onclick="changeSlide(0)">
                            <h4 class="font-bold text-stone-900 text-lg sm:text-xl md:text-2xl transition-colors font-serif-title tracking-wide">Bacon Pizza Burger</h4>
                            <div class="anim-desc overflow-hidden transition-all duration-500 max-h-40 opacity-100 mt-2 sm:mt-3">
                                <p class="text-stone-600 text-sm sm:text-base leading-relaxed font-sans-body">
                                    Our legendary premium burger combination is here to stay. Indulge in the perfect fusion of savory bacon and rich pizza flavors.
                                </p>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="cursor-pointer border-l-4 pl-4 sm:pl-5 transition-all duration-500 border-stone-200 opacity-50 hover:opacity-80 -translate-x-2 sm:-translate-x-3" onclick="changeSlide(1)">
                            <h4 class="font-bold text-stone-900 text-lg sm:text-xl md:text-2xl transition-colors font-serif-title tracking-wide">Chicken Nacho Nuggets</h4>
                            <div class="anim-desc overflow-hidden transition-all duration-500 max-h-0 opacity-0 mt-0">
                                <p class="text-stone-600 text-sm sm:text-base leading-relaxed font-sans-body">
                                    Made from real chicken—crunchy on the outside, juicy on the inside. The perfect snack to solve your sudden GUTOMoments.
                                </p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="cursor-pointer border-l-4 pl-4 sm:pl-5 transition-all duration-500 border-stone-200 opacity-50 hover:opacity-80 -translate-x-2 sm:-translate-x-3" onclick="changeSlide(2)">
                            <h4 class="font-bold text-stone-900 text-lg sm:text-xl md:text-2xl transition-colors font-serif-title tracking-wide">Pork Sisig Burger</h4>
                            <div class="anim-desc overflow-hidden transition-all duration-500 max-h-0 opacity-0 mt-0">
                                <p class="text-stone-600 text-sm sm:text-base leading-relaxed font-sans-body">
                                    The ultimate "TOTGA" comeback! Experience the classic Filipino favorite uniquely packed into a convenient, mouth-watering burger.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <script>
            let currentSlide = 0;
            const totalSlides = 3;

            function updateCarousel() {
                const track = document.getElementById('carousel-track');
                track.style.transform = `translateX(-${currentSlide * 100}%)`;

                const indicators = document.getElementById('carousel-indicators').children;
                for (let i = 0; i < indicators.length; i++) {
                    const block = indicators[i];
                    const descContainer = block.querySelector('.anim-desc');
                    const isMobile = window.innerWidth < 640;
                    
                    if (i === currentSlide) {
                        block.classList.add('border-orange-500', 'opacity-100', 'translate-x-0');
                        block.classList.remove('border-stone-200', 'opacity-50', '-translate-x-2', '-translate-x-3');
                        
                        descContainer.style.maxHeight = '200px';
                        descContainer.style.opacity = '1';
                        descContainer.style.marginTop = isMobile ? '0.5rem' : '0.75rem';
                    } else {
                        block.classList.remove('border-orange-500', 'opacity-100', 'translate-x-0');
                        block.classList.add('border-stone-200', 'opacity-50', isMobile ? '-translate-x-2' : '-translate-x-3');
                        
                        descContainer.style.maxHeight = '0px';
                        descContainer.style.opacity = '0';
                        descContainer.style.marginTop = '0px';
                    }
                }
            }

            function changeSlide(index) {
                currentSlide = index;
                updateCarousel();
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateCarousel();
            }
        </script>
    </section>

    <!-- Pricing Section (Franchise Packages) -->
    <section id="franchise" class="py-16 md:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal text-center max-w-3xl mx-auto mb-12 md:mb-16">
                <span class="text-orange-600 font-bold uppercase tracking-wider text-xs sm:text-sm font-sans-body">Franchise Opportunities</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-stone-900 mt-2 font-sans-body">Investment Packages</h2>
                <p class="text-base sm:text-lg text-stone-600 mt-3 sm:mt-4 font-sans-body">Start your journey as a business owner with our flexible, high-yield franchise tiers.</p>
            </div>

            <!-- Changed to md:grid-cols-2 lg:grid-cols-3 to prevent squishing on tablets -->
            <div class="reveal delay-200 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 items-stretch max-w-6xl mx-auto">
                <x-pricing-card 
                    plan="I Type" 
                    price="350,000" 
                    image="{{ asset('assets/I.png') }}"
                    :features="[
                        'Ideal for high foot-traffic spots',
                        'Basic Kitchen Equipment Set',
                        'Initial Crew Training Included',
                        '2-Year Franchise Agreement',
                        'Marketing & Signage Support'
                    ]" 
                />
                
                <x-pricing-card 
                    plan="L Type" 
                    price="750,000" 
                    image="{{ asset('assets/L.png') }}"
                    :isPopular="true"
                    :features="[
                        'Full 24/7 Store Layout',
                        'Complete Commercial Equipment',
                        'Full Crew & Management Training',
                        'Grand Opening Marketing Support',
                        '5-Year Renewable Agreement',
                        'POS & Inventory Software'
                    ]" 
                />

                <x-pricing-card 
                    plan="U Type" 
                    price="1,200,000" 
                    image="{{ asset('assets/U.png') }}"
                    :features="[
                        'High-Volume Commercial Concept',
                        'Multi-Counter & Drive-Thru Ready',
                        'Dedicated Account Executive',
                        'Priority Supply Chain Delivery',
                        'Custom Store Design & Build',
                        '7-Year Franchise Agreement'
                    ]" 
                />
            </div>
        </div>
        
        <!-- Pricing Card Interaction Script -->
        <script>
            function selectPricingCard(selectedCard) {
                const cards = document.querySelectorAll('.pricing-card');
                
                cards.forEach(card => {
                    const badge = card.querySelector('.popular-badge');
                    const btn = card.querySelector('.apply-btn');
                    
                    if (card === selectedCard) {
                        card.classList.add('border-orange-500', 'shadow-2xl', 'lg:scale-105', 'z-10');
                        card.classList.remove('border-amber-200', 'shadow-sm');
                        
                        if (badge) {
                            badge.classList.remove('opacity-0', 'pointer-events-none');
                            badge.classList.add('opacity-100');
                        }
                        
                        if (btn) {
                            btn.classList.add('bg-orange-600', 'text-white');
                            btn.classList.remove('bg-transparent', 'text-orange-600');
                        }
                    } else {
                        card.classList.remove('border-orange-500', 'shadow-2xl', 'lg:scale-105', 'z-10');
                        card.classList.add('border-amber-200', 'shadow-sm');
                        
                        if (badge) {
                            badge.classList.add('opacity-0', 'pointer-events-none');
                            badge.classList.remove('opacity-100');
                        }
                        
                        if (btn) {
                            btn.classList.remove('bg-orange-600', 'text-white');
                            btn.classList.add('bg-transparent', 'text-orange-600');
                        }
                    }
                });
            }
        </script>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 md:py-24 bg-orange-50 relative overflow-hidden">
        
        <!-- Background Looping Images Container (Filled Vertically using justify-evenly and 5 rows for mobile height coverage) -->
        <div class="absolute inset-0 z-0 flex flex-col justify-evenly gap-4 sm:gap-6 overflow-hidden opacity-50 pointer-events-none mix-blend-multiply py-6 sm:py-10">
            
            <!-- Row 1: Left Marquee -->
            <div class="flex w-[200%] animate-marquee-left">
                <div class="flex w-1/2 justify-around items-center space-x-4 sm:space-x-6 px-2 sm:px-4">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-2.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                </div>
                <!-- Duplicate for seamless loop -->
                <div class="flex w-1/2 justify-around items-center space-x-4 sm:space-x-6 px-2 sm:px-4">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-2.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                </div>
            </div>

            <!-- Row 2: Right Marquee -->
            <div class="flex w-[200%] animate-marquee-right" style="animation-duration: 45s;">
                <div class="flex w-1/2 justify-around items-center space-x-4 sm:space-x-6 px-2 sm:px-4">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-2.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                </div>
                <!-- Duplicate for seamless loop -->
                <div class="flex w-1/2 justify-around items-center space-x-4 sm:space-x-6 px-2 sm:px-4">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-2.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                </div>
            </div>

            <!-- Row 3: Left Marquee (Offset variation) -->
            <div class="flex w-[200%] animate-marquee-left" style="animation-duration: 35s;">
                <div class="flex w-1/2 justify-around items-center space-x-4 sm:space-x-6 px-2 sm:px-4">
                    <img src="{{ asset('assets/pic-2.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-2.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                </div>
                <!-- Duplicate for seamless loop -->
                <div class="flex w-1/2 justify-around items-center space-x-4 sm:space-x-6 px-2 sm:px-4">
                    <img src="{{ asset('assets/pic-2.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-2.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                </div>
            </div>
            
            <!-- Row 4: Right Marquee (Ensures coverage for stacked mobile layout height) -->
            <div class="flex w-[200%] animate-marquee-right lg:hidden" style="animation-duration: 40s;">
                <div class="flex w-1/2 justify-around items-center space-x-4 sm:space-x-6 px-2 sm:px-4">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-2.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                </div>
                <!-- Duplicate for seamless loop -->
                <div class="flex w-1/2 justify-around items-center space-x-4 sm:space-x-6 px-2 sm:px-4">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-2.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                </div>
            </div>
            
            <!-- Row 5: Left Marquee (Ensures coverage for stacked mobile layout height) -->
            <div class="flex w-[200%] animate-marquee-left lg:hidden" style="animation-duration: 38s;">
                <div class="flex w-1/2 justify-around items-center space-x-4 sm:space-x-6 px-2 sm:px-4">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-2.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                </div>
                <!-- Duplicate for seamless loop -->
                <div class="flex w-1/2 justify-around items-center space-x-4 sm:space-x-6 px-2 sm:px-4">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-2.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-1.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                    <img src="{{ asset('assets/pic-3.png') }}" class="h-28 sm:h-32 md:h-48 w-auto rounded-2xl md:rounded-3xl object-cover shadow-sm" alt="">
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Wrapped the heading text inside a solid white background card -->
            <div class="reveal text-center max-w-2xl mx-auto mb-10 md:mb-16 relative z-10">
                <div class="bg-white rounded-2xl md:rounded-3xl p-5 md:p-6 shadow-sm border border-amber-100 inline-block mx-4 sm:mx-0">
                    <span class="text-orange-600 font-bold uppercase tracking-wider text-xs sm:text-sm font-sans-body block mb-2">Success Stories</span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-stone-900 font-sans-body leading-tight">What Our Franchisees Say</h2>
                </div>
            </div>

            <div class="reveal delay-200 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 items-stretch">
                <!-- Testimonial 1 -->
                <x-testimonial-card 
                    name="Mr. Lou Penaflor"
                    position="Franchisee since 2022 <br> with 4 Minute Burger Stores"
                    review="Minute Burger is a big favorite in our community! Our affordable, delicious, and clean burgers, especially the Buy 1, Take 1 deal, are a hit with families and friends. Since we're open 24/7, we're always ready to satisfy burger cravings, day or night. People love our burgers for their great value and variety and appreciate our friendly service and convenient locations. As franchise owners, we love connecting with the community. Minute Burger supports us in local events and promotions, helping us build strong customer relationships. We enjoy participating in local fiestas, rewarding loyal customers, and listening to feedback to keep improving."
                    image="https://placehold.co/100x100/f59e0b/ffffff?text=LP"
                />
                
                <!-- Testimonial 2 -->
                <x-testimonial-card 
                    name="Denny Baldovi"
                    position="Franchisee since 2023 <br> 1 Minute Burger Store"
                    review="I chose Minute Burger because it's a stable, recognized brand that offers a solid foundation and growth potential. Franchising with Minute Burger made sense because it comes with an established name, proven marketing, and reliable systems, which reduce the challenges of starting a business from scratch. The initial training was thorough, covering all aspects of management and quality standards, and ongoing support is always available for any questions or issues. The most helpful support has been in marketing—Minute Burger provides well-developed campaigns and materials, making it easier to attract and retain customers. Minute Burger goes above and beyond to make sure we have the tools and support to succeed."
                    image="https://placehold.co/100x100/ea580c/ffffff?text=DB"
                />
                
                <!-- Testimonial 3 -->
                <x-testimonial-card 
                    name="Heinrich P. Apilan"
                    position="Franchisee since 2021 <br> 8 Minute Burger Stores"
                    review="Running a proven franchise with strong brand recognition offers financial freedom, flexibility to focus on life's priorities like family, and the opportunity to become your own boss with the franchisor's support. From opening the first store, the goal has always been to expand as much as possible while inspiring future franchisees. With a dedicated R&D team driving continuous product innovation, there is optimism for growing customer loyalty and providing diverse offerings in the future. If you're really up to becoming your own boss, then set aside the doubt, let them(the franchisor) help you, get your hands dirty, and bring it on."
                    image="https://placehold.co/100x100/78350f/ffffff?text=HA"
                />
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="reveal py-16 md:py-20 bg-gradient-to-r from-orange-600 to-amber-500 text-white relative z-10">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black mb-4 sm:mb-6 font-sans-body text-white leading-tight">Own Your Minute Burger Branch Today!</h2>
            <p class="text-lg sm:text-xl text-white mb-8 sm:mb-10 leading-relaxed font-sans-body">
                Take the first step toward business ownership. Register for our upcoming free franchise orientation or contact our sales team.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <x-button type="secondary" href="#register" class="w-full sm:w-auto px-6 sm:px-8 py-3.5 sm:py-4 text-base sm:text-lg">
                    Register for Free Seminar
                </x-button>
                <x-button type="outline" href="#contact" class="w-full sm:w-auto border-white text-white hover:bg-white hover:text-orange-600 px-6 sm:px-8 py-3.5 sm:py-4 text-base sm:text-lg">
                    Contact Sales Team
                </x-button>
            </div>
            <p class="text-white mt-6 text-xs sm:text-sm font-sans-body">Join over 600+ successful store locations nationwide.</p>
        </div>
    </section>

    <!-- Scroll Reveal Initialization Script -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const reveals = document.querySelectorAll(".reveal");
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                    } else {
                        entry.target.classList.remove("active");
                    }
                });
            }, {
                threshold: 0.15 
            });

            reveals.forEach((reveal) => {
                observer.observe(reveal);
            });
        });
    </script>
@endsection