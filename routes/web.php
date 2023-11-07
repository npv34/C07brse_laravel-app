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
        ->name('register');

    Route::get('/forgot-password', [\App\Http\Controllers\LoginController::class, 'showFormForgetPassword'])->name('forgot-password');
    Route::post('/forgot-password', [\App\Http\Controllers\LoginController::class, 'forgotPassword'])->name('forgot-password-submit');

    Route::prefix('products')->group(function (){
        Route::get('/', [\App\Http\Controllers\ProductController::class, 'showListProduct'])->name('products.list');
    });

    Route::prefix('orders')->group(function (){
        Route::get('/', [\App\Http\Controllers\OrderController::class, 'showListOrder'])->name('orders.list');
        Route::get('/filter', [\App\Http\Controllers\OrderController::class, 'filter'])->name('orders.filter');

    });

    Route::prefix('/customers')->group(function (){
       Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customers.list');
       Route::get('/create', [\App\Http\Controllers\CustomerController::class, 'showFormCreate'])->name('customers.showFormCreate');
       Route::post('/create', [\App\Http\Controllers\CustomerController::class, 'add'])->name('customers.add');
        Route::get('/{id}/delete', [\App\Http\Controllers\CustomerController::class, 'delete'])->name('customers.delete');
        Route::get('/{id}/detail', [\App\Http\Controllers\CustomerController::class, 'detail'])->name('customers.detail');

    });

});

