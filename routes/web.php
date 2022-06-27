<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;



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

Route::get('/', function () { return view('auth.login');});

##################### Chamadas de Views Dashboard #########################

Route::get('/dashboard', function () { return view('Fornecedores.todosFornecedores');})->middleware(['auth'])->name('dashboard');
Route::get('/produtos',function () { return view('Produtos.todosProdutos');})->name('produto');
Route::get('/fornecedores',function () { return view('Fornecedores.todosFornecedores');})->name('fornecedores');
Route::get('/marcas', function () { return view ('Marcas.todosMarcas');})->name('marcas');
Route::get('/client',function () { return view('Clients.todosClient');})->name('client');
Route::get('/portais',function () { return view('Portais.novoPortal');})->name('portais');
Route::get('/empresasCadastradas',function () { return view('EmpresasCadastradas.todosEmpresasCadastradas');})->name('empresasCadastradas');
Route::get('/canaisCompras',function () { return view('CanaisCompras.todosCanaisCompras');})->name('canaisCompras');
Route::get('/cotacao',function () { return view('Cotacao.novoCotacao');})->name('cotacao');

################## Chamadas de Views para novos Registros #################

Route::get('/novoProduto',function () { return view('Produtos.novoProduto');})->name('createProdutos');
Route::get('/novoFornecedor',function () { return view('Fornecedores.novoFornecedor');})->name('createFornecedores');
Route::get('/novoMarca', function () { return view ('Marcas.novoMarca');})->name('createMarcas');
Route::get('/novoClient',function () { return view('Clients.novoClient');})->name('createClient');
Route::get('/novoPortal',function () { return view('Portais.novoPortal');})->name('novoPortal');
Route::get('/novoEmpresasCadastradas',function () { return view('EmpresasCadastradas.novoEmpresasCadastradas');})->name('createEmpresasCadastradas');
Route::get('/novoCanaisCompras',function () { return view('CanaisCompras.novoCanaisCompras');})->name('CanaisCompras');

##################### Client #########################
Route::post('/client', [ClientController::class, 'store'])->name('storeClient');
Route::post('/client/{id}', [ClientController::class, 'update']);
Route::get('/client/{id}', [ClientController::class, 'show'] );
Route::delete('/client/{id}', [ClientController::class, 'destroy']);

##################### Fornecedores #########################
//Route::get('/fornecedores', [Fornecedoresontroller::class, 'index']);
//Route::post('/fornecedores', [Fornecedoresontroller::class, 'create']);
//Route::post('/fornecedores/{id}', [Fornecedoresontroller::class, 'update']);
//Route::get('/fornecedores/{id}', [Fornecedoresontroller::class, 'show'] );
//Route::delete('/fornecedores/{id}', [Fornecedoresontroller::class, 'destroy']);

##################### Portais #########################

Route::post('/portais', [ClientController::class, 'create']);
Route::post('/portais/{id}', [ClientController::class, 'update']);
Route::get('/portais/{id}', [ClientController::class, 'show']);
Route::delete('/portais/{id}', [ClientController::class, 'destroy']);

##################### Produtos #########################
Route::post('/produtos', [ClientController::class, 'create']);
Route::post('/produtos/{id}', [ClientController::class, 'update']);
Route::get('/produtos/{id}', [ClientController::class, 'show']);
Route::delete('/produtos/{id}', [ClientController::class, 'destroy']);

##################### Cotação #########################
Route::post('/produtos', [ClientController::class, 'create']);
Route::post('/produtos/{id}', [ClientController::class, 'update']);
Route::get('/produtos/{id}', [ClientController::class, 'show']);
Route::delete('/produtos/{id}', [ClientController::class, 'destroy']);

##################### Empresas Cadastradas #########################

Route::post('/produtos', [ClientController::class, 'create']);
Route::post('/produtos/{id}', [ClientController::class, 'update']);
Route::get('/produtos/{id}', [ClientController::class, 'show']);
Route::delete('/produtos/{id}', [ClientController::class, 'destroy']);

##################### Canais de Compra #########################
Route::post('/produtos', [ClientController::class, 'create']);
Route::post('/produtos/{id}', [ClientController::class, 'update']);
Route::get('/produtos/{id}', [ClientController::class, 'show']);
Route::delete('/produtos/{id}', [ClientController::class, 'destroy']);


##################### Marcas #########################



require __DIR__.'/auth.php';
