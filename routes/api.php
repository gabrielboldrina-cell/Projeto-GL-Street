<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CadastarProdutoController;
use App\Http\Controllers\ProdutoController;

Route::get('/user', function (Request $request) {
    return $request->user();})->middleware('auth:sanctum');

Route::post('/salvar_produto', [CadastarProdutoController::class, 'store']);
Route::put('/alterar_produto', [ProdutoController::class, 'alterar_produto'])->name('alterar_produto');


Route::delete('/deletar_produto', [ProdutoController::class, 'deletar_produto'])->name('deletar_produto');

