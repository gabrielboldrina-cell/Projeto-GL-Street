@extends('layouts.app')

@section('head')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Home</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
  crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
  crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link rel="icon" type="image/png" href="{{ url('images/branding/capa.png') }}" />
<link rel="stylesheet" href="{{ url('css/theme.css') }}" />
<link rel="stylesheet" href="{{ url('css/home.css') }}" />

<script src="{{ url('js/sweetalert.js') }}"></script>
<script src="{{ url('js/filtro.js') }}"></script>
<script src="{{ url('cadastrar.js') }}"></script>

@endsection

@section('navbar')
<nav
  class="navbar navbar-expand-lg navbar-dark site-navbar"
  aria-label="Main navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('glstreet') }}">GL Street</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#mainNavHome"
      aria-controls="mainNavHome"
      aria-expanded="false"
      aria-label="Abrir navegacao">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavHome">
      <div class="ms-auto site-nav-actions mt-3 mt-lg-0">
        <a class="site-nav-link" href="{{ route('home') }}">Catalogo</a>
        <div class="dropdown">
          <button
            class="btn btn-dropdown-custom dropdown-toggle"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Categorias
          </button>
          <a class="site-nav-link" href="{{ route('sobre') }}">Sobre</a>

          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="{{ route('home') }}">Selecao Brasileira</a>
            </li>
            <li><a class="dropdown-item" href="{{ route('home') }}">Camisas</a></li>
            <li><a class="dropdown-item" href="{{ route('home') }}">Tenis</a></li>
            <li><a class="dropdown-item" href="{{ route('home') }}">Chuteiras</a></li>
          </ul>
        </div>
        <a class="site-nav-link" href="{{ route('login') }}">Login</a>
        <a class="site-nav-link" href="{{ route('cadastro') }}">Cadastra-se</a>
        <a href="{{ route('carrinho') }}" class="site-cart-link">Carrinho <span id="contador"></span></a>
      </div>
    </div>
  </div>
</nav>
@endsection

