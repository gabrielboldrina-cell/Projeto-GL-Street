<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastarProdutoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\http\Middleware\LoginApiMiddleware;


//Crud Produto
Route::post('/salvar_produto', [CadastarProdutoController::class, 'store']);
Route::put('/alterar_produto', [ProdutoController::class, 'alterar_produto'])->name('alterar_produto');
Route::delete('/deletar_produto', [ProdutoController::class, 'deletar_produto'])->name('deletar_produto');
Route::get('/listar_produtos', [ProdutoController::class, 'listar_produtos'])->name('listar_produtos');
Route::get('/listar_produtos_simples', [ProdutoController::class, 'listar_produtos_simples'])->name('listar_produtos_simples');
Route::get('/ver_produto', [ProdutoController::class, 'ver_produto'])->name('ver_produto');

//Crud Usuario
Route::post('/salvar_usuario', [UsuarioController::class, 'salvar_usuario']);
Route::get('/ver_usuario', [UsuarioController::class, 'ver_usuario'])->middleware(LoginApiMiddleware::class);
Route::get('/listar_usuarios', [UsuarioController::class, 'listar_usuarios'])->middleware(LoginApiMiddleware::class);
Route::get('/listar_usuarios_simples', [UsuarioController::class, 'listar_usuarios_simples'])->middleware(LoginApiMiddleware::class);
Route::put('/alterar_usuario', [UsuarioController::class, 'alterar_usuario'])->middleware(LoginApiMiddleware::class);
Route::delete('/deletar_usuario', [UsuarioController::class, 'deletar_usuario'])->middleware(LoginApiMiddleware::class);

//Login SECURITY
Route::post('/login', [UsuarioController::class, 'login']); 
 