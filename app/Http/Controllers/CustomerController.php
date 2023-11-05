<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employe;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index() {
        $customers = Customer::orderByDesc('customerNumber')->paginate(10);
        return view('customers.list', compact('customers'));
    }

    function showFormCreate() {
        $employers = Employe::all();
        return view('customers.add', compact('employers'));
    }

    function add(Request $request) {
        // insert data
        $customer = Customer::create($request->except(['_token', '_method']));   // use this to exclude _token and _method
        $customer->save();
        return redirect()->route('customers.list');
    }

    function delete($id) {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.list');
    }

    function detail($id) {
        $customer = Customer::with('orders')->find($id);
        return view('customers.detail', compact('customer'));
    }
}
