<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VerifyemailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::controller(DashboardController::class)->group(function() {
    Route::get('/dashboard', 'index')->name('dashboard')->middleware('auth', 'verified');
    Route::get('/dashboard/topup', 'topupsaldo')->name('topupsaldo')->middleware('auth', 'verified');
    Route::get('/dashboard/tunnel/remote', 'tunnelremote')->name('tunnelremote')->middleware('auth', 'verified');
});

Route::controller(AuthController::class)->group(function() {
    Route::get('/auth', 'auth')->name('auth');
    Route::get('/dashboard/actionlogout', 'actionlogout')->name('actionlogout')->middleware('auth');
    Route::post('/auth/login', 'actionlogin')->name('actionlogin');
    Route::post('/auth/register', 'actionregister')->name('actionregister');
});

Route::controller(VerifyemailController::class)->group(function() {
    Route::get('/auth/verifyemail', 'notice')->name('verification.notice');
    Route::get('/auth/verifyemail/{id}/{hash}', 'verify')->name('verification.verify');
    Route::post('/auth/verifyemail/resend', 'resend')->name('verification.resend');
});