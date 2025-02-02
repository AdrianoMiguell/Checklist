@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-decoration-none';
@endphp

<a {{ $attributes->merge(['class' => $classes], ['style' => "color: rgb(var(--tert-c))"]) }}>
    {{ $slot }}
</a>
