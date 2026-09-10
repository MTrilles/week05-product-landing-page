@props(['type' => 'primary', 'href' => '#'])

@php
    $baseClasses = 'inline-flex items-center justify-center px-6 py-3 rounded-full font-bold transition-all duration-300 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2';$variants = [
        'primary' => 'bg-orange-500 text-white hover:bg-orange-600 focus:ring-orange-500',
        'secondary' => 'bg-amber-400 text-stone-900 hover:bg-amber-500 focus:ring-amber-400',
        'outline' => 'bg-transparent text-orange-600 border-2 border-orange-500 hover:bg-orange-50 focus:ring-orange-500'
    ];
    $classes =$baseClasses . ' ' . $variants[$type];
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' =>$classes]) }}>
    {{ $slot }}
</a>