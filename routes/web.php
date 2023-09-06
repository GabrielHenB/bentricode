<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\DashboardController;
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

Route::middleware('can:admin')->group(function(){
    Route::resource('projetos', ProdutoController::class)->except(['index','show']);
    //dashboard
    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('dashboard/posts', [DashboardController::class,'posts']);
    Route::get('dashboard/projs',[DashboardController::class,'projects']);
    Route::get('dashboard/users',[DashboardController::class,'users']);
    //users
    Route::get('users/{user}/edit',[UserController::class,'edit'])->name('users.edit');
    Route::patch('users/{user}',[UserController::class,'update'])->name('users.update');
    Route::delete('users/{user}/destroy',[UserController::class,'destroy'])->name('users.destroy');
});
Route::resource('projetos', ProdutoController::class)->only(['index','show']);
Route::get('users/{user}',[UserController::class,'read']);