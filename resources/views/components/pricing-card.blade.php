@props(['plan', 'price', 'features', 'isPopular' => false, 'image' => null])

<div onclick="selectPricingCard(this)" class="pricing-card cursor-pointer relative flex flex-col bg-white rounded-[2rem] p-6 sm:p-8 border transition-all duration-300 {{ $isPopular ? 'border-orange-500 shadow-2xl lg:scale-105 z-10' : 'border-amber-200 shadow-sm' }}">
    
    <!-- Most Popular Badge -->
    <div class="popular-badge absolute top-0 right-0 transform translate-x-1 sm:translate-x-2 -translate-y-1/2 transition-opacity duration-300 {{ $isPopular ? 'opacity-100' : 'opacity-0 pointer-events-none' }}">
        <span class="bg-orange-500 text-white text-[10px] sm:text-xs font-bold uppercase tracking-wider py-1 px-3 sm:px-4 rounded-full shadow-md">Most Popular</span>
    </div>

    <h3 class="text-xl sm:text-2xl font-black text-stone-900 mb-2 uppercase tracking-wide">{{ $plan }}</h3>
    <p class="text-stone-500 text-xs sm:text-sm mb-4">Estimated Investment</p>
    
    @if($image)
        <img src="{{ $image }}" alt="{{ $plan }} Image" class="w-full h-auto object-contain mb-4">
    @endif

    <div class="mb-4 sm:mb-6">
        <span class="text-2xl sm:text-3xl font-extrabold text-orange-600">₱{{ $price }}</span>
    </div>
    
    <ul class="flex-1 space-y-3 sm:space-y-4 mb-6 sm:mb-8 pointer-events-none">
        @foreach($features as $feature)
            <li class="flex items-start">
                <svg class="h-5 w-5 sm:h-6 sm:w-6 text-orange-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
                <span class="text-stone-600 text-sm sm:text-base font-medium">{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <!-- Dynamic Button handled by JS -->
    <div class="mt-auto pointer-events-none">
        <a href="#apply" class="apply-btn block w-full text-center py-2.5 sm:py-3 px-4 sm:px-6 rounded-xl text-sm sm:text-base font-bold border-2 border-orange-600 transition-colors duration-300 pointer-events-auto {{ $isPopular ? 'bg-orange-600 text-white hover:bg-orange-700' : 'bg-transparent text-orange-600 hover:bg-orange-50' }}">
            Apply Now
        </a>
    </div>
</div>