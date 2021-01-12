@extends('layouts.main')
@section('title')
    Listing | {{ substr($listing->title, 0, 20) }}
@endsection
@section('content')
    <div class="w-full flex justify-center">
        <div class="w-3/4 flex justify-center">
            <div class="w-full flex justify-center p-10 mt-20 md:mt-0 bg">
                <div class="w-3/4 block">
                    <div class="grid grid-cols-3">
                        <div class="col-span-2 bg-gray-200 shadow-lg bg-opacity-95 border-gray-100 p-4">
                            <div class="block">
                                <p class="float-left text-4xl text-gray-600">{{ $listing->title }} <span class="block text-lg text-red-500">{{ $listing->created_at->diffForHumans()  }}    </span></p>
                                <p class="float-right text-4xl text-green-600"><span class="font-bold">{{ $listing->currency->acronym }}</span>{{ number_format(doubleval($listing->price), 2) }}</p>
                            </div>
                            <div class="flex justify-center mt-20">
                                <img src="https://via.placeholder.com/350">
                            </div>
                        </div>
                        <div class="col-span-1 ml-2 bg-gray-200 p-4 sm:col-start-3 shadow-lg bg-opacity-95 border-gray-100">
                            @component('components.contact-seller-form', ['listing' => $listing])
                            @endcomponent
                        </div>
                        <div class="col-span-3 bg-gray-200 p-10 text-gray-600 mt-4 border border-gray-100 shadow-md bg-opacity-95">
                            <p class="mb-10 break-words">{{ $listing->description }}</p>
                            <div><p class="text-gray-600 font-bold float-left">Category:</p>&nbsp; {{ $listing->category->name }}</div>
                            <idv><p class="text-gray-600 font-bold float-left">Contact Email:</p>&nbsp; {{ $listing->contact_email }}</idv>
                            <div><p class="text-gray-600 font-bold float-left">Contact Phone:</p>&nbsp; {{ $listing->contact_mobile  }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
