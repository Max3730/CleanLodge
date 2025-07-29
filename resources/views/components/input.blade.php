@props(['label' => '', 'type' => 'text', 'name' => ''])

<div>
    @if($label)
        <label class="block text-sm font-medium mb-1">{{ $label }}</label>
    @endif
    <input type="{{ $type }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'border rounded w-full p-2']) }}>
</div>
