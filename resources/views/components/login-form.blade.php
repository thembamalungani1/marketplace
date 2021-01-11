<div class="items-center justify-center text-gray-400 md:mt-10">
    <div class="flex justify-center py-1">
        <x-logo></x-logo>
    </div>
    @if($error = Session::get('error'))
        <x-alert message="{{ $error }}"></x-alert>
    @endif
    <form action="{{ route('do-login') }}" method="post">
        @csrf
        <x-form-input-box label="Email" name="email" id="email" placeholder="Email"></x-form-input-box>
        <x-form-input-box label="Password" type="password" name="password" id="password" placeholder="Password"></x-form-input-box>
        <input type="submit" value="Login" class="button button--lg bg-light-1 text-white w-full xl:mr-3 my-4 py-2 shadow bg-blue-400">
    </form>
    <p>Don't have a account? You can register <a href="{{ route('show-register') }}" class="text-indigo-400">here</a></p>
</div>
