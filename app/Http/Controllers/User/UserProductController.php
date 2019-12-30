<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class UserProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('user.products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('user.products.show', compact('product'));
    }
}
