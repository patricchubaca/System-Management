<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PortaisController;
use App\Http\Controllers\CompaniesController;

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
Route::get('/client', [ClientController::class, 'index']);

##################### Providers #########################
Route::get('/providers', [ProviderController::class, 'index']);

##################### Produtos #########################
Route::get('/produtos', [ProductsController::class, 'index']);

##################### Portais de Compra #########################
Route::get('/portais', [PortaisController::class, 'index']);

##################### Portais de Compra #########################
Route::get('/empresas', [CompaniesController::class, 'index']);
