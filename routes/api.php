<?php

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

Route::get('tipo-ocorrencia', 'App\Http\Controllers\TipoOcorrenciaControl@index');
Route::get('tipo-ocorrencia/{tipoOcorrencia}', 'App\Http\Controllers\TipoOcorrenciaControl@show');
Route::post('tipo-ocorrencia', 'App\Http\Controllers\TipoOcorrenciaControl@store');
Route::put('tipo-ocorrencia/{tipoOcorrencia}', 'App\Http\Controllers\TipoOcorrenciaControl@update');
Route::delete('tipo-ocorrencia/{tipoOcorrencia}', 'App\Http\Controllers\TipoOcorrenciaControl@delete');