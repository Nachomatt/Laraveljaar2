<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewsRequest;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create', compact('reviews'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviewsRequest $request)
    {
        $review = new Review();
        $review->review = $request->review;
        $review->stars = $request->stars;
        $review->save();
        return redirect()->route('reviews.index')->with('message', 'ヾ(⌐■_■)ノ♪ Continue jamming, Review has been added partner.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function update(StoreReviewsRequest $request, Review $review)
    {
        $review->review = $request->review;
        $review->stars = $request->stars;
        $review->save();
        return redirect()->route('reviews.index')->with('message', '\ (•◡•) /Woop Woop! Review successfully edited\ (•◡•) /');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('reviews.index')->with('message', '\ (•◡•) /Woop Woop! Review successfully deleted\ (•◡•) /');
    }
}
