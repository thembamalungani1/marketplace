<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\SearchController;
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

Route::get('/', function (){
    return redirect()->route('search');
});
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/register', [RegistrationController::class, 'index'])->name('show-register')->middleware('guest');
Route::post('/register', [RegistrationController::class, 'signup'])->name('create-registration')->middleware('guest');
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('do-login')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/create-listing', [ListingController::class, 'create'])->name('create-listing')->middleware('auth');
Route::post('/create-listing', [ListingController::class, 'save'])->name('save-listing')->middleware('auth');

Route::get('/show-listing/s-{slug}', [ListingController::class, 'show'])->name('show-listing');
