@extends('layouts.main')

@section('content')
    <div class="w-full flex justify-center p-10 mt-20 md:mt-0 bg">
        <div class="w-3/4 block">
            <div class="grid grid-cols-3">
                <div class="col-span-2 bg-gray-200 shadow-lg opacity-95 border-gray-100 p-4">1</div>
                <div class="col-span-1 ml-2 bg-gray-200 p-4 sm:col-start-3 shadow-lg opacity-80 border-gray-100">
                    <x-contact-seller-form></x-contact-seller-form>
                </div>
                <div class="col-span-3 bg-gray-200 p-10 mt-4 border border-gray-100 shadow-md opacity-80">3</div>
            </div>
            <p class="mt-10 mb-4 text-gray-600 text-lg">Similar Listing</p>
            <x-listings-list-item></x-listings-list-item>
        </div>
    </div>
@endsection
