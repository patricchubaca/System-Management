<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedoresController;

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

#################################################### clientes #####################################################################
Route::get('/cliente',function () { return view('Clientes.novoCliente');})->name('createCliente');
Route::post('/cliente', [ClienteController::class, 'store'])->name('storeCliente');
Route::post('/cliente/{id}', [ClienteController::class, 'update'])->name('updateCliente');
Route::get('/cliente/{id}', [ClienteController::class, 'show'] )->name('showCliente');
Route::delete('/cliente/{id}', [ClienteController::class, 'destroy'])->name('destroyCliente');

############################################ Fornecedores #######################################################################
Route::get('/fornecedor',function () { return view('Fornecedores.todosFornecedores');})->name('fornecedor');
Route::post('/fornecedore', [FornecedoresController::class, 'store'])->name('storeProvider')->name('storeFornecedor');
Route::post('/fornecedore/{id}', [FornecedoresController::class, 'update'])->name('updateFornecedor');
Route::get('/fornecedore/{id}', [FornecedoresController::class, 'show'] )->name('showFornecedor');
Route::delete('/fornecedore/{id}', [FornecedoresController::class, 'destroy'])->name('destroyFornecedor');

#################################################### Marcas ######################################################################
Route::post('/marca', [MarcaController::class, 'store']);
Route::get('/marca', [MarcaController::class, 'create']);
Route::post('/marca/{id}', [MarcaController::class, 'update']);
Route::get('/marca/{id}', [MarcaController::class, 'show']);
Route::delete('/marca/{id}', [MarcaController::class, 'destroy']);

################################################ Produtos #########################################################################
Route::get('/produtos', [Produtos::class, 'create']);
Route::post('/produtos', [Produtos::class, 'store']);
Route::post('/produtos/{id}', [Produtos::class, 'update']);
Route::get('/produtos/{id}', [Produtos::class, 'show']);
Route::delete('/produtos/{id}', [Produtos::class, 'destroy']);

############################################## Cotação #############################################################################
Route::get('/cotacao', [CotacaoController::class, 'create']);
Route::post('/cotacao', [CotacaoController::class, 'store']);
Route::post('/cotacao/{id}', [CotacaoController::class, 'update']);
Route::get('/cotacao/{id}', [CotacaoController::class, 'show']);
Route::delete('/cotacao/{id}', [CotacaoController::class, 'destroy']);

###################################################### Empresas Cadastradas ########################################################
Route::get('/empresa', [EmpresasController::class, 'create']);
Route::post('/empresa', [EmpresasController::class, 'store']);
Route::post('/empresa/{id}', [EmpresasController::class, 'update']);
Route::get('/empresa/{id}', [EmpresasController::class, 'show']);
Route::delete('/empresa/{id}', [EmpresasController::class, 'destroy']);

############################################### Canais de Compra ###################################################################
Route::get('/canais', [CanaisController::class, 'create']);
Route::post('/canais', [CanaisController::class, 'store']);
Route::post('/canais/{id}', [CanaisController::class, 'update']);
Route::get('/canais/{id}', [CanaisController::class, 'show']);
Route::delete('/canais/{id}', [CanaisController::class, 'destroy']);





require __DIR__.'/auth.php';
