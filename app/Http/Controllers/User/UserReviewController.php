<?php

namespace App\Http\Controllers\User;

use App\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('user.reviews.index', compact('reviews'));
    }

}
