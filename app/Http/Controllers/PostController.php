<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Obter request
        //ja vem como parametro kk
        //Sanitizar request
        foreach($request->all() as $key=>$value){
            $request[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
        }
        //$request['user_id'] = auth()->user()->id;
        $request['user_id'] = $request->input('user_id'); //tambem temporario
        //Validar request
        $request->validate([
            'title' => 'required',
            'body' => 'string',
            'thumburl' => 'image',
            'user_id' => [\Illuminate\Validation\Rule::exists('users','id')]
        ]);
        //Criar
        $request['thumburl'] = '#';
        
        Post::create([
            'user_id' => $request->input('user_id'),
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'thumburl' => '#', //temporariamente
        ]);

        return redirect('/')->with('mensagem', "Post efetuado com sucesso!");
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
