<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\TesteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');

/**
 * Agrupamento de Rotas
 */
Route::prefix('/adm')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('adm.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('adm.fornecedores');
    Route::get('/produtos', function(){return 'Produtos';})->name('adm.produtos');
});

/**
 * Rotas de Teste
 */
Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');


//Route::get('/rota2', function(){
    //return redirect()->route('site.rota1');
//})->name('site.rota2');
    
//Route::redirect('/rota2', '/rota1');
 
Route::fallback(function(){
    echo 'Rota não encontrada. Clique <a href="'.route('site.index').'">aqui</a> para voltar.';
});