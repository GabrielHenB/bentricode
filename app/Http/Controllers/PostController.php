<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    //
    
    /**
     * Retorna View com todos os posts sem paginacao
     */
    public function index(): View
    {
        $post = \App\Models\Post::latest();
        //Isso faz evitar o N+1 selects
        return view('posts.index',['post'=>$post->with('author')->get()]);
    }

}
