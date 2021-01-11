<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\IAuthenticationService;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function login(IAuthenticationService  $service, LoginRequest $request)
    {
        if ($service->attempt($request->only(['email', 'password']))){
            return redirect()->route('search');
        }

        return redirect()->back()->with('error', 'Incorrect login details');
    }

    public function logout(IAuthenticationService $service)
    {
        $service->signout();
        return redirect()->route('search');
    }
}
