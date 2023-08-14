<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //Controlador de pesquisas, futuramente contemplar pesquisas por produtos e posts
    
    
    public function index(Request $request)
    {
        foreach($request->all() as $chave=>$valor){
            $request[$chave] = filter_var($valor,FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if($request['squery'] == ""){
            $items = new \Illuminate\Support\Collection();
        }else{
            $items = \App\Models\Post::where('title','like','%'.$request['squery'].'%')->get();
        }
        
        
        return view('search', ['items' => $items]);
    }
}
