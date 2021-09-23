<?php

use Illuminate\Support\Facades\Route;

Route::prefix('tipo-ocorrencia')->group(function () {
    Route::get('/', 'App\Http\Controllers\TipoOcorrenciaControl@index');
    Route::get('/{tipoOcorrencia}', 'App\Http\Controllers\TipoOcorrenciaControl@show');
    Route::post('/', 'App\Http\Controllers\TipoOcorrenciaControl@store');
    Route::put('/{tipoOcorrencia}', 'App\Http\Controllers\TipoOcorrenciaControl@update');
    Route::delete('/{tipoOcorrencia}', 'App\Http\Controllers\TipoOcorrenciaControl@delete');
});

Route::prefix('ocorrencia-atividade')->group(function () {
    Route::get('/', 'App\Http\Controllers\OcorrenciaAtividadeControl@index');
    Route::get('/{ocorrenciaAtividade}', 'App\Http\Controllers\OcorrenciaAtividadeControl@show');
    Route::post('/', 'App\Http\Controllers\OcorrenciaAtividadeControl@store');
    Route::put('/{ocorrenciaAtividade}', 'App\Http\Controllers\OcorrenciaAtividadeControl@update');
    Route::delete('/{ocorrenciaAtividade}', 'App\Http\Controllers\OcorrenciaAtividadeControl@delete');
});

Route::prefix('grupo-atividade')->group(function () {
    Route::get('/', 'App\Http\Controllers\GrupoAtividadeControl@index');
    Route::get('/{grupoAtividade}', 'App\Http\Controllers\GrupoAtividadeControl@show');
    Route::post('/', 'App\Http\Controllers\GrupoAtividadeControl@store');
    Route::put('/{grupoAtividade}', 'App\Http\Controllers\GrupoAtividadeControl@update');
    Route::delete('/{grupoAtividade}', 'App\Http\Controllers\GrupoAtividadeControl@delete');
});

Route::prefix('')->group(function () {
    Route::get('/', 'App\Http\Controllers\AtividadeControl@index');
    Route::get('/{atividade}', 'App\Http\Controllers\AtividadeControl@show');
    Route::post('/', 'App\Http\Controllers\AtividadeControl@store');
    Route::put('/{atividade}', 'App\Http\Controllers\AtividadeControl@update');
    Route::delete('/{atividade}', 'App\Http\Controllers\AtividadeControl@delete');
});
