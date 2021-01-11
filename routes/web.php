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
    return redirect()->route('show-search');
});
Route::post('/search', [SearchController::class, 'search'])->name('show-search');
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/register', [RegistrationController::class, 'index'])->name('show-register');
Route::post('/register', [RegistrationController::class, 'signup'])->name('create-registration');
Route::get('/login', [AuthController::class, 'index'])->name('show-login');
Route::post('/login', [AuthController::class, 'login'])->name('do-login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/create-listing', [ListingController::class, 'create'])->name('create-listing');
Route::post('/create-listing', [ListingController::class, 'save'])->name('save-listing');

Route::get('/show-listing/s-{slug}', [ListingController::class, 'show'])->name('show-listing');
