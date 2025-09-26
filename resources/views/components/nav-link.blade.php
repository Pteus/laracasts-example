@props(['active' => false])

@php
    $classes = $active
        ? 'bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium'
        : 'text-gray-300 hover:bg-white/5 hover:text-white rounded-md px-3 py-2 text-sm font-medium';
@endphp

<a
    aria-current="{{ $active ? 'page' : 'false'}}"
    class="{{ $classes }}"
    {{ $attributes }}>
    {{ $slot }}
</a>
