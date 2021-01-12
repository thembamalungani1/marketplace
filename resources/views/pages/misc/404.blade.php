@extends('layouts.main')
@section('title')
    Listing not found
@endsection
@section('content')
    <div class="w-full flex justify-center p-10 align-middle mt-20 md:mt-0">
        <div class="p-10 bg-gray-50 shadow-lg text-gray-600 w-1/2 border-l-2 text-red-500 border-red-600">
            Opps. Listing now found. <a href="{{ route('search') }}" class="text-indigo-400"> Back to search</a>
        </div>
    </div>
@endsection
