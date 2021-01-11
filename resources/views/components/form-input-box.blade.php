<div class="mb-4">
    <label for="{{ $name }}" class="hidden text-gray-500 uppercase font-bold">{{ $label }}</label>
    <input type="{{ $type }}" value="{{ old($name) }}" name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}"
           class="p-2  form-input border-gray-300 dark:border-dark-4 input input--lg w-full border bloc">
    @if($errors->first($name))
        <p class="text-red-300 mt-1 font-thin italic">{{ $errors->first($name) }}</p>
    @endif
</div>

