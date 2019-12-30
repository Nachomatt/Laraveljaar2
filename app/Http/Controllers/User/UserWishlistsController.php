<?php

namespace App\Http\Controllers\User;

use App\Product;
use App\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class UserWishlistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wishlist = Wishlist::where('user_id',Auth::user()->id)->get();
        $products = Product::all();
        //
        return view('user.wishlists.index',  compact('wishlist', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('user.wishlists.create', compact('product'));
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
        $wishlist = new Wishlist();

        $wishlist->user_id = auth()->id();
        $wishlist->product_id = $request->id;
        $wishlist->save();

        return redirect()->route('user.products.index')->with('message','Added to Your WishList');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        //
        return view('user.wishlists.show',  compact('wishlist'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wishlist $wishlist)
    {
        //
        $wishlist->delete();
        return redirect()->route('user.wishlists.index')->with('message','wishlist item deleted');
    }
}
