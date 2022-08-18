<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\review;


class ReviewController extends Controller
{
    public function index()
    {
        $review = review::latest()->filters(request(['search']))->paginate(10);
        return view('Admin.Reviews.Index',compact('review'));
    }
}
