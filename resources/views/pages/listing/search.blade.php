@extends('layouts.main')
@section('title')
    Search Listing
@endsection
@section('content')
    <div class="w-full flex justify-center p-10 mt-20 md:mt-0 bg">
        <div class="w-3/4 flex justify-center mt-20 md:mt-0 bg">
            <div class="w-full">
                @if(!isset($results))
                    <div class="flex justify-center">
                        <x-logo></x-logo>
                    </div>
                    <div class="grid grid-cols-4 pb-0 m-4">
                        <x-search-category-box name="Furniture" title="Furniture" image="{{ asset('img/furniture.png') }}"></x-search-category-box>
                        <x-search-category-box name="Cars" class="ml-2" title="Cars" image="{{ asset('img/car.png') }}"></x-search-category-box>
                        <x-search-category-box name="Electronics" class="ml-2" title="Electronics" image="{{ asset('img/computer.png') }}"></x-search-category-box>
                        <x-search-category-box name="Property" class="ml-2" title="Property" image="{{ asset('img/house.png') }}"></x-search-category-box>
                    </div>
                    <x-search-form></x-search-form>
                @endif

                @if(isset($results))
                    @component('components.search-results', ['results' => $results])
                    @endcomponent
                @endif
            </div>
        </div>
    </div>
@endsection
