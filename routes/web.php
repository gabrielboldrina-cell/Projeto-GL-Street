<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'glstreet')->name('glstreet');
Route::view('/glstreet', 'glstreet');
Route::view('/home', 'home')->name('home');
Route::view('/login', 'login')->name('login');
Route::view('/cadastro', 'cadastro')->name('cadastro');
Route::view('/carrinho', 'carrinho')->name('carrinho');
Route::view('/compra', 'compra')->name('compra');
Route::view('/sobre', 'sobre')->name('sobre');

Route::redirect('/GLStreet.html', '/');
Route::redirect('/home.html', '/home');
Route::redirect('/login.html', '/login');
Route::redirect('/cadastro.html', '/cadastro');
Route::redirect('/carinho.html', '/carrinho');
Route::redirect('/compra.html', '/compra');
Route::redirect('/Sobre.html', '/sobre');
Route::view('/produto', 'produto')->name('produto');