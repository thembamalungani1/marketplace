@extends('layouts.main')

@section('content')
    <div class="w-full flex justify-center p-10 align-middle mt-20 md:mt-0">
        <div class="p-10 pt-0 bg-gray-50 shadow-lg">
            <x-login-form></x-login-form>
        </div>
    </div>
@endsection
