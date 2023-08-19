<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produto = \App\Models\Produto::latest()->paginate(4);

        return view('produtos.index', ['produtos' => $produto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('admin');

        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('admin');
        
        //Impedir ataques
        foreach($request->all() as $key=>$value){
            if($key == 'description' || $key == 'body'){
                //do nothing so admins podem postar
            }else{
                $request[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        //Validacoes Request
        $entrada = $request->validate([
            "name" => "string|required|max:100",
            "description" => "string|required|max:200",
            "body" => "string",
            "is_completo" => "boolean|required",
            "start_date" => "date|required",
            "techs" => "string|required|min:2",
            "thumburl" => "image"
        ]);

        //File
        $filepath = ($request->hasFile('thumburl')) ? $request->file('thumburl')->store('public/proj_thumbs') : "#";

        //Create
        $entrada = Produto::create(array_merge($entrada, ['thumburl' => $filepath]));

        return redirect(route('home'))->with('mensagem',"Projeto adicionado com sucesso!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        $id = $produto->id;
        $id = htmlspecialchars(strip_tags($id));
        $item = \App\Models\Produto::findOrFail($id);
        
        return view('produtos.show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        //
        $this->authorize('admin', $produto);

        return view('produtos.edit', ['item'=>$produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        //O Produto vem automaticamente do Route Model Binding explicito
        $this->authorize('admin', $produto);
        
        //Impedir ataques
        foreach($request->all() as $key=>$value){
            if($key == 'description' || $key == 'body'){
                //do nothing so admins podem postar
            }else{
                $request[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        //Validacoes Request
        $entrada = $request->validate([
            "name" => "string|required|max:100",
            "description" => "string|required|max:200",
            "body" => "string",
            "is_completo" => "boolean|required",
            "start_date" => "date|required",
            "techs" => "string|required|min:2",
            "thumburl" => "image"
        ]);

        //File
        $filepath = ($request->hasFile('thumburl')) ? $request->file('thumburl')->store('public/proj_thumbs') : "#";

        //Create
        $entrada = $produto->update(array_merge($entrada, ['thumburl' => $filepath]));

        return redirect(route('home'))->with('mensagem',"Projeto alterado com sucesso!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $target = $produto->findOrFail($produto->id);
        $target->delete();
        //dd($target);
        return redirect(route('home'))->with('mensagem', 'Projeto deletado com sucesso!');
    }
}
