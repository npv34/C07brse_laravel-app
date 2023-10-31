<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function showDashboard(){
        $totalCustomer = Customer::all()->count();
        return view('dashboard', compact('totalCustomer'));
    }
}
