@extends('layouts.app')

@section('head')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/branding/capa.png') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="{{ asset('js/cadastro.js') }}"></script>
@endsection

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark site-navbar" aria-label="Main navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('glstreet') }}">GL Street</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavCadastro"
                aria-controls="mainNavCadastro" aria-expanded="false" aria-label="Abrir navegacao">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavCadastro">
                <div class="ms-auto site-nav-actions mt-3 mt-lg-0">
                    <a class="site-nav-link" href="{{ route('glstreet') }}">Inicio</a>
                    <a class="site-nav-link" href="{{ route('home') }}">Catalogo</a>
                    <div class="dropdown">
                        <button class="btn btn-dropdown-custom dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Categorias</button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('home') }}">Selecao Brasileira</a></li>
                            <li><a class="dropdown-item" href="{{ route('home') }}">Camisas</a></li>
                            <li><a class="dropdown-item" href="{{ route('home') }}">Tenis</a></li>
                            <li><a class="dropdown-item" href="{{ route('home') }}">Chuteiras</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection

@section('content')
<div>
        <main class="container">

            <h1>Cadastro GL Street</h1>

            <div class="input-box">
                <input type="email" placeholder="Nome completo" required>
                <i class='bx bx-bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Email" required>
                <i class='bx bx-bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="UsuÃ¡rio" required>
                <i class='bx bx-bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Senha" required>
                <i class='bx bx-bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder=" Confirmar Senha" required>
                <i class='bx bx-bxs-lock-alt'></i>
            </div>
            <button id="btnCadastro" class="login" type="submit">Cadastrar</button>


        </main>

    </div>
@endsection

