<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return view('Posts.Index',[
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('Post.Index',[
            "post" => $post
        ]);
    }
    //
}

