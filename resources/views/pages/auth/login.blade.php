<div>
    <div>
        @if($message = Session::get('message'))
            {{ $message }}
        @endif
    </div>
    <div>
        <x-login-form></x-login-form>
    </div>
</div>
