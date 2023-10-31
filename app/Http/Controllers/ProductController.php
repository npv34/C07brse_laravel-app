<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function showListProduct() {
        $products = Product::paginate(10);
        return view('products.list', compact('products'));
    }
}
