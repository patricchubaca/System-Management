<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\PortaisController;
use App\Http\Controllers\CompaniesController;
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

##################### Client #########################
Route::get('/clientes', [ClientesController::class, 'index']);

##################### Providers #########################
Route::get('/fornecedores', [FornecedoresController::class, 'index']);

##################### Produtos #########################
Route::get('/produtos', [ProdutosController::class, 'index']);

##################### Portais de Compra #########################
Route::get('/portais', [PortaisController::class, 'index']);

##################### Portais de Compra #########################
Route::get('/empresas', [CompaniesController::class, 'index']);

##################### Marcas #########################
Route::get('/marcas', [MarcasController::class, 'index']);
