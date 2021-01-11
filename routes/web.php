<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\ListingController;
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

Route::get('/', [ListingController::class, 'index']);
Route::post('/search', [ListingController::class, 'doSearch'])->name('do-search');

Route::get('/register', [RegistrationController::class, 'index'])->name('show-register');
Route::post('/register', [RegistrationController::class, 'signup'])->name('create-registration');
Route::get('/login', [LoginController::class, 'index'])->name('show-login');
Route::post('/login', [LoginController::class, 'login'])->name('do-login');


Route::get('/create-listing', [ListingController::class, 'create'])->name('create-listing');
Route::post('/create-listing', [ListingController::class, 'save'])->name('save-listing');
