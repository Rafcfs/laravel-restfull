<?php

Route::apiResource('produtos', \App\Http\Controllers\api\ProdutoController::class);
Route::apiResource('campanhas', \App\Http\Controllers\api\CampanhaController::class);
Route::apiResource('descontos', \App\Http\Controllers\api\DescontoController::class);
Route::apiResource('grupos', \App\Http\Controllers\api\GrupoController::class);
Route::apiResource('cidades', \App\Http\Controllers\api\CidadeController::class);
