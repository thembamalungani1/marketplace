<div>
    <label for="{{ $name }}" class="block text-gray-500 my-2">{{ $label }}</label>
    <select name="{{ $name }}" class="@error($name) border-red-500 @enderror p-2  form-input text-gray-400 border-gray-300 dark:border-dark-4 input input--lg w-full border block" >
        @foreach($options as $option)
            <option value="{{ $option['value'] }}" {{ request()->get($name) == $option['value'] ? 'selected' : ''}}>{{ $option['label'] }}</option>
        @endforeach
    </select>
</div>
