<?php


namespace App\Services;


use App\Contracts\IAuthenticationService;
use App\Events\UserWasRegistered;
use App\Events\UserWasSignedIn;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthenticationService implements IAuthenticationService
{
    /**
     * @param array|null $metadata
     * @return bool
     */
    public function attempt(array $metadata = null): bool
    {
        if (auth()->attempt($metadata)){
            event(new UserWasSignedIn(auth()->user()));
            return true;
        }

        return false;
    }

    /**
     * @param array|null $metadata
     */
    public function signout(array $metadata = null)
    {
        $user = auth()->user();
        auth()->logout();
        event(new UserWasSignedOut($user));
    }

    public function register(array $metadata = null): mixed
    {
        $user = User::create([
            'firstname' => $metadata['firstname'],
            'lastname'  => $metadata['lastname'],
            'email'     => $metadata['email'],
            'password'  => Hash::make($metadata['password'])
        ]);

        event(new UserWasRegistered($user));

        return $user;
    }

    function auth(User $user = null): bool
    {
        if (auth()->login($user)){
            event(new UserWasSignedIn($user));
            return true;
        }

        return false;
    }
}
