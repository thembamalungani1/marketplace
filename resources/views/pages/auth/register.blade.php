@extends('layouts.main')

@section('content')
    <div>
        <div>
            @if($message = Session::get('message'))
                {{ $message }}
            @endif
        </div>
        <div>
            <x-registration-form></x-registration-form>
        </div>
    </div>
@endsection
