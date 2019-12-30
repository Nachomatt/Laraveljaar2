<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Http\Requests\StoreCouponsRequest;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coupons = Coupon::all();

        return view('coupons.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCouponsRequest $request)
    {
        //
        $coupon = new Coupon();
        $coupon->code = $request->code;
        $coupon->expirationdate = $request->expirationdate;
        $coupon->discount = $request->discount;
        $coupon->save();

        return redirect()->route('coupons.index')->with('message', 'Coupon aangemaakt');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
        return view('coupons.show', compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        //
        return view('coupons.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCouponsRequest $request, Coupon $coupon)
    {
        //
        $coupon->code = $request->code;
        $coupon->expirationdate = $request->expirationdate;
        $coupon->discount = $request->discount;

        $coupon->save();

        return redirect()->route('coupons.index')->with('message', 'Coupon geupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        //
        $coupon->delete();
        return redirect()->route('coupons.index')->with('message', 'Coupon Verwijderd');
    }
}
