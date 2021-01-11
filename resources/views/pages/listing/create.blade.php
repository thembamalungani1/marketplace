@extends('layouts.main')

@section('content')
    <div class="w-full flex justify-center p-10 align-middle mt-20 md:mt-0">
        <div class="p-10 pt-0 bg-gray-50 shadow-lg text-gray-600 w-1/2">
            @if($error = Session::get('error'))
                <x-alert message="{{ $error }}"></x-alert>
            @endif
            <div>
                <p class="my-10">Please fill in all required fields and click Post</p>
                <form action="{{ route('create-listing') }}" method="post">
                    @csrf
                    <x-form-input-box label="Title" name="title" id="title" placeholder="Title"></x-form-input-box>
                    <x-form-input-box label="Slug" name="slug" id="slug" placeholder="Slug"></x-form-input-box>
                    <x-form-input-box label="Price" name="price" id="price" placeholder="Price"></x-form-input-box>
                    <div class="mb-4">
                        <textarea name="description" value="{{ old('description') }}" id="description" placeholder="Description" class="@error('description') border-red-500 @enderror px-4 py-1.5 text-gray-600 form-input border-gray-300 dark:border-dark-4 input input--lg w-full border block focus:outline-none focus:border-green-500"></textarea>
                        @if($errors->first('description'))
                            <p class="text-red-300 mt-1 font-thin italic">{{ $errors->first('description') }}</p>
                        @endif
                    </div>
                    <x-form-input-box label="Contact Number" name="contact_mobile" id="contact_mobile" placeholder="Contact Number"></x-form-input-box>
                    <x-form-input-box label="Contact Email" name="contact_email" id="contact_email" placeholder="Contact Email"></x-form-input-box>
                    @component('components.form-select-options', [
                            'label' => "Currency",
                            'name'=>"currency_id",
                            'id'=>"currency_id",
                            'options' => [
                                ['label' => 'ZAR', 'value' => 1],
                                ['label' => 'USD', 'value' => 2],
                            ]
                    ])
                    @endcomponent
                    @component('components.form-select-options', [
                            'label' => "Category",
                            'name'=>"category_id",
                            'id'=>"category_id",
                            'options' => [
                                ['label' => 'Cars', 'value' => 1],
                                ['label' => 'Furniture', 'value' => 2],
                            ]
                    ])
                    @endcomponent
                    <input type="submit" value="Post" class="button button--lg bg-light-1 text-white w-full  my-4 py-2 shadow bg-blue-400">
                    <input type="submit" value="Cancel" class="button button--lg bg-light-1 text-white w-full py-2 shadow bg-red-400">
                </form>
            </div>
        </div>
    </div>
@endsection
