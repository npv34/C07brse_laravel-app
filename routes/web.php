<?php

use Illuminate\Http\Request;
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

Route::prefix('/admin')->group(function () {

//    Route::middleware(['auth'])->group(function () {
//        Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'showDashboard'])->name('dashboard');
//    });
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'showDashboard'])->name('dashboard');

    Route::get('/login', [\App\Http\Controllers\LoginController::class, 'showFormLogin'])->name('show-form-login');
    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('submit-login');
    Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'showFormRegister'])->name('show-form-register');

    Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'register'])
        ->middleware('checkAge')->name('register');

    Route::get('/forgot-password', [\App\Http\Controllers\LoginController::class, 'showFormForgetPassword'])->name('forgot-password');
    Route::post('/forgot-password', [\App\Http\Controllers\LoginController::class, 'forgotPassword'])->name('forgot-password-submit');
});

