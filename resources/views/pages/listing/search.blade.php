@extends('layouts.main')
@section('content')
    <div class="w-full flex justify-center p-10 mt-20 md:mt-0 bg">
        <div class="w-1/2 flex justify-center mt-20 md:mt-0 bg">
            <div class="w-full">
                <div class="flex justify-center">
                    <x-logo></x-logo>
                </div>
                <div class="grid grid-cols-4 pb-0 m-4">
                    <x-search-category-box title="Furniture" image="{{ asset('img/furniture.png') }}"></x-search-category-box>
                    <x-search-category-box class="ml-2" title="Cars" image="{{ asset('img/furniture.png') }}"></x-search-category-box>
                    <x-search-category-box class="ml-2" title="Electronics" image="{{ asset('img/furniture.png') }}"></x-search-category-box>
                    <x-search-category-box class="ml-2" title="Property" image="{{ asset('img/furniture.png') }}"></x-search-category-box>s
                </div>
                <div class="flex p-4 pb-0 m-4 bg-gray-200 bg-opacity-70 border-l shadow-lg">
                    <div class="w-1/4 bg-opacity-100">
                        @component('components.form-select-options', [
                            'label' => "",
                            'name'=>"category_id",
                            'id'=>"category_id",
                            'options' => [
                                ['label' => 'All Categories', 'value' => 0],
                                ['label' => 'Cars', 'value' => 1],
                                ['label' => 'Furniture', 'value' => 2],
                            ]
                        ])
                        @endcomponent
                    </div>
                    <div class="w-3/4 my-2 mx-2">
                        <x-form-input-box label="Search" name="search" id="search" placeholder="Search"></x-form-input-box>
                    </div>
                    <div class="w-1/6">
                        <input type="submit" value="Search" class="text-white w-full my-2 py-1.5 shadow bg-green-400 shadow">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
