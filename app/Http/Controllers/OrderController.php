<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function showListOrder() {
        $orders = Order::with('customer')->paginate(10);
        return view('orders.list', compact('orders'));
    }

    function filter(Request $request) {
        $statusOrder = $request->get('order-status');
        $orders = Order::with('customer')
            ->where('status','=', $statusOrder)
            ->paginate(10);
        return view('orders.list', compact('orders'));
    }
}
