@props(['alt' => false])

@php
    $classes = !$alt ? 'bg-darkgray' : 'bg-transparent border border-gray font-bold';
    $classes .= ' px-2 py-1 rounded-lg text-white  hover:bg-white/30';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
