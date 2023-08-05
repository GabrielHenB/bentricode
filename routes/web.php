<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Rotas da aplicacao
| Cada string rota tem um metodo  que corresponde ao HTTP method utilizado
| a ele associamos uma Closure ou Objeto Controller. Se for passado um controller
| existem algumas formas de se passar [Controller::class,'metodo'] ou "Controller@metodo"
| quando a rota string for acionada o Laravel roda o conjunto de middlewares associados
| e chama o Controlador ou a Closure fornecida nesse arquivo
*/

// ================= ROTAS PRINCIPAIS ==================
Route::get('/', function () {
    return view('home');
})->name('home');

//Route::get('/posts', [PostController::class,'index'])->name('posts');

//Cria ja endpoints CRUD-like
Route::resource('posts',PostController::class);

Route::get('search', function (\Illuminate\Http\Request $request) {
    //dd($request);
    //TODO separar em um outro objeto
    foreach($request->all() as $chave=>$valor){
        $request[$chave] = filter_var($valor,FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    $items = \App\Models\Post::where('title','like','%'.$request['squery'].'%')->get();
    
    return view('search', ['items' => $items]);
})->name('search');

//Testes rota criada temporariamente
Route::get('aboutus', function () {

    return view('aboutus');
})->name('aboutus');
// ================ ROTAS DE SESSAO E AUTH =============

