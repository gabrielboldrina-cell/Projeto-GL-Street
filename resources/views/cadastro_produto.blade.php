@extends('layouts.app')

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/branding/capa.png') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css')}}">
    
    <script src="cadastrar.js"></script>
@endsection

@section('content')
    <div class="product-register-page">
        <div class="container product-register-shell">
            <section class="product-register-card">
                <header class="product-register-header">
                    <p class="product-register-kicker">Area administrativa</p>
                    <h1>Cadastro de Produto</h1>
                    <p class="product-register-subtitle">
                        Preencha os campos para incluir um novo item no estoque da GL Street.
                    </p>
                </header>

                <div class="product-register-grid">
                    <div class="product-field product-field--full">
                        <label for="nome_produto">Nome do Produto</label>
                        <input type="text" class="form-control form-control-lg" id="nome_produto" name="nome_produto"
                            placeholder="Ex.: Camiseta Oversized Streetwear">
                    </div>

                    <div class="product-field product-field--full">
                        <label for="descricao_produto">Descricao do Produto</label>
                        <textarea class="form-control" id="descricao_produto" name="descricao_produto" rows="4"
                            placeholder="Detalhe modelagem, tecido, acabamento e estilo."></textarea>
                    </div>

                    <div class="product-field">
                        <label for="preco_produto">Preco do Produto</label>
                        <input type="text" class="form-control" id="preco_produto" name="preco_produto"
                            placeholder="Ex.: 189,90">
                    </div>

                    <div class="product-field">
                        <label for="estoque_produto">Quantidade em Estoque</label>
                        <input type="text" class="form-control" id="estoque_produto" name="quantidade_produto"
                            placeholder="Ex.: 36">
                    </div>

                    <div class="product-field">
                        <label for="tipo_produto">Tipo do Produto</label>
                        <input type="text" class="form-control" id="tipo_produto" name="tipo_produto"
                            placeholder="Ex.: Camiseta">
                    </div>

                </div>

                <div class="product-register-actions">
                    <button class="btn btn-success product-btn-primary" id="btn_cadastrar_produto" type="button">
                        Cadastrar Produto
                    </button>
                    <a href="{{ route('lista_produto') }}" class="btn btn-outline-light product-btn-secondary">
                        Lista de Produtos
                    </a>
                </div>
            </section>
        </div>
    </div>
@endsection
