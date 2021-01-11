<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\IAuthenticationService;
use App\Contracts\IRegistrationService;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    /**
     * @param IAuthenticationService $authenticationService
     * @param RegistrationRequest $request
     * @return mixed
     */
    public function signup(
        IAuthenticationService $authenticationService,
        RegistrationRequest  $request
    ) : mixed
    {
        $user = $authenticationService->register($request->only(['firstname', 'lastname', 'email', 'password']));

        if ($user){
            $authenticationService->auth($user);

            return redirect()->back()->with('message', 'Successfully registered');
        }

        return redirect()->back()->with('error', 'Opps, Something fishy happened. We on it!');
    }
}
