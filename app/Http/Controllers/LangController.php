<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    function getLocale(Request $request) {
        $locale = $request->language;
        session()->put('language', $locale);
        return back();
    }
}
