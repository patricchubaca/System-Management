<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProviderController;

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
Route::post('/client', [ClientController::class, 'create'] );
Route::post('/client/{id}', [ClientController::class, 'update'] );
Route::get('/client/{id}', [ClientController::class, 'show'] );
Route::delete('/client/{id}', [ClientController::class, 'destroy'] );

##################### Provider #########################
Route::get('/provider', [ProviderController::class, 'index']);
Route::post('/provider', [ProviderController::class, 'create'] );
Route::post('/provider/{id}', [ProviderController::class, 'update'] );
Route::get('/provider/{id}', [ProviderController::class, 'show'] );
Route::delete('/provider/{id}', [ProviderController::class, 'destroy'] );
