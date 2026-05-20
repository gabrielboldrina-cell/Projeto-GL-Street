@extends('layouts.app')

@section('head')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GL Street</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="icon" type="image/png" href="{{ asset('images/branding/capa.png') }}">
<link rel="stylesheet" href="{{ asset('css/theme.css') }}?v={{ filemtime(public_path('css/theme.css')) }}">
<link rel="stylesheet" href="{{ asset('css/GLStreet.css') }}?v={{ filemtime(public_path('css/GLStreet.css')) }}">
@endsection

@section('navbar')
<header class="promo-strip">
    <div class="container promo-strip-content">
        <a class="promo-strip-link" href="home.html">Frete gratis acima de R$299</a>
        <a class="promo-strip-link" href="home.html">Troca em ate 7 dias</a>
        <a class="promo-strip-link" href="login.html">Programa de membros GL+</a>
    </div>
</header>
<nav class="navbar navbar-expand-lg navbar-dark site-navbar" aria-label="Main navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('glstreet') }}">GL Street</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
            aria-controls="mainNav" aria-expanded="false" aria-label="Abrir navegacao">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item"><a class="nav-link site-nav-link" href="{{ route('glstreet') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link site-nav-link" href="{{ route('home') }}">Catalogo</a></li>
                <li class="nav-item dropdown">
                    <button class="btn btn-dropdown-custom dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Categorias</button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('home') }}">Selecao Brasileira</a></li>
                        <li><a class="dropdown-item" href="{{ route('home') }}">Camisas</a></li>
                        <li><a class="dropdown-item" href="{{ route('home') }}">Tenis</a></li>
                        <li><a class="dropdown-item" href="{{ route('home') }}">Chuteiras</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link site-nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link site-nav-link nav-pill" href="{{ route('cadastro') }}">Cadastra-se</a></li>
            </ul>
        </div>
    </div>
</nav>
@endsection

@section('content')


<main>
    <section class="hero-section">
        <div id="heroCarousel" class="carousel slide carousel-fade hero-carousel" data-bs-ride="carousel"
            data-bs-interval="9000" data-bs-pause="false">
            <div class="carousel-indicators hero-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner hero-carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/banners/foto4.jpg') }}" class="d-block w-100 hero-image"
                        alt="Destaque da colecao GL Street">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/banners/foto3.jpg') }}" class="d-block w-100 hero-image"
                        alt="Jogador com uniforme GL Street">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/banners/foto2.jpg') }}" class="d-block w-100 hero-image"
                        alt="Detalhe de camisa GL Street">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Proximo</span>
            </button>
        </div>

        <div class="hero-overlay"></div>

        <div class="container hero-content">
            <div class="row g-4 align-items-end">
                <div class="col-lg-7">
                    <p class="hero-kicker">Coleção 2026</p>
                    <h1 class="hero-title">A energia do estadio, o estilo da rua.</h1>
                    <p class="hero-subtitle">
                       Conheça a GL Street, onde a paixão pelo futebol se encontra com a cultura urbana, Descubra a nova coleção, inspirada na autenticidade das ruas e na emoção dos jogos. Camisas, tenis e acessórios que combinam o melhor dos dois mundos para quem vive o futebol em cada passo.
                    </p>
                    <div class="hero-actions">
                        <a class="btn btn-hero-primary" href="{{ route('home') }}">Ver catalogo</a>
                        <a class="btn btn-hero-secondary" href="{{ route('home') }}">Explorar categorias</a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <aside class="drop-card" aria-label="Proximo destaque da loja">
                        <p class="drop-label">Proximo Drop</p>
                        <h2 class="drop-title">Linha Matchday Street</h2>
                        <div class="drop-highlight">tenis e acessorios em edicao limitada.</div>
                        <ul class="drop-meta">
                            <li>EM BREVE</li>
                            <li>GL Street: não seguimos tendências, a rua segue <strong>nossos passos</strong>.  </li>
                        </ul>
                        <a class="drop-link" href="{{ route('home') }}">Quero conhecer</a>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <section class="highlights">
        <div class="container">
            <div class="row g-3">
                <div class="col-md-4">
                    <article class="highlight-card">
                        <p class="highlight-tag"> Destaque</p>
                        <h3>Nova camisa retro GL Street</h3>
                        <p>Design classico com tecidos atuais para usar no dia de jogo e no dia a dia.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="highlight-card">
                        <p class="highlight-tag">Tendencia</p>
                        <h3>Tenis street performance</h3>
                        <p>Conforto, grip e visual forte para quadra, treino e rotina urbana.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="highlight-card">
                        <p class="highlight-tag">Colecao</p>
                        <h3>Acessorios oficiais</h3>
                        <p>Bones, mochilas e detalhes que completam o look com identidade GL Street.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>
 <!-- Footer -->
<footer class="site-footer text-center text-lg-start">
  <!-- Section: Social media -->
  <section class="site-footer-top d-flex justify-content-center justify-content-lg-between p-4">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!">Angular</a>
          </p>
          <p>
            <a href="#!">React</a>
          </p>
          <p>
            <a href="#!">Vue</a>
          </p>
          <p>
            <a href="#!">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!">Pricing</a>
          </p>
          <p>
            <a href="#!">Settings</a>
          </p>
          <p>
            <a href="#!">Orders</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2026 Copyright:
    <a class="fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>   
<!-- Footer -->
@endsection

