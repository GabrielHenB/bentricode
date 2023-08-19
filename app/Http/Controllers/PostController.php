<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

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
        $this->authorize('admin');
        //if(auth()->guest() || auth()->user()->cannot('admin')) abort(\Symfony\Component\HttpFoundation\Response::HTTP_FORBIDDEN);
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //So admins podem usar o store
        $this->authorize('admin');
       
        //Obter request
        //ja vem como parametro kk
        //Sanitizar request
        foreach($request->all() as $key=>$value){
            if($key == "body"){
                //Por enquanto nao filtra, ja que só ADMINs podem postar!!
                //Inseguro se qualquer um puder postar
            }else{
                $request[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
            }
            
        }
        //$request['user_id'] = auth()->user()->id;
        $request['user_id'] = $request->input('user_id'); //tambem temporario

        //Validar request
        $entrada = $request->validate([
            'title' => 'required',
            'body' => 'string',
            'thumburl' => 'image',
            'user_id' => [\Illuminate\Validation\Rule::exists('users','id')]
        ]);

        //Files
        if($request->hasFile('thumburl')){
            //treat
            //TODO file sanitization?
            //store in public/post_thumbs uses disk from config
            $filepath = $request->file('thumburl')->store('public/post_thumbs');
            //dd($filepath);
        }else{
            $filepath = '#'; //placeholder
        }

        //Criar
        $entrada = Post::create(array_merge($entrada, ['thumburl' => $filepath]));

        return redirect(route('dashboard'))->with('mensagem', "Post efetuado com sucesso!");
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
        //if(auth()->guest() || auth()->user()->cannot('admin')) abort(\Symfony\Component\HttpFoundation\Response::HTTP_FORBIDDEN);

        $target = \App\Models\Post::findOrFail(htmlspecialchars(strip_tags($id)));

        $this->authorize('admin', $target);
        

        return view('posts.edit', ['post' => $target]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $target = Post::findOrFail(htmlspecialchars(strip_tags($id)));

        //Verificar
        $this->authorize('admin', $target);

        //Validar 1
        foreach($request->all() as $key=>$value){
            if($key == "body"){
                //Por enquanto nao filtra, ja que só ADMINs podem postar!!
                //Inseguro se qualquer um puder postar
            }else{
                $request[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        //Validar 2
        $entrada = $request->validate([
            'title' => 'required',
            'body' => 'string',
            'thumburl' => 'image',
            'user_id' => [\Illuminate\Validation\Rule::exists('users','id')]
        ]);

        //Files
        if($request->hasFile('thumburl')){
            //treat
            //TODO file sanitization?
            //store in public/post_thumbs uses disk from config
            $filepath = $request->file('thumburl')->store('public/post_thumbs');
            //dd($filepath);
        }else{
            $filepath = $target->thumburl; //o mesmo
        }

        //Update
        $target = $target->update(array_merge($entrada, ['thumburl' => $filepath]));


        return redirect(route('home'))->with('mensagem',"Post atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //TODO: verificar se o usuario tem essa permissao ou usar middleware
        $post = Post::findOrFail($id);
        //dd($post);
        $post->delete();

        return redirect(route('home'))->with('mensagem', 'Post deletado com sucesso!');
    }
}
