@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
    <x-hero />

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-orange-600 font-bold uppercase tracking-wider text-sm">Why Choose Us</span>
                <h2 class="text-3xl lg:text-4xl font-black text-stone-900 mt-2">The Minute Burger Advantage</h2>
                <p class="text-stone-600 mt-4 text-lg">Delivering delicious, high-quality, and budget-friendly burgers to Filipinos nationwide.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-feature-card 
                    title="Buy 1 Take 1 Everyday" 
                    description="Get double the flavor on every order. Our iconic Buy 1 Take 1 deals ensure maximum value for every peso."
                    icon='<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
                />
                <x-feature-card 
                    title="24/7 Operations" 
                    description="Satisfy your burger cravings at any hour. Most of our branches operate round-the-clock for day and night owls."
                    icon='<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
                />
                <x-feature-card 
                    title="100% Quality Beef" 
                    description="We serve pure beef patties grilled to perfection with our custom seasoning and fresh, soft buns."
                    icon='<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>'
                />
                <x-feature-card 
                    title="Fast & Fresh Service" 
                    description="Cooked fresh upon ordering with lightning-fast prep times so you never have to wait long."
                    icon='<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>'
                />
                <x-feature-card 
                    title="Nationwide Network" 
                    description="With hundreds of stores across the country, a Minute Burger branch is always just around the corner."
                    icon='<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>'
                />
                <x-feature-card 
                    title="Proven Franchise Model" 
                    description="Backed by decades of success, offering a turnkey business package for aspiring entrepreneurs."
                    icon='<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v12a2 2 0 01-2 2m-6 0h6"></path></svg>'
                />
            </div>
        </div>
    </section>

    <!-- Product Showcase (Carousel on Left, Animated Text on Right) -->
    <section class="py-24 bg-amber-50/60 relative overflow-hidden" id="showcase-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-20 items-center">
                
                <!-- Left Side: Card Carousel -->
                <div class="mb-16 lg:mb-0 relative w-full max-w-sm mx-auto lg:mx-0 group">
                    <div class="overflow-hidden rounded-[2.5rem] bg-white shadow-[0_20px_50px_-12px_rgba(0,0,0,0.15)] border border-stone-100 relative">
                        
                        <!-- Sliding Track -->
                        <div id="carousel-track" class="flex transition-transform duration-700 ease-in-out w-full h-full">
                            
                            <!-- Slide 1 (Matches Reference Image) -->
                            <div class="w-full flex-shrink-0 flex flex-col">
                                <div class="h-64 relative bg-red-900">
                                    <img src="https://placehold.co/600x400/7f1d1d/ffffff?text=Red+Hot+Chicken+Burger" alt="Red Hot Chicken" class="w-full h-full object-cover">
                                </div>
                                <div class="p-8 flex flex-col bg-white">
                                    <h3 class="text-[1.35rem] font-bold text-stone-900 mb-4 leading-tight">Tastes That Lead: How Minute Burger Stays Ahead in QSR</h3>
                                    <p class="text-stone-700 mb-8 leading-relaxed font-medium">Discover how Minute Burger's product innovation empowers franchisees and keeps customers coming back for more.</p>
                                    <a href="#" class="text-stone-900 font-bold underline decoration-2 underline-offset-4 hover:text-orange-600 transition-colors w-max text-lg">Read More</a>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="w-full flex-shrink-0 flex flex-col">
                                <div class="h-64 relative bg-amber-500">
                                    <img src="https://placehold.co/600x400/f59e0b/ffffff?text=Classic+Buy+1+Take+1" alt="Classic Burger" class="w-full h-full object-cover">
                                </div>
                                <div class="p-8 flex flex-col bg-white">
                                    <h3 class="text-[1.35rem] font-bold text-stone-900 mb-4 leading-tight">The Classics: Building a Legacy One Bite at a Time</h3>
                                    <p class="text-stone-700 mb-8 leading-relaxed font-medium">Learn why our signature Buy 1 Take 1 pairings remain the undisputed champion for millions of Filipinos daily.</p>
                                    <a href="#" class="text-stone-900 font-bold underline decoration-2 underline-offset-4 hover:text-orange-600 transition-colors w-max text-lg">Read More</a>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="w-full flex-shrink-0 flex flex-col">
                                <div class="h-64 relative bg-stone-800">
                                    <img src="https://placehold.co/600x400/292524/ffffff?text=Limited+Time+Offers" alt="Limited Time Offers" class="w-full h-full object-cover">
                                </div>
                                <div class="p-8 flex flex-col bg-white">
                                    <h3 class="text-[1.35rem] font-bold text-stone-900 mb-4 leading-tight">Driving Excitement with Limited Time Offers (LTOs)</h3>
                                    <p class="text-stone-700 mb-8 leading-relaxed font-medium">Explore how our seasonal drops create massive hype, drive foot traffic, and maximize store profitability.</p>
                                    <a href="#" class="text-stone-900 font-bold underline decoration-2 underline-offset-4 hover:text-orange-600 transition-colors w-max text-lg">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Left/Right Arrow Controls -->
                    <button onclick="prevSlide()" class="absolute -left-5 top-[35%] bg-white hover:bg-stone-50 text-stone-800 rounded-full w-12 h-12 flex items-center justify-center shadow-lg transition transform hover:scale-105 border border-stone-100 z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button onclick="nextSlide()" class="absolute -right-5 top-[35%] bg-white hover:bg-stone-50 text-stone-800 rounded-full w-12 h-12 flex items-center justify-center shadow-lg transition transform hover:scale-105 border border-stone-100 z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>

                <!-- Right Side: Animated Descriptions -->
                <div class="flex flex-col justify-center pl-0 lg:pl-8">
                    <span class="text-orange-600 font-bold uppercase tracking-wider text-sm">Product Strategy</span>
                    <h2 class="text-3xl lg:text-5xl font-black text-stone-900 mt-2 mb-10 leading-tight">Always Craveable. <br> Always Ahead.</h2>
                    
                    <!-- Animated Indicator List -->
                    <div class="space-y-6" id="carousel-indicators">
                        
                        <!-- Item 1 -->
                        <div class="cursor-pointer border-l-4 pl-5 transition-all duration-500 border-orange-500 opacity-100 translate-x-0" onclick="changeSlide(0)">
                            <h4 class="font-bold text-stone-900 text-xl md:text-2xl transition-colors">Trend-Setting Flavors</h4>
                            <div class="anim-desc overflow-hidden transition-all duration-500 max-h-40 opacity-100 mt-3">
                                <p class="text-stone-600 text-base leading-relaxed">
                                    Our R&D team aggressively studies market trends to develop bold, new combinations—like our spicy and cheesy variants. This continuous innovation ensures your menu never gets stale and your sales keep climbing.
                                </p>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="cursor-pointer border-l-4 pl-5 transition-all duration-500 border-stone-200 opacity-50 hover:opacity-80 -translate-x-3" onclick="changeSlide(1)">
                            <h4 class="font-bold text-stone-900 text-xl md:text-2xl transition-colors">The Classic Staples</h4>
                            <div class="anim-desc overflow-hidden transition-all duration-500 max-h-0 opacity-0 mt-0">
                                <p class="text-stone-600 text-base leading-relaxed">
                                    While we innovate, we never forget our roots. Our signature recipes and high-quality beef patties form the reliable foundation of steady, daily revenue for our franchisees across the country.
                                </p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="cursor-pointer border-l-4 pl-5 transition-all duration-500 border-stone-200 opacity-50 hover:opacity-80 -translate-x-3" onclick="changeSlide(2)">
                            <h4 class="font-bold text-stone-900 text-xl md:text-2xl transition-colors">Strategic Exclusives</h4>
                            <div class="anim-desc overflow-hidden transition-all duration-500 max-h-0 opacity-0 mt-0">
                                <p class="text-stone-600 text-base leading-relaxed">
                                    We regularly introduce Limited Time Offers backed by high-impact marketing campaigns. These strategic drops create urgency, boost brand visibility, and attract entirely new demographics to your store.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Vanilla JavaScript for Syncing Carousel & Right-Side Animations -->
        <script>
            let currentSlide = 0;
            const totalSlides = 3;

            function updateCarousel() {
                // 1. Move the left-side image/card track
                const track = document.getElementById('carousel-track');
                track.style.transform = `translateX(-${currentSlide * 100}%)`;

                // 2. Animate the right-side text accordion
                const indicators = document.getElementById('carousel-indicators').children;
                for (let i = 0; i < indicators.length; i++) {
                    const block = indicators[i];
                    const descContainer = block.querySelector('.anim-desc');
                    
                    if (i === currentSlide) {
                        // Active State
                        block.classList.add('border-orange-500', 'opacity-100', 'translate-x-0');
                        block.classList.remove('border-stone-200', 'opacity-50', '-translate-x-3');
                        
                        descContainer.style.maxHeight = '200px';
                        descContainer.style.opacity = '1';
                        descContainer.style.marginTop = '0.75rem';
                    } else {
                        // Inactive State
                        block.classList.remove('border-orange-500', 'opacity-100', 'translate-x-0');
                        block.classList.add('border-stone-200', 'opacity-50', '-translate-x-3');
                        
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
    <section id="franchise" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-orange-600 font-bold uppercase tracking-wider text-sm">Franchise Opportunities</span>
                <h2 class="text-3xl lg:text-4xl font-black text-stone-900 mt-2">Investment Packages</h2>
                <p class="text-lg text-stone-600 mt-4">Start your journey as a business owner with our flexible, high-yield franchise tiers.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch max-w-6xl mx-auto">
                <x-pricing-card 
                    plan="Express Kiosk" 
                    price="350,000" 
                    :features="[
                        'Ideal for high foot-traffic spots',
                        'Basic Kitchen Equipment Set',
                        'Initial Crew Training Included',
                        '2-Year Franchise Agreement',
                        'Marketing & Signage Support'
                    ]" 
                />
                
                <x-pricing-card 
                    plan="Standard Store" 
                    price="750,000" 
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
                    plan="Drive-Thru / Hub" 
                    price="1,200,000" 
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
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-amber-50/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-orange-600 font-bold uppercase tracking-wider text-sm">Success Stories</span>
                <h2 class="text-3xl lg:text-4xl font-black text-stone-900 mt-2">What Our Franchisees Say</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <x-testimonial-card 
                    name="Ricardo Santos"
                    position="Franchisee (Manila)"
                    review="Investing in Minute Burger was the best decision for my family. The Buy 1 Take 1 model keeps customers coming back non-stop!"
                    image="https://placehold.co/100x100/f59e0b/ffffff?text=RS"
                />
                <x-testimonial-card 
                    name="Maria Clara Cruz"
                    position="Franchisee (Cebu City)"
                    review="The system is so easy to manage. The corporate team provided complete support from crew training to site selection."
                    image="https://placehold.co/100x100/ea580c/ffffff?text=MC"
                />
                <x-testimonial-card 
                    name="Jonathan Tan"
                    position="Multi-Unit Owner (Davao)"
                    review="Fast ROI and reliable supply chain. Even during tough economic times, Minute Burger stays strong and profitable."
                    image="https://placehold.co/100x100/78350f/ffffff?text=JT"
                />
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="py-20 bg-gradient-to-r from-orange-600 to-amber-500 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl lg:text-5xl font-black mb-6">Own Your Minute Burger Branch Today!</h2>
            <p class="text-xl text-amber-100 mb-10 leading-relaxed">
                Take the first step toward business ownership. Register for our upcoming free franchise orientation or contact our sales team.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <x-button type="secondary" href="#register" class="w-full sm:w-auto px-8 py-4 text-lg">
                    Register for Free Seminar
                </x-button>
                <x-button type="outline" href="#contact" class="w-full sm:w-auto border-white text-white hover:bg-white hover:text-orange-600 px-8 py-4 text-lg">
                    Contact Sales Team
                </x-button>
            </div>
            <p class="text-amber-100 mt-6 text-sm">Join over 600+ successful store locations nationwide.</p>
        </div>
    </section>

@endsection