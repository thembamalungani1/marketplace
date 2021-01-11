<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <select name="{{ $name }}" class="@error($name) border-red-500 @enderror">
        @foreach($options as $option)
            <option value="{{ $option['value'] }}" {{ old($name) == $option['value'] ? 'selected' : ''}}>{{ $option['label'] }}</option>
        @endforeach
    </select>
</div>
