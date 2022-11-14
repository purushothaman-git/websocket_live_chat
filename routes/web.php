<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

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

Route::get('login', [SampleController::class, 'index'])->name('login');
Route::get('registration', [SampleController::class, 'registration'])->name('registration');
Route::get('logout', [SampleController::class, 'logout'])->name('logout');
Route::post('validate_registration', [SampleController::class, 'validate_registration'])->name('sample.validate_registration');
Route::post('validate_login', [SampleController::class, 'validate_login'])->name('sample.validate_login');
Route::get('dashboard', [SampleController::class, 'dashboard'])->name('dashboard');
Route::get('profile', [SampleController::class, 'profile'])->name('profile');
Route::post('profile_validation', [SampleController::class, 'profile_validation'])->name('sample.profile_validation');


