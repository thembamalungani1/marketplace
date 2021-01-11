<div class="block w-full bg-gray-500 bg-opacity-70">
    <div class="float-left">
        <a href="/">
            <img alt="Marketplace" class="h-10" src="{{ asset('img/logo.png') }}">
        </a>
    </div>
    <div class="float-right">
        @guest
            <div class="md:flex items-center px-5">
                <a href="{{ route('show-login') }}" class="button bg-light-1 text-white shadow-md bg-green-600 py-1.5 px-6">Login</a>
                <a href="{{ route('show-register') }}" class="button bg-light-1 text-white shadow-md bg-blue-600 py-1.5 px-6 ml-2">Register</a>
            </div>
        @endguest
        @auth
            <div class="md:flex items-center">
                <div class="flex mr-10">
                    <div class="float-right">
                        <a href="{{ route('create-listing') }}" data-toggle="modal" data-target="#invite-friends-modal" class="button bg-light-1 text-white shadow-md p-2.5 shadow-md bg-green-600">Post New Listing</a>
                    </div>
                </div>
                <div class=" flex p-2.5">
                    <div class="flex w-24 text-lg text-gray-100 leading-tight">{{ auth()->user()->firstname }}</div>
                    <div class="flex text-indigo-900">{{ count(auth()->user()->listings) }} {{ Str::plural('listing', count(auth()->user()->listings)) }}</div>
                </div>
                <div class="flex mr-10">
                    <div class="float-right">
                        <a href="{{ route('logout') }}" data-toggle="modal" data-target="#invite-friends-modal" class="button bg-light-1 text-white shadow-md p-2.5 shadow-md bg-red-500">Logout</a>
                    </div>
                </div>
            </div>
        @endauth
    </div>
</div>
