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
//Route::resource('projetos', ProdutoController::class);
// OBS ISSO FOI SO PARA TESTAR O CAN ADMIN TEMPORARIAMENTE

// PESQUISAR 
Route::get('search',[\App\Http\Controllers\SearchController::class,"index"])->name('search');

// SOBRE NOS
Route::get('aboutus', fn()=>view('aboutus'))->name('aboutus');

// ================ ROTAS DE SESSAO E AUTH =============

Route::get('register',[\App\Http\Controllers\AuthController::class,"create"])->name('cadastro')->middleware('guest');
Route::get('login',[\App\Http\Controllers\AuthController::class,"index"])->name('login')->middleware('guest');
Route::post('login',[\App\Http\Controllers\AuthController::class,"login"])->middleware('guest');
Route::post('create',[\App\Http\Controllers\UserController::class,"store"])->middleware('guest');
Route::get('logout', [\App\Http\Controllers\AuthController::class,"logout"])->name('logout')->middleware('auth');

//  =============== ROTAS ADMIN ========================
// TODO: agrupar rotas em um mesmo middleware admin

Route::middleware('can:admin')->group(function(){
    Route::resource('projetos', ProdutoController::class)->except(['index','show']);
    //dashboard
    Route::get('dashboard', function () {
        return view('admin.dashboard', 
        [
            'posts' => \App\Models\Post::paginate(8),
            'produtos' => \App\Models\Produto::paginate(8)
    ]);
    })->name('dashboard');
});
Route::resource('projetos', ProdutoController::class)->only(['index','show']);
