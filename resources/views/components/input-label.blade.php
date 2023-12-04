@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-2xl font-bold leading-6 text-gray-900']) }}>
    {{ $value ?? $slot }}
</label>
