@props(['value'])

<label {{$attributes->merge(['class' => 'form-label', 'style' => 'color: rgb(var(--light-c))']) }}>
    {{ $value ?? $slot }}
</label>
