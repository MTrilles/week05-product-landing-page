@props(['name', 'position', 'review', 'image'])

<div class="bg-white rounded-3xl p-8 shadow-sm border border-amber-100 hover:shadow-md transition relative z-10 h-full flex flex-col">
    <div class="flex items-center gap-1 mb-4 text-orange-400">
        @for($i=0; $i<5; $i++)
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
        @endfor
    </div>
    <p class="text-stone-700 italic mb-8 font-medium text-sm leading-relaxed flex-grow">"{{ $review }}"</p>
    <div class="flex items-center gap-4 mt-auto">
        <img src="{{ $image }}" alt="{{ $name }}" class="w-14 h-14 rounded-full object-cover border-2 border-orange-200">
        <div>
            <h4 class="font-bold text-stone-900">{{ $name }}</h4>
            <p class="text-xs text-orange-600 font-semibold leading-snug">{!! $position !!}</p>
        </div>
    </div>
</div>