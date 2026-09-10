@props(['title', 'description', 'icon'])

<div class="bg-white p-6 rounded-2xl shadow-sm border border-amber-100 hover:shadow-lg hover:border-orange-200 hover:-translate-y-1 transition-all duration-300 text-center">
    <div class="w-16 h-16 mx-auto inline-flex items-center justify-center rounded-full bg-amber-100 text-orange-500 mb-4">
        {!! $icon !!}
    </div>
    <h3 class="text-xl font-bold text-stone-900 mb-2">{{ $title }}</h3>
    <p class="text-stone-600 leading-relaxed">
        {{ $description }}
    </p>
</div>