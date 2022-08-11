<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('Admin.Posts.Index',[
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('Admin.Post.Index',[
            "post" => $post
        ]);
    }
    //
}
