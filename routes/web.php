<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GLStreetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CadastarProdutoController;

Route::get('/', [GLStreetController::class, 'index'])->name('glstreet');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/cadastro', [CadastroController::class, 'index'])->name('cadastro');
Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho');
Route::get('/compra', [CompraController::class, 'index'])->name('compra');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto');
Route::get('/cadastro_produto', [CadastarProdutoController::class, 'salvar_produto'])->name('cadastro_produto');
Route::get('/lista_produto', [CadastarProdutoController::class, 'lista_produto'])->name('lista_produto');

Route::get('/vizualizar_produto/{id}', [ProdutoController::class, 'vizualizar_produto'])->name('vizualizar_produto');
