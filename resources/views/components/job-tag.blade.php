@props(['alt' => false])

@php
    $classes = !$alt ? 'bg-darkgray' : 'bg-transparent border border-gray font-bold';
    $classes .= ' px-2 py-1 rounded-lg text-white';
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
