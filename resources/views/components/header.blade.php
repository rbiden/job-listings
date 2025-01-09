<div {{ $attributes->merge(['class' => 'flex items-center w-full gap-2']) }}>
    <span class="bg-white w-2 h-2 p-1 rounded-sm"></span>
    <h6 class="text-white text-sm lg:text-lg font-bold">{{ $slot }}</h6>
</div>
