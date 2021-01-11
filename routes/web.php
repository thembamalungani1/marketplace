<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegistrationController::class, 'index'])->name('show-register');
Route::post('/register', [RegistrationController::class, 'signup'])->name('create-registration');
Route::get('/login', [LoginController::class, 'index'])->name('show-login');
Route::post('/login', [LoginController::class, 'login'])->name('do-login');
