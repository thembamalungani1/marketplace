<div class="items-center justify-center text-gray-400 md:mt-10">
    <div class="flex justify-center py-1">
        <x-logo></x-logo>
    </div>
    @if($error = Session::get('error'))
        <x-alert message="{{ $error }}"></x-alert>
    @endif
    <form action="{{ route('create-registration') }}" method="post">
        @csrf
        <x-form-input-box label="First Name" name="firstname" id="firstname" placeholder="First Name"></x-form-input-box>
        <x-form-input-box label="Last Name" name="lastname" id="lastname" placeholder="Last Name"></x-form-input-box>
        <x-form-input-box label="Email" name="email" id="email" placeholder="Email"></x-form-input-box>
        <x-form-input-box type="password" label="Password" name="password" id="password" placeholder="Password"></x-form-input-box>
        <x-form-input-box type="password" label="Confirm Password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"></x-form-input-box>
        <input type="submit" value="Register" class="button button--lg bg-light-1 text-white w-full xl:mr-3 my-4 py-2 shadow bg-blue-400">
    </form>
    <p>Already have an account? You can login <a href="{{ route('show-login') }}" class="text-indigo-400">here</a></p>
</div>
