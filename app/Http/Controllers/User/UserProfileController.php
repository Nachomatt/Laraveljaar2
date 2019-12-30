<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\StoreProfileRequest;
use App\Profile;
use App\User;
use Illuminate\Database\Eloquent\Concerns\HasAttributes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::where('id', Auth::user()->id)->get();

        return view('user.profile.edit', compact('users'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('profile.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(User $profile)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProfileRequest $request, User $profile)
    {
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->password = Hash::make($request->password);

        // $request->password hashen en dan in profile zetten

        $profile->save();

        return redirect()->route('user.profile.index')->with('message', 'ヾ(⌐■_■)ノ♪ Continue jamming, Profile has been edited partner.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {

    }
}
