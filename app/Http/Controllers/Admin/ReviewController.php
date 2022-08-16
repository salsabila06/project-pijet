<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post;

class ReviewController extends Controller
{
    public function index()
    {
        $review = review::latest()->filters(request(['search']))->paginate(10);
        return view('Admin.Review.Index',compact('review'));
    }
}

