<?php


namespace App\Contracts;


use App\Models\User;

interface IAuthenticationService
{
    function auth(User $user = null): bool;
    function attempt(array $metadata = null): bool;
    function signout(array $metadata = null);
    function register(array $metadata = null): mixed;
}
