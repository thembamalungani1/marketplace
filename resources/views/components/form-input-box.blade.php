<div class="mb-4">
    <label for="{{ $name }}" class="hidden text-gray-500 uppercase font-bold">{{ $label }}</label>
    <input type="{{ $type }}" value="{{ old($name) ? old($name) : request()->get($name) }}" name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}"
           class="@error($name) border-red-500 @enderror px-4 py-1.5 text-gray-600 form-input border-gray-300 dark:border-dark-4 input input--lg w-full border block focus:outline-none focus:border-green-500 {{ $class }}">
    @if($errors->first($name))
        <p class="text-red-300 mt-1 font-thin italic">{{ $errors->first($name) }}</p>
    @endif
</div>

