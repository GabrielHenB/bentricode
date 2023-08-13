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

//Cria ja endpoints CRUD-like
Route::resource('posts',PostController::class);
Route::resource('projetos', ProdutoController::class);

// PESQUISAR 
Route::get('search',[\App\Http\Controllers\SearchController::class,"index"])->name('search');

// SOBRE NOS
Route::get('aboutus', fn()=>view('aboutus'))->name('aboutus');

// ================ ROTAS DE SESSAO E AUTH =============

Route::get('register', function () {
    return view('logon.register');
});
Route::get('login', function () {
    return view('logon.login');
});
Route::post('login', function () {
    dd(request()->all());
    return "Essa função não existe ainda meu nobre";
});
Route::post('create',[\App\Http\Controllers\UserController::class,"store"]);

//  =============== ROTAS ADMIN ========================
// TODO: agrupar rotas em um mesmo middleware admin

Route::get('dashboard', function () {
    return view('admin.dashboard', 
    [
        'posts' => \App\Models\Post::paginate(8),
        'produtos' => \App\Models\Produto::paginate(8)
]);
})->name('dashboard');