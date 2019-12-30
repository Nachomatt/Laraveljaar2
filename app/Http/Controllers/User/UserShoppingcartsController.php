<?php

namespace App\Http\Controllers\User;

use App\Shoppingcart;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserShoppingcartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::where('id',Auth::user()->id)->get();
        $shoppingCarts = Shoppingcart::where('user_id',Auth::user()->id)->get();
        $products = Product::all();
        $total=0;

        return view('user.shoppingcarts.index',  compact('shoppingCarts', 'products', 'user','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $shoppingCart = new Shoppingcart();

        $shoppingCart->user_id = auth()->id();
        $shoppingCart->product_id = $request->id;
        $shoppingCart->save();

        return redirect()->route('user.products.index')->with('message','Added to Your ShoppingCart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shoppingcart  $shoppingcart
     * @return \Illuminate\Http\Response
     */
    public function show(Shoppingcart $shoppingcart)
    {
        //
        return view('user.shoppingcarts.show',  compact('shoppingcart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shoppingcart  $shoppingcart
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoppingcart $shoppingcart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shoppingcart  $shoppingcart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoppingcart $shoppingcart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shoppingcart  $shoppingcart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoppingcart $shoppingcart)
    {
        //
       $shoppingcart->delete();
        return redirect()->route('user.shoppingcarts.index')->with('message','ShoppingCart item deleted');
    }
    public function empty(Shoppingcart $shoppingcart)
    {
        //

        $shoppingCarts = Shoppingcart::all();
        foreach ($shoppingCarts as $shoppingCart) {
            if ($shoppingCart->user_id == Auth::user()->id) {
                $shoppingCart->delete();
            }
            }
        return redirect()->route('user.products.index')->with('message','Payment completed. Order is in place');
    }

}
