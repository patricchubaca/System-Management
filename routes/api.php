<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\PortaisController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\MarcasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) { return $request->user(); });

##################### Clientes #########################
Route::get('/clientes', [ClientesController::class, 'index']);
Route::delete('/cliente/{id}', [ClientesController::class, 'destroy']);

##################### Fornecedores #########################
Route::get('/fornecedores', [FornecedoresController::class, 'index']);
Route::delete('/fornecedores/{id}', [FornecedoresController::class, 'destroy']);

##################### Produtos #########################
Route::get('/produtos', [ProdutosController::class, 'index']);
Route::delete('/produtos/{id}', [ProdutosController::class, 'destroy']);

##################### Portais de Compra #########################
Route::get('/portais', [PortaisController::class, 'index']);
Route::delete('/portais/{id}', [PortaisController::class, 'destroy']);

##################### Portais de Compra #########################
Route::get('/empresas', [EmpresasController::class, 'index']);
Route::delete('/empresas/{id}', [EmpresasController::class, 'destroy']);

##################### Marcas #########################
Route::get('/marcas', [MarcasController::class, 'index']);
Route::delete('/marcas/{id}', [MarcasController::class, 'destroy']);