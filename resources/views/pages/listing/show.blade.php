@extends('layouts.main')

@section('content')
    <div class="w-full flex justify-center">
        <div class="w-3/4 flex justify-center">
            <div class="w-full flex justify-center p-10 mt-20 md:mt-0 bg">
                <div class="w-3/4 block">
                    <div class="grid grid-cols-3">
                        <div class="col-span-2 bg-gray-200 shadow-lg bg-opacity-95 border-gray-100 p-4">
                            <div class="block">
                                    <p class="float-left text-4xl text-gray-600">{{ $listing->title }}</p>
                                    <p class="float-right text-4xl text-green-600">{{ $listing->price }}</p>
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
                            <p>Category {{ $listing->category_id }}</p>
                            <p>Contact Email {{ $listing->contact_email }}</p>
                            <p>Contact Phone {{ $listing->contact_phone  }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
