<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () { return view('Fornecedores.todosFornecedores'); })->middleware(['auth'])->name('dashboard');


##################### Client #########################
Route::post('/client', [ClientController::class, 'create'] );
Route::post('/client/{id}', [ClientController::class, 'update'] );
Route::get('/client/{id}', [ClientController::class, 'show'] );
Route::delete('/client/{id}', [ClientController::class, 'destroy'] );

##################### Fornecedores #########################
Route::get('/fornecedores', [Fornecedoresontroller::class, 'index']);
Route::post('/fornecedores', [Fornecedoresontroller::class, 'create'] );
Route::post('/fornecedores/{id}', [Fornecedoresontroller::class, 'update'] );
Route::get('/fornecedores/{id}', [Fornecedoresontroller::class, 'show'] );
Route::delete('/fornecedores/{id}', [Fornecedoresontroller::class, 'destroy'] );

##################### Portais #########################
Route::post('/portais', [ClientController::class, 'create'] );
Route::post('/portais/{id}', [ClientController::class, 'update'] );
Route::get('/portais/{id}', [ClientController::class, 'show'] );
Route::delete('/portais/{id}', [ClientController::class, 'destroy'] );

##################### Produtos #########################
Route::post('/produtos', [ClientController::class, 'create'] );
Route::post('/produtos/{id}', [ClientController::class, 'update'] );
Route::get('/produtos/{id}', [ClientController::class, 'show'] );
Route::delete('/produtos/{id}', [ClientController::class, 'destroy'] );

require __DIR__.'/auth.php';
