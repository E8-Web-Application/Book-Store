@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-[#EEDEDE] font-medium text-sm']) }}>
    {{ $value ?? $slot }}
</label>
