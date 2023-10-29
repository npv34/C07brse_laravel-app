<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function showFormRegister()
    {
        return view('register');
    }

    function register(Request $request) {
        dd("oke");
    }
}
