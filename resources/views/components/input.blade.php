@props(['type' => 'text'])

<div class="relative group">
    <input
        {{ $attributes->merge(['class' => 'w-full bg-secondary text-white text-xs p-3 rounded-lg border-2 border-gray focus:border-emphasis outline-0']) }}
        type="{{ $type }}">
    <span class="group-focus-within:bg-emphasis absolute bg-white top-1/2 right-2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 rounded-sm"></span>
</div>
