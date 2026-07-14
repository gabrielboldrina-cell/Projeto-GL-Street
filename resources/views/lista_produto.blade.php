@extends('layouts.app')

@section('bs_theme', 'dark')

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/png" href="{{ url('images/branding/capa.png') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lista_produto.css') }}">
@endsection

@section('content')
    <div class="container">
        
            <a href="{{ route('cadastro_produto') }}" class="btn btn-danger mb-3 product-btn-primary">
                Cadastrar Novo Produto
            </a>
            <a href="{{ route('home') }}" class="btn btn-danger mb-3 product-btn-primary">
                Voltar
            </a>
       
    
        <h1 class="text-center">Lista de Produtos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Estoque</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Visualizar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $p)
                    <tr>
                        <th scope="row">{{ $p->id }}</th>
                        <td>{{ $p->nome }}</td>
                        <td title="{{ $p->descricao }}">{{ $p->descricao }}</td>
                        <td>{{ $p->preco }}</td>
                        <td>{{ $p->estoque }}</td>
                        <td>{{ $p->tipo }}</td>
                        <td>
                            <a href="{{ route('vizualizar_produto', ['id' => $p->id]) }}" class="btn btn-primary">
                                Visualizar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
@endsection
