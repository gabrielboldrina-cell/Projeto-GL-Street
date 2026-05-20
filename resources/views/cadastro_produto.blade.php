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
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}?v={{ filemtime(public_path('css/theme.css')) }}">
        <link rel="stylesheet" href="{{ asset('css/GLStreet.css') }}?v={{ filemtime(public_path('css/GLStreet.css')) }}">
        <script src="cadastrar.js"></script>
    @endsection

    @section('content')
        <div class="container">
            <h3 class="text-center">Cadastro de Produto</h3>
            <div class="row mt-2 justify-content-center p-3 rounded shadow-sm bg-body-tertiary">
                <div class="col-lg-10 col-sm-12 col-md-10">
                    <label for="nome_produto">Nome do Produto:</label>
                    <input type="text" class="form-control from-control-sm" id="nome_produto" name="nome_produto"
                        placeholder="Digite o nome do produto">
                </div>
                <div class="col-lg-10 col-sm-12 col-md-10 mt-2">
                    <label for="descricao_produto">Descricao do Produto:</label>
                    <textarea class="form-control from-control-sm" id="descricao_produto" name="descricao_produto"
                        placeholder="Digite a descricao do produto"></textarea>
                </div>
                <div class="col-lg-5 col-sm-5 col-md-12 mt-2">
                    <label for="preco_produto">Preco do Produto:</label>
                    <input type="text" class="form-control from-control-sm" id="preco_produto" name="preco_produto"
                        placeholder="Digite o preco do produto">
                </div>
                <div class="col-lg-6 col-sm-5 col-md-12 mt-2">
                    <label for="quantidade_produto">Quantidade em Estoque:</label>
                    <input type="text" class="form-control from-control-sm" id="estoque_produto" name="quantidade_produto"
                        placeholder="Digite a quantidade do produto">
                </div>
                <div class="col-lg-6 col-sm-5 col-md-12 mt-2">
                    <label for="tipo_produto">Tipo do Produto:</label>
                    <input type="text" class="form-control from-control-sm" id="tipo_produto" name="tipo_produto"
                        placeholder="Digite o tipo do produto">
                </div>
                <div class="col-lg-6 col-sm-5 col-md-12 mt-2">
                    <label for="data_validade">Data Validade:</label>
                    <input type="date" class="form-control from-control-sm" id="data_validade" name="data_validade">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-5 mt-2">
                    <button class="btn btn-success btn-sm" id="btn_cadastrar_produto">Cadastrar Produto</button>
                </div>
            </div>
        </div>
    @endsection
