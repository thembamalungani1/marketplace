<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="text" value="{{ old($name) }}" name="{{ $name }}" id="{{ $id }}">
    @if($errors->first($name))
        <p class="text-red font-thin">{{ $errors->first($name) }}</p>
    @endif
</div>

