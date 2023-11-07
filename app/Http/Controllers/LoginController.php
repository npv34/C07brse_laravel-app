<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
    }

    function showFormLogin() {
        return view('login');
    }

    function login(LoginRequest $request) {
        $email = $request->get('email');
        $password = $request->get('password');

        if ($email == 'admin@gmail.com' && $password == '1234') {
            // chuyen huong
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('show-form-login');
        }
    }

    function showFormForgetPassword(){
        return view('forgot_password');
    }

    function forgotPassword(Request $request) {
        // code logic
    }
 }
