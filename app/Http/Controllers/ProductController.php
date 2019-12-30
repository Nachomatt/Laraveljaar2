<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        $product= new Product();
        if ($request->has('image')) {
            $image = Storage::putFile('public', new File($request->image));
            $product->image = $image;
        }
        $product->name = $request->name;
        $product->price = $request->price;

        $product->save();
        return redirect()->route('products.index')->with('message', 'ヾ(⌐■_■)ノ♪ Continue jamming, Product has been added partner.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductsRequest $request, Product $product)
    {
        $product->name = $request->name;
        $product->price = $request->price;
        if ($request->has('image')) {
            $image = Storage::putFile('public', new File($request->image));
            $product->image = $image;
        }
        $product->save();

        return redirect()->route('products.index')->with('message', 'ヾ(⌐■_■)ノ♪ Continue jamming, Product has been edited partner.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('message','Product deleted, bye bye!');
    }
}
