<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CotacaoController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\CanaisController;
use App\Http\Controllers\EmpresasController;


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

Route::get('/dashboard', function () { return view('Cotacao.todosCotacao');})->middleware(['auth'])->name('dashboard');

Route::get('/cotacaoObjeto', function () { return view('Cotacao.novoObjetoCotacao');})->name('cotacaoObjeto');
Route::get('/cotacaoPreco', function () { return view('Cotacao.novoPrecoCotacao');})->name('cotacaoPreco');


#################################################### clientes #####################################################################
Route::get('/clientes', function () { return view('Clientes.todosCliente');})->name('dashboardClientes');
Route::get('/cliente',[ClientesController::class, 'create'])->name('createCliente');
Route::post('/cliente', [ClientesController::class, 'store'])->name('storeCliente');
Route::post('/cliente/{id}', [ClientesController::class, 'update'])->name('updateCliente');
Route::get('/cliente/{id}', [ClientesController::class, 'show'] )->name('showCliente');
Route::delete('/cliente/{id}', [ClientesController::class, 'destroy'])->name('destroyCliente');

############################################ Fornecedores #######################################################################
Route::get('/fornecedores', function () { return view('Fornecedores.todosFornecedores');})->name('dashboardFornecedores');
Route::get('/fornecedor', function () { return view('');})->name('dashboardCliente');
Route::get('/fornecedor',[FornecedoresController::class, 'create'])->name('createFornecedor');
Route::post('/fornecedor', [FornecedoresController::class, 'store'])->name('storeFornecedor');
Route::post('/fornecedor/{id}', [FornecedoresController::class, 'update'])->name('updateFornecedor');
Route::get('/fornecedor/{id}', [FornecedoresController::class, 'show'] )->name('showFornecedor');
Route::delete('/fornecedor/{id}', [FornecedoresController::class, 'destroy'])->name('destroyFornecedor');

#################################################### Marcas ######################################################################
Route::get('/marcas', function () { return view('Marcas.todosMarcas');})->name('dashboardMarcas');
Route::get('/marca', [MarcasController::class, 'create'])->name('createMarca');
Route::post('/marca', [MarcasController::class, 'store'])->name('storeMarca');
Route::post('/marca/{id}', [MarcasController::class, 'update'])->name('updateMarca');
Route::get('/marca/{id}', [MarcasController::class, 'show'])->name('showMarca');
Route::delete('/marca/{id}', [MarcasController::class, 'destroy'])->name('destroyMarca');

################################################ Produtos #########################################################################
Route::get('/produtos', function () { return view('Produtos.todosProdutos');})->name('dashboardProdutos');
Route::get('/produto', [ProdutosController::class, 'create'])->name('createProduto');
Route::post('/produto', [ProdutosController::class, 'store'])->name('storeProduto');
Route::post('/produto/{id}', [ProdutosController::class, 'update'])->name('updateProduto');
Route::get('/produto/{id}', [ProdutosController::class, 'show'])->name('showProduto');
Route::delete('/produto/{id}', [ProdutosController::class, 'destroy'])->name('destroyProduto');

############################################## Cotação #############################################################################
Route::get('/cotacaos', function () { return view('Cotacao.todosCotacao');})->name('dashboardCotacao');
Route::get('/cotacao', [CotacaoController::class, 'create'])->name('createCotacao');
Route::post('/cotacao', [CotacaoController::class, 'store'])->name('storeCotacao');
Route::post('/cotacao/{id}', [CotacaoController::class, 'update'])->name('updateCotacao');
Route::get('/cotacao/{id}', [CotacaoController::class, 'show'])->name('showCotacao');
Route::delete('/cotacao/{id}', [CotacaoController::class, 'destroy'])->name('destroyCotacao');

###################################################### Empresas Cadastradas ########################################################
Route::get('/empresas', function () { return view('Empresas.todasEmpresasCadastradas');})->name('dashboardEmpresas');
Route::get('/empresa', [EmpresasController::class, 'create'])->name('createEmpresa');
Route::post('/empresa', [EmpresasController::class, 'store'])->name('storeEmpresa');
Route::post('/empresa/{id}', [EmpresasController::class, 'update'])->name('updateEmpresa');
Route::get('/empresa/{id}', [EmpresasController::class, 'show'])->name('showEmpresa');
Route::delete('/empresa/{id}', [EmpresasController::class, 'destroy'])->name('destroyEmpresa');

############################################### Canais de Compra ###################################################################
Route::get('/canals', function () { return view('Canais.todosCanaisCompras');})->name('dashboardCanais');
Route::get('/canais', [CanaisController::class, 'create'])->name('createCanais');
Route::post('/canais', [CanaisController::class, 'store'])->name('storeCanais');
Route::post('/canais/{id}', [CanaisController::class, 'update'])->name('updateCanais');
Route::get('/canais/{id}', [CanaisController::class, 'show'])->name('showCanais');
Route::delete('/canais/{id}', [CanaisController::class, 'destroy'])->name('destroyCanais');


require __DIR__.'/auth.php';
