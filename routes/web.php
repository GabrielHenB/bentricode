<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdutoController;
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
Route::resource('projetos', ProdutoController::class);

Route::get('search', function (\Illuminate\Http\Request $request) {
    //dd($request);
    //TODO separar em um outro objeto
    foreach($request->all() as $chave=>$valor){
        $request[$chave] = filter_var($valor,FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if($request['squery'] == ""){
        $items = new \Illuminate\Support\Collection();
    }else{
        $items = \App\Models\Post::where('title','like','%'.$request['squery'].'%')->get();
    }
    
    
    return view('search', ['items' => $items]);
})->name('search');

Route::get('aboutus', function () {

    return view('aboutus');
})->name('aboutus');
// ================ ROTAS DE SESSAO E AUTH =============

//  =============== ROTAS ADMIN ========================
// TODO: agrupar rotas em um mesmo middleware admin

Route::get('dashboard', function () {
    //Por enquanto POSTS apenas para testar, depois mais

    return view('admin.dashboard', 
    [
        'posts' => \App\Models\Post::all(),
        'produtos' => \App\Models\Produto::all()
]);
})->name('dashboard');