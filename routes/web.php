<?php


use Illuminate\Support\Facades\Route;
use Illuminate\App\Http\Middleware\CheckUsuarioLogado;

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


Route::get('/atendimento', [App\Http\Controllers\AgendamentoController::class, 'IrSitePrincipal']);

Route::get('Agendar-Atendimento', function () {
    return view('siteagendamento');
});

Route::get('/formulario', [App\Http\Controllers\FormularioController::class, 'IrAcessarFormulario']);

Route::post('/cadastrar-formulario', [App\Http\Controllers\FormularioController::class, 'cadastrarFormulario']);

Route::get('/pagina-atendente', [App\Http\Controllers\OperadorController::class, 'IrLogar']);

Route::post('/usuario-logado', [App\Http\Controllers\OperadorController::class, 'logarOperador']);

Route::group(['middleware' => 'CheckUsuarioLogado'], function(){ 

    Route::get('/painel_de_agendamentos', [App\Http\Controllers\PainelController::class, 'IrPainel']);

    Route::get('/logout', [App\Http\Controllers\OperadorController::class, 'getLogout']);

});