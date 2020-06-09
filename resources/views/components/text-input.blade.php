@props(['containerClass', 'type' => 'text', 'label', 'name'])

<div @if(isset($containerClass)) class="{{ $containerClass }}" @endif>
    @if(isset($label))
        <label class="form-label" :for="{{ $name }}">{{ $label }}</label>
    @endif
    <input {{ $attributes->merge(['class' => $errors->has($name) ? 'form-input error': 'form-input']) }} type="{{ $type }}">
    @if(isset($name) && $errors->has($name))
        <span class="text-sm text-red-500">{{ $errors->get($name)[0] }}</span>
    @endif
</div>
