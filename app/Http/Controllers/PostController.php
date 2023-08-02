<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Retorna View com todos os posts sem paginacao
     */
    public function index()
    {
        $post = \App\Models\Post::latest();
        //Isso faz evitar o N+1 selects
        return view('posts.index',['post'=>$post->with('author')->get()]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // TODO
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // TODO
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = htmlspecialchars(strip_tags($id)); //Sanitization
        $post = \App\Models\Post::findOrFail($id); //Query

        return view('posts.show',[
            "item" => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // TODO
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // TODO
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // TODO
    }
}
