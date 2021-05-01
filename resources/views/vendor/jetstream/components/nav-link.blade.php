@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center px-3.5 py-1.5 text-sm rounded'
            : 'flex items-center px-3.5 py-1.5 text-sm rounded';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
