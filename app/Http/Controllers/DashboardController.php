<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $tempPosts = \App\Models\Post::latest()->get();
        $tempProdutos = \App\Models\Produto::latest()->get();
        $contUsers = \App\Models\User::count();

        return view('admin.dashboard', 
        [
            'posts' => $tempPosts,
            'produtos' => $tempProdutos,
            'users' => $contUsers
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
    public function users()
    {
        return view('admin.dashboard-users',['users' => \App\Models\User::paginate(6)]);
    }
}
