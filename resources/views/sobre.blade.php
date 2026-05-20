@extends('layouts.app')

@section('head')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre GL Street</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/branding/capa.png') }}">
    <link rel="stylesheet" href="{{ asset('css/Sobre.css') }}">   
    <script src="{{ asset('js/Sobre.js') }}" defer></script>
@endsection

@section('navbar')
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
                    <li class="nav-item"><a class="nav-link site-nav-link" href="{{ route('cadastro') }}">Cadastra-se</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('content')
<section class="hero">
        <div class="hero-bg"></div>
        <div class="container hero-content">
            <p class="hero-kicker"><span></span> Nossa história</p>
            <h1 class="hero-title">Do estádio<br>para a <em>rua.</em></h1>
            <p class="hero-sub">
                A GL Street nasceu de uma paixão genuína  pelo futebol, pela cultura urbana e pela vontade
                de criar algo que representasse de verdade quem vive esses dois mundos ao mesmo tempo.
            </p>
        </div>
    </section>

    <div class="red-line"></div>

    <div class="stats-bar">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 gap-md-0">
                <div class="stat-item px-4 px-md-5">
                    <div class="stat-number">+<span>200</span></div>
                    <div class="stat-label">Produtos no catalogo</div>
                </div>
                <div class="stat-divider d-none d-md-block"></div>
                <div class="stat-item px-4 px-md-5">
                    <div class="stat-number"><span>2026</span></div>
                    <div class="stat-label">Ano de fundação</div>
                </div>
                <div class="stat-divider d-none d-md-block"></div>
                <div class="stat-item px-4 px-md-5">
                    <div class="stat-number">1<span>00</span>%</div>
                    <div class="stat-label">Paixão pelo esporte</div>
                </div>
                <div class="stat-divider d-none d-md-block"></div>
                <div class="stat-item px-4 px-md-5">
                    <div class="stat-number"><span>7</span>dias</div>
                    <div class="stat-label">Garantia de troca</div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 reveal">
                    <p class="section-label">A origem</p>
                    <h2 class="section-title">Por que a GL Street existe</h2>
                    <div class="section-body">
                        <p>
                            Tudo começou com uma ideia simples: criar um espaço onde a cultura do futebol
                            e o streetwear pudessem coexistir sem forçar a barra. Uma loja que entendesse
                            que a mesma pessoa que vai ao estádio no domingo também quer um look que chame
                            atenção na segunda-feira.
                        </p>
                        <p>
                            A GL Street foi idealizada por Gabriel, apaixonado por futebol e por moda urbana
                            desde cedo. Cansado de ver o mesmo padrão nas lojas — ou muito esportivo demais,
                            ou muito fashion sem identidade — ele decidiu criar algo próprio, com curadoria
                            pensada e uma estética que falasse diretamente com quem vive esses dois universos.
                        </p>
                        <p>
                            O projeto começou como um trabalho, mas a ideia foi longe. A GL Street é a prova
                            de que quando você combina o que ama com dedicação, o resultado tem personalidade.
                        </p>
                    </div>

                    <div class="quote-block mt-4">
                        <blockquote>
                            "Queria criar uma loja que eu mesmo teria vontade de comprar."
                        </blockquote>
                        <cite>— Gabriel, fundador da GL Street</cite>
                    </div>
                </div>

                <div class="col-lg-6 reveal">
                    <div class="founder-card">
                        <div class="founder-avatar">GL</div>
                        <div class="founder-name">Gabriel</div>
                        <div class="founder-role">Fundador & Criador</div>
                        <p class="founder-bio">
                            Desenvolvedor, entusiasta de futebol e apaixonado por streetwear.
                            Criou a GL Street unindo suas maiores referências  a energia dos
                            grandes jogos e a autenticidade da moda de rua em um único projeto
                            com identidade própria.
                        </p>
                        <p class="founder-bio mt-3">
                            Com olhar para tendências e apreço pelos detalhes, Gabriel cuida
                            pessoalmente de cada produto que entra no catálogo, garantindo que
                            a essência da marca esteja em tudo que a loja oferece.
                        </p>
                        <span class="founder-tag">Futebol + Street</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="padding-top: 0;">
        <div class="container">
            <div class="text-center mb-5 reveal">
                <p class="section-label">O que nos move</p>
                <h2 class="section-title">Nossos pilares</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4 reveal">
                    <div class="pillar-card">
                        <div class="pillar-number">01</div>
                        <div class="pillar-title">Paixão pelo futebol</div>
                        <p class="pillar-text">
                            Futebol não é só esporte aqui, é identidade. Cada produto reflete
                            o amor pelo jogo, desde a seleção brasileira até as chuteiras que
                            fazem história nos gramados.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 reveal">
                    <div class="pillar-card">
                        <div class="pillar-number">02</div>
                        <div class="pillar-title">Cultura urbana</div>
                        <p class="pillar-text">
                            Streetwear de verdade tem história, tem atitude. A GL Street cuida
                            da curadoria pra que cada peça tenha aquela personalidade que chama
                            atenção na rua sem precisar gritar.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 reveal">
                    <div class="pillar-card">
                        <div class="pillar-number">03</div>
                        <div class="pillar-title">Identidade própria</div>
                        <p class="pillar-text">
                            Não seguimos tendências — criamos com referência. A GL Street tem
                            um ponto de vista claro: produtos com alma, para quem não quer
                            parecer todo mundo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="padding-top: 0;">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-5 reveal">
                    <p class="section-label">Nossa trajetória</p>
                    <h2 class="section-title">Como chegamos até aqui</h2>
                    <p class="section-body">
                        Do primeiro rascunho até o lançamento online, cada etapa foi construída
                        com cuidado — e com muito amor pelo que a GL Street representa.
                    </p>
                </div>

                
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container reveal">
            <p class="section-label mb-3">Faça parte</p>
            <h2 class="cta-title">Pronto para encontrar<br>seu estilo?</h2>
            <p class="section-body mt-3 mb-5" style="max-width: 42ch; margin-left: auto; margin-right: auto; text-align: center;">
                Explore o catálogo, descubra lanços exclusivos e entre para a comunidade GL Street.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('home') }}" class="btn-cta btn-cta-primary">Ver catálogo</a>
                <a href="{{ route('cadastro') }}" class="btn-cta btn-cta-ghost">Criar minha conta</a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p style="margin-bottom: 8px;">
                <a href="{{ route('glstreet') }}" style="font-family: 'Bebas Neue', sans-serif; font-size: 1.3rem; letter-spacing: 0.14em;">GL Street</a>
            </p>
            <p>© 2026 GL Street. Feito com paixão pelo futebol e pela rua.</p>
            <div class="mt-3 d-flex justify-content-center gap-4 flex-wrap">
                <a href="{{ route('glstreet') }}">Início</a>
                <a href="{{ route('home') }}">Catálogo</a>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('cadastro') }}">Cadastro</a>
            </div>
        </div>
    </footer>
@endsection
