<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $tempPosts = \App\Models\Post::latest()->get();
        $tempProdutos = \App\Models\Produto::latest()->get();

        return view('admin.dashboard', 
        [
            'posts' => $tempPosts,
            'produtos' => $tempProdutos
        ]);
    }
    public function posts()
    {
        return view('admin.dashboard-posts',['posts' => \App\Models\Post::paginate(8)]);
    }
    public function projects()
    {
        return view('admin.dashboard-projects',['produtos' => \App\Models\Produto::paginate(8)]);
    }
}
