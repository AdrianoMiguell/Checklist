@props(['value'])

<label style="color: rgb(var(--light-c))" {{ $attributes->merge(['class' => 'block font-medium text-sm']) }}>
    {{ $value ?? $slot }}
</label>
