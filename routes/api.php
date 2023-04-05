<?php

use App\Http\Controllers\Api\DefeitoController;
use App\Http\Controllers\Api\VeiculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/veiculo',  [VeiculoController::class, 'store']);
Route::put('/veiculo/{id}', [VeiculoController::class, 'update']);
Route::delete('/veiculo/{id}', [VeiculoController::class, 'destroy']);
Route::get('/veiculo', [VeiculoController::class, 'findAll']);



Route::post('/defeito', [DefeitoController::class, 'store']);
Route::put('/defeito/{id}', [DefeitoController::class, 'update']);
Route::delete('/defeito/{id}', [DefeitoController::class, 'destroy']);
// Route::resource('defeito', DefeitoController::class);
