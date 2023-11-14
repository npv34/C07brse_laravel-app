<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function getAll() {
        $customers = Customer::all();
        return response()->json($customers);
    }

    function detail($id) {
        $customer = Customer::with('orders')->find($id);
        return response()->json($customer);
    }
}
