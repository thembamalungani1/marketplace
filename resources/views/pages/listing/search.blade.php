@extends('layouts.main')
@section('content')
    <div class="w-full flex justify-center p-10 mt-20 md:mt-0 bg">
        <div class="w-3/4 flex justify-center mt-20 md:mt-0 bg">
            <div class="w-full">
                @if(!isset($results))
                    <div class="flex justify-center">
                        <x-logo></x-logo>
                    </div>
                    <div class="grid grid-cols-4 pb-0 m-4">
                        <x-search-category-box title="Furniture" image="{{ asset('img/furniture.png') }}"></x-search-category-box>
                        <x-search-category-box class="ml-2" title="Cars" image="{{ asset('img/furniture.png') }}"></x-search-category-box>
                        <x-search-category-box class="ml-2" title="Electronics" image="{{ asset('img/furniture.png') }}"></x-search-category-box>
                        <x-search-category-box class="ml-2" title="Property" image="{{ asset('img/furniture.png') }}"></x-search-category-box>
                    </div>
                    <x-search-form></x-search-form>
                @endif

                @if(isset($results))
                        <div class="mb-10">
                            <x-search-form></x-search-form>
                        </div>
                    @foreach($results as $listing)
                        <div class="w-full flex justify-center mb-3">
                            <div class="w-3/4 flex justify-center mt-20 md:mt-0 bg">
                                <div class="bg-gray-200 w-1/4 shadow-lg bg-opacity-95 border-gray-100 p-4">
                                    <img src="https://via.placeholder.com/150">
                                </div>
                                <div class="bg-gray-200 w-3/4 shadow-lg opacity-95 border-gray-100 p-4">
                                    <p class="text-2xl text-gray-600">
                                        <a href="{{ route('show-listing', ['slug' => $listing->slug]) }}">{{ $listing->title }}</a>
                                    </p>
                                    <p class="text-gray-500 overscroll-x-contain break-words">{{ substr($listing->description, 0, 100) }}</p>
                                    <p class="text-gray-500 overscroll-x-contain">{{ $listing->category_id }}</p>
                                    <div class="float-right">
                                        <p class="text-red-400 align-bottom">{{ $listing->created_at->diffForHumans()  }}</p>
                                        <p class="text-blue-400 align-bottom"><a href="{{ route('show-listing', ['slug' => $listing->slug]) }}">Contact Seller</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