@section('content')
<div class="page-layout">
  <div class="sidebar">
    <ul class="list-unstyled ps-0 mb-0">
      <li class="mb-1">
        <button
          class="btn-toggle d-inline-flex align-items-center rounded collapsed"
          data-bs-toggle="collapse"
          data-bs-target="#home-collapse"
          aria-expanded="true">Genero</button>
        <div class="collapse show" id="home-collapse">
          <ul
            class="btn-toggle-nav list-unstyled fw-normal pb-1 small ps-2">
            <li><button class="btn btn-link p-0">Masculino</button></li>
            <li><button class="btn btn-link p-0">Feminino</button></li>
            <li><button class="btn btn-link p-0">Unissex</button></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button
          class="btn-toggle d-inline-flex align-items-center rounded collapsed"
          data-bs-toggle="collapse"
          data-bs-target="#tipoproduto"
          aria-expanded="false"> Tipo de Produto
        </button>
        <div class="collapse" id="tipoproduto">
          <ul
            class="btn-toggle-nav list-unstyled fw-normal pb-1 small ps-2">
            <li><button class="btn btn-link p-0">Todos</button></li>
            <li>
              <button class="btn btn p-0" id="Seleção">
                Seleção Brasileira
              </button>
            </li>
            <li>
              <button class="btn btn-link p-0" id="camisa">Camisas</button>
            </li>
            <li>
              <button class="btn btn-link p-0" id="tenis">Tenis</button>
            </li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button
          class="btn-toggle d-inline-flex align-items-center rounded collapsed"
          data-bs-toggle="collapse"
          data-bs-target="#esportes" aria-expanded="false"> Esportes </button>
        <div class="collapse" id="esportes">
          <ul
            class="btn-toggle-nav list-unstyled fw-normal pb-1 small ps-2">
            <li>
              <button class="btn btn-link p-0" id="chuteira">
                Chuteira
              </button>
              <button class="btn btn-link p-0" id="futebol">
                Futebol
              </button>
              <button class="btn btn-link p-0" id="Basquete">
                Basquete
              </button>

            </li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button
          class="btn-toggle d-inline-flex align-items-center rounded collapsed"
          data-bs-toggle="collapse"
          data-bs-target="#esportes" aria-expanded="false"> Arena GL </button>
        <div class="collapse" id="ArenaGL">
          <ul
            class="btn-toggle-nav list-unstyled fw-normal pb-1 small ps-2">
            <li>
              <button class="btn btn-link p-0" id="brasileirão">
                tabela Brasileirão A
              </button>
              <button class="btn btn-link p-0" id="Rodadas">
                Melhores momentos das Rodadas
              </button>
              <button class="btn btn-link p-0" id="NBA">
                Tabela NBA
              </button>
              <button class="btn btn-link p-0" id="Melhores Momentos">
                Melhores momentos da NBA
              </button>

            </li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button
          class="btn-toggle d-inline-flex align-items-center rounded collapsed"
          data-bs-toggle="collapse"
          data-bs-target="#account-collapse"
          aria-expanded="false">
          Conta
        </button>
        <div class="collapse" id="account-collapse">
          <ul
            class="btn-toggle-nav list-unstyled fw-normal pb-1 small ps-2">
            <li><a href="##">Configuracoes</a></li>
            <li><a href="##">Trocar de Conta</a></li>
            <li><a href="{{ route('cadastro_produto') }}">Cadastrar Produto</a></li>
            <li><a href="{{ route('vizualizar_produto', ['id' => 1]) }}">Visualizar Produto</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>

  <div class="content-area">
    <div class="cards-grid">
      <div
        class="selecao"
        data-type="selecao-brasileira"
        data-gender="feminino">
        <div class="produto-card card camisa camisa feminina">
          <img src="{{ asset('images/selecao/foto6.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Camisa Brasil Jordan II 2026/27 Jogadora Feminina
            </h5>
            <p class="card-text">R$ 429,99</p>
            <button class="btn btn-sm btn-danger" id="btnJogadora">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div
        class="selecao"
        data-type="selecao-brasileira"
        data-gender="feminino">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/selecao/camisa7.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Camisa Brasil Jordan I 2026/27 Torcedora Pro Feminina
            </h5>
            <p class="card-text">R$ 749,99</p>
            <a class="btn btn-sm btn-danger" href="{{ route('produto') }}">
              Ver Produto
            </a>
          </div>
        </div>
      </div>
      <div
        class="selecao"
        data-type="selecao-brasileira"
        data-gender="feminino">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/selecao/camisa7.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Camisa Brasil Jordan I 2026/27 Jogadora Feminina
            </h5>
            <p class="card-text">R$ 749,99</p>
            <button class="btn btn-sm btn-danger" id="btnJorda1">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div
        class="selecao"
        data-type="selecao-brasileira"
        data-gender="feminino">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/selecao/foto6.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Camisa Brasil Jordan II 2026/27 Torcedora Pro Feminina
            </h5>
            <p class="card-text">R$ 429,99</p>
            <button class="btn btn-sm btn-danger" id="btnJorda2">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div
        class="selecao"
        data-type="selecao-brasileira"
        data-gender="unissex">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/acessorios/bone.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">Bone Brasil Jordan Club Unissex</h5>
            <p class="card-text">R$ 189,99</p>
            <button class="btn btn-sm btn-danger" id="btnUnissex">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div
        class="selecao"
        data-type="selecao-brasileira"
        data-gender="masculino">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/selecao/foto5.jpg') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Camisa Brasil Jordan II 2026/27 Jogador Masculina
            </h5>
            <p class="card-text">R$ 729,99</p>
            <button class="btn btn-sm btn-danger" id="btnJordan">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>
      <div
        class="selecao"
        data-type="selecao-brasileira"
        data-gender="feminino">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/selecao/camisa7.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Camisa Brasil Nike I 2026/27 Torcedora Pro Feminina
            </h5>
            <p class="card-text">R$ 429,99</p>
            <button class="btn btn-sm btn-danger" id="btnFeminina">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div
        class="selecao"
        data-type="selecao-brasileira"
        data-gender="masculino">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/selecao/camisa6.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Camisa Brasil Nike I 2026/27 Jogador Masculina
            </h5>
            <p class="card-text">R$ 729,99</p>
            <button class="btn btn-sm btn-danger" id="btn2026">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div
        class="selecao"
        data-type="selecao-brasileira"
        data-gender="masculino">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/selecao/foto5.jpg') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Camisa Brasil Jordan II 2026/27 Torcedora Pro Masculina
            </h5>
            <p class="card-text">R$ 729,99</p>
            <button class="btn btn-sm btn-danger" id="btnMasculina">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div
        class="selecao"
        data-type="selecao-brasileira"
        data-gender="infantil">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/selecao/camisa8.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Camisa Brasil Nike I 2026/27 Torcedor Pro Infantil
            </h5>
            <p class="card-text">R$ 369,99</p>
            <button class="btn btn-sm btn-danger" id="btnBrasil">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div
        class="selecao"
        data-type="selecao-brasileira"
        data-gender="feminino">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/selecao/camisa7.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Camisa Brasil Nike I 2026/27 Torcedora Pro Feminina
            </h5>
            <p class="card-text">R$ 429,99</p>
            <button class="btn btn-sm btn-danger" id="btnInfantil">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>
      <div class="tenis" data-type="tenis" data-gender="masculino">
        <div class="produto-card card tenis">
          <img src="{{ asset('images/tenis/tenis1.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Tenis Nike Air Zoom Alphafly 3 Masculino
            </h5>
            <p class="card-text">R$ 2.169,99</p>
            <button class="btn btn-sm btn-danger" id="btntenis">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="tenis" data-type="tenis" data-gender="masculino">
        <div class="produto-card card tenis">
          <img src="{{ asset('images/tenis/tenis2.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Tenis Nike Air Zoom Alphafly 3 Kipchoge Masculino
            </h5>
            <p class="card-text">R$ 2.169,99</p>
            <button class="btn btn-sm btn-danger" id="btnairzoom">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="tenis" data-type="tenis" data-gender="masculino">
        <div class="produto-card card tenis">
          <img src="{{ asset('images/tenis/tenis3.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Tenis Nike Air Zoom Alphafly 3 Masculino
            </h5>
            <p class="card-text">R$ 2.074,99</p>
            <button class="btn btn-sm btn-danger" id="btnAlphafly">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="tenis" data-type="tenis" data-gender="masculino">
        <div class="produto-card card tenis">
          <img src="{{ asset('images/tenis/tenis4.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Tenis Nike ZoomX VaporFly 3 Masculino
            </h5>
            <p class="card-text">R$ 1.581,24</p>
            <button class="btn btn-sm btn-danger" id="btnvapor">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="tenis" data-type="tenis">
        <div class="produto-card card tenis">
          <img src="{{ asset('images/tenis/tenis6.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">Tenis Nike Structure Plus</h5>
            <p class="card-text">R$ 1.099,99</p>
            <button class="btn btn-sm btn-danger" id="btnstructure">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="tenis" data-type="tenis" data-gender="masculino">
        <div class="produto-card card tenis">
          <img src="{{ asset('images/tenis/tenis5.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">Tenis Nike Pegasus Plus Masculino</h5>
            <p class="card-text">R$ 997,49</p>
            <button class="btn btn-sm btn-danger" id="btnpegasus">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="chuteira2" data-type="chuteira">
        <div class="produto-card card tenis">
          <img
            src="{{ asset('images/chuteiras/fotochuteira2.png') }}"
            class="card-img-top"
            alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Chuteira Nike Zoom Vapor 16 Academy Futsal Verde Neon
            </h5>
            <p class="card-text">R$ 599,89</p>
            <button class="btn btn-sm btn-danger" id="btn16">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="chuteira2" data-type="chuteira">
        <div class="produto-card card tenis">
          <img
            src="{{ asset('images/chuteiras/fotochuteira.png') }}"
            class="card-img-top"
            alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Chuteira Campo Nike Mercurial Vapor 16 Club
            </h5>
            <p class="card-text">R$ 218,49</p>
            <button class="btn btn-sm btn-danger" id="btnclub">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>
      <div class="chuteira2" data-type="chuteira">
        <div class="produto-card card tenis">
          <img
            src="{{ asset('images/chuteiras/chuteira7.png') }}"
            class="card-img-top"
            alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Chuteira Campo Jordan Tiempo Maestro Elite SE
            </h5>
            <p class="card-text">R$ 2.279,99</p>
            <button class="btn btn-sm btn-danger" id="btnElite">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="chuteira2" data-type="chuteira">
        <div class="produto-card card tenis">
          <img
            src="{{ asset('images/chuteiras/chuteira3.png') }}"
            class="card-img-top"
            alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Chuteira Campo Nike Phantom 6 Academy Low
            </h5>
            <p class="card-text">R$ 474,99</p>
            <button class="btn btn-sm btn-danger" id="btnike">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="chuteira2" data-type="chuteira">
        <div class="produto-card card tenis">
          <img
            src="{{ asset('images/chuteiras/chuteira4.png') }}"
            class="card-img-top"
            alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Chuteira Nike Campo Mercurial Vapor 15 Clube
            <p class="card-text">R$ 314,93</p>
            <button class="btn btn-sm btn-danger" id="btn15">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="chuteira2" data-type="chuteira">
        <div class="produto-card card tenis">
          <img
            src="{{ asset('images/chuteiras/chuteira5.png') }}"
            class="card-img-top"
            alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Chuteira Nike Zoom Vapor 16 Pro Kylian Mbappe Campo
            </h5>
            <p class="card-text">R$ 740,99</p>
            <button class="btn btn-sm btn-danger" id="btn321">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="chuteira2" data-type="chuteira">
        <div class="produto-card card tenis">
          <img
            src="{{ asset('images/chuteiras/chuteira6.png') }}"
            class="card-img-top"
            alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Chuteira Campo Jordan Tiempo Maestro Elite SE
            </h5>
            <p class="card-text">R$ 2.279,99</p>
            <button class="btn btn-sm btn-danger" id="btn423">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="camisa1" data-type="camisa">
        <div class="produto-card card camisa">
          <img
            src="{{ asset('images/camisas/camisanike.png') }}"
            class="card-img-top"
            alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Camiseta Nike DF ACD23 Top SS Branca e Preta
            </h5>
            <p class="card-text">R$ 139,41</p>
            <button class="btn btn-sm btn-danger" id="btndf">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="camisa1" data-type="camisa" data-gender="masculino">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/camisas/camisa2.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Camisa Nike Dri-Fit Park Masculina - Preta
            </h5>
            <p class="card-text">R$ 149,99</p>
            <button class="btn btn-sm btn-danger" id="btndrifit">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="camisa1" data-type="camisa">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/camisas/camisa3.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">Camiseta Nike Desenho</h5>
            <p class="card-text">R$ 80,63</p>
            <button class="btn btn-sm btn-danger" id="btndesenho">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="camisa1" data-type="camisa" data-gender="masculino">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/camisas/camisa4.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">
              Camisa Nike Run SS Fiesta Floral Masculina
            </h5>
            <p class="card-text">R$ 109,90</p>
            <button class="btn btn-sm btn-danger" id="btnfiesta">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="camisa1" data-type="camisa">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/camisas/camisa5.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">Camisa Nike Estatua Da Liberdade</h5>
            <p class="card-text">R$ 99,99</p>
            <button class="btn btn-sm btn-danger" id="btnestatua">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>

      <div class="camisa1" data-type="camisa">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/camisas/CamisaOversized.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">Camisa Oversized Preta/100% Algodão</h5>
            <p class="card-text">R$ 89,99</p>
            <button class="btn btn-sm btn-danger" id="btnestatua">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>
      <div class="camisa1" data-type="camisa">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/camisas/CamisaOversizedBranca.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">Camisa Oversized Branca/100% Algodão</h5>
            <p class="card-text">R$ 89,99</p>
            <button class="btn btn-sm btn-danger" id="btnestatua">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>
      <div class="camisa1" data-type="camisa">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/camisas/CamisaGLStreet.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">GL Street / Basquete 100% Algodão</h5>
            <p class="card-text">R$ 109,90</p>
            <button class="btn btn-sm btn-danger" id="btnestatua">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>
      <div class="camisa1" data-type="camisa">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/camisas/Camisa6.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">GL Street / Abstract Clash Tee/ 100% Algodão </h5>
            <p class="card-text">R$ 79,99</p>
            <button class="btn btn-sm btn-danger" id="btnestatua">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>
      <div class="camisa1" data-type="camisa">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/camisas/GL Street Blind Chaos Tee.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">GL Street / Blind Chaos Tee/ 100% Algodão</h5>
            <p class="card-text">R$ 129,99</p>
            <button class="btn btn-sm btn-danger" id="btnestatua">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>
      <div class="camisa1" data-type="camisa">
        <div class="produto-card card camisa">
          <img src="{{ asset('images/camisas/CamisaGLStreetDryfit.png') }}" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">GL Street / Dryfit Academia/Futebol 100% Algodão</h5>
            <p class="card-text">R$ 99,99</p>
            <button class="btn btn-sm btn-danger" id="btnestatua">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>
      <div class="camisa1" data-type="camisa">
        <div class="produto-card card camisa">
          <img src="###" class="card-img-top" alt="" />
          <div class="card-body">
            <h5 class="card-title">.....</h5>
            <p class="card-text">R$...</p>
            <button class="btn btn-sm btn-danger" id="btnestatua">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
