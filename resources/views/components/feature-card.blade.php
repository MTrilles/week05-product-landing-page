@props(['title', 'description', 'icon'])

<div class="feature-card absolute left-0 right-0 mx-auto w-[280px] sm:w-[340px] md:w-[380px] h-full bg-gradient-to-br from-white via-amber-50 to-orange-50 p-6 sm:p-8 md:p-10 rounded-[2rem] sm:rounded-[2.5rem] shadow-[0_15px_40px_-12px_rgba(0,0,0,0.15)] border border-amber-200/80 transition-all duration-700 ease-out text-center flex flex-col justify-center origin-bottom cursor-pointer select-none">
    <div class="w-16 h-16 sm:w-20 sm:h-20 mx-auto inline-flex items-center justify-center rounded-2xl bg-gradient-to-tr from-orange-500 to-amber-400 text-white mb-4 sm:mb-6 shadow-md transform -rotate-3 transition-transform hover:rotate-0 duration-300">
        {!! $icon !!}
    </div>
    <h3 class="text-xl sm:text-2xl font-black text-stone-900 mb-3 sm:mb-4 tracking-tight">{{ $title }}</h3>
    <p class="text-stone-600 leading-relaxed text-sm sm:text-base md:text-lg font-medium">
        {{ $description }}
    </p>
</div>