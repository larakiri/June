@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-red-300 focus:bg-blue-300 hover:text-white focus:text-white';

    if ($active) $classes .= ' bg-red-400 text-white';
@endphp

<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }}</a>



