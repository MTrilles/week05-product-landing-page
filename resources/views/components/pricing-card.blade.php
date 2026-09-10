@props(['plan', 'price', 'features', 'isPopular' => false])

<div class="relative flex flex-col bg-white rounded-3xl p-8 border {{ $isPopular ? 'border-orange-500 shadow-2xl scale-105 z-10' : 'border-amber-200 shadow-sm' }} hover:shadow-xl transition duration-300">
    
    @if($isPopular)
        <div class="absolute top-0 right-0 transform translate-x-2 -translate-y-1/2">
            <span class="bg-orange-500 text-white text-xs font-bold uppercase tracking-wider py-1 px-4 rounded-full">Most Popular</span>
        </div>
    @endif

    <h3 class="text-2xl font-black text-stone-900 mb-2 uppercase tracking-wide">{{ $plan }}</h3>
    <p class="text-stone-500 text-sm mb-4">Estimated Investment</p>
    <div class="mb-6">
        <span class="text-3xl font-extrabold text-orange-600">₱{{ $price }}</span>
    </div>
    
    <ul class="flex-1 space-y-4 mb-8">
        @foreach($features as $feature)
            <li class="flex items-start">
                <svg class="h-6 w-6 text-orange-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
                <span class="text-stone-600 font-medium">{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <x-button :type="$isPopular ? 'primary' : 'outline'" href="#apply" class="w-full">
        Apply Now
    </x-button>
</div>