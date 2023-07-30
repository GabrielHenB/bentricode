<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    //

    public function index(): View
    {
        $post = \App\Models\Post::all();

        return view('posts.index',['post'=>$post]);
    }

}
