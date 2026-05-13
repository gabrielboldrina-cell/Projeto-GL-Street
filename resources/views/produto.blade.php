@extends('layouts.app')

@section('head')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Produto — GL Street</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="icon" type="image/png" href="{{ asset('images/branding/capa.png') }}" />
<link rel="stylesheet" href="{{ asset('css/theme.css') }}" />
<link rel="stylesheet" href="{{ asset('css/produto.css') }}" />
<script src="{{ asset('js/produto.js') }}"></script>
@endsection

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark site-navbar" aria-label="Main navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('glstreet') }}">GL Street</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#mainNavProduto" aria-controls="mainNavProduto"
            aria-expanded="false" aria-label="Abrir navegacao">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavProduto">
            <div class="ms-auto site-nav-actions mt-3 mt-lg-0">
                <a href="{{ route('glstreet') }}" class="site-nav-link">Início</a>
                <a href="{{ route('home') }}" class="site-nav-link">Catálogo</a>
                <div class="dropdown">
                    <button class="btn btn-dropdown-custom dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Categorias</button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('home') }}">Seleção Brasileira</a></li>
                        <li><a class="dropdown-item" href="{{ route('home') }}">Camisas</a></li>
                        <li><a class="dropdown-item" href="{{ route('home') }}">Tênis</a></li>
                        <li><a class="dropdown-item" href="{{ route('home') }}">Chuteiras</a></li>
                    </ul>
                </div>
                <a href="{{ route('login') }}" class="site-nav-link">Login</a>
                <a href="{{ route('carrinho') }}" class="site-cart-link">Carrinho</a>
            </div>
        </div>
    </div>
</nav>
@endsection

@section('content')

 Breadcrumb para navegação do produto
<div class="produto-breadcrumb">
    <a href="{{ route('glstreet') }}">Início</a>
    <span>›</span>
    <a href="{{ route('home') }}">Catálogo</a>
    <span>›</span>
    <span id="gl-breadcrumb-cat">...</span>
    <span>›</span>
    <span id="gl-breadcrumb-nome">Carregando...</span>
</div>
<div id="gl-produto-app"></div>



@endsection