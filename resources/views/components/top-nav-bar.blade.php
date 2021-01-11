<div class="p-4 block w-full bg-gray-500 opacity-80 py-5">
    <div class="flex max">
        <p class="mx-3">
        </p>
    </div>
    <div class="flex float-right">
        @guest
            <div class="md:flex items-center px-5">
                <a href="{{ route('signin') }}" data-toggle="modal" data-target="#invite-friends-modal" class="button bg-light-1 text-white shadow-md">Sign in</a>
            </div>
        @endguest
    </div>
</div>
