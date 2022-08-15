<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post;

class ReviewController extends Controller
{
    public function index()
    {
        $review = review::paginate(20);
        return view('Admin.Review.Index',compact('review'));
    }
}

