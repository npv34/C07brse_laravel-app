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

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/login', function () {
        return view('login');
    })->name('show-form-login');

    Route::post('/login', function (Request $request) {
        // code logic login
        $email = $request->get('email');
        $password = $request->get('password');

        if ($email == 'admin@gmail.com' && $password == '1234') {
            // chuyen huong
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('show-form-login');
        }
    })->name('submit-login');

    Route::get('/register', function () {
        return view('register');
    })->name('register');
});

