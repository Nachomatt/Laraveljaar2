<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSuggestionsRequest;
use App\Product;
use App\Suggestion;
use App\User;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $suggestions = Suggestion::all();

        return view('suggestions.index', compact('suggestions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('suggestions.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuggestionsRequest $request)
    {
        //
        $suggestion = new Suggestion();
        $suggestion->description = $request->description;
        $suggestion->user_id = auth()->id();

        $suggestion->save();
        return redirect()->route('user.suggestions.index')->with('message', 'ヾ(⌐■_■)ノ♪ Continue jamming, Suggestion has been added partner.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suggestion $suggestion
     * @return \Illuminate\Http\Response
     */
    public function show(Suggestion $suggestion)
    {
        //
        return view('suggestions.show', compact('suggestion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suggestion $suggestion
     * @return \Illuminate\Http\Response
     */
    public function edit(Suggestion $suggestion)
    {
        //
        return view('suggestions.edit', compact('suggestion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Suggestion $suggestion
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSuggestionsRequest $request, Suggestion $suggestion)
    {
        //
        $suggestion->description = $request->description;
        $suggestion->user_id = auth()->id();
        $suggestion->save();

        return redirect()->route('suggestions.index')->with('message', 'Suggestion geupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suggestion $suggestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suggestion $suggestion)
    {
        //
        $suggestion->delete();
        return redirect()->route('suggestions.index')->with('message', 'Suggestion deleted');
    }
}
