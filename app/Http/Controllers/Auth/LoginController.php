<?php

namespace App\Http\Controllers\Auth;

use App\Contracts\IAuthenticationService;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function login(IAuthenticationService  $service, LoginRequest $request)
    {
        if ($service->attempt($request->only(['email', 'password']))){
            return redirect()->back()->with('message', 'Login successful');
        }

        return redirect()->back()->with('error', 'Incorrect login details');
    }
}
