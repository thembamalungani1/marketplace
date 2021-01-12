@extends('layouts.main')
@section('title')
    Register a neew account
@endsection
@section('content')
    <div class="w-full flex justify-center p-10 align-middle mt-20 md:mt-0 bg-opacity-90">
        <div class="p-10 pt-0 bg-gray-50 shadow-lg">
            <x-registration-form></x-registration-form>
        </div>
    </div>
@endsection
