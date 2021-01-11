@extends('layouts.main')

@section('content')
    <div>
        <div>
            @if($message = Session::get('message'))
                {{ $message }}
            @endif

        </div>
        <div>
            <h1>Create Listing</h1>
            <form action="{{ route('create-listing') }}" method="post">
                @csrf
                <x-form-input-box label="Title" name="title" id="title"></x-form-input-box>
                <x-form-input-box label="Slug" name="slug" id="slug"></x-form-input-box>
                <x-form-input-box label="Slug" name="slug" id="slug"></x-form-input-box>
                <x-form-input-box label="Price" name="price" id="price"></x-form-input-box>
                <x-form-input-box label="Description" name="description" id="description"></x-form-input-box>
                <x-form-input-box label="Contact Number" name="contact_mobile" id="contact_mobile"></x-form-input-box>
                <x-form-input-box label="Contact Email" name="contact_email" id="contact_email"></x-form-input-box>
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
                <input type="submit" value="Post">
            </form>
        </div>
    </div>
@endsection
