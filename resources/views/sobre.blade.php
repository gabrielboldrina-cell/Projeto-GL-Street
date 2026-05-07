@extends('layouts.app')

@section('head')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre NÃ³s â€” GL Street</title>

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
            <p class="hero-kicker"><span></span> Nossa histÃ³ria</p>
            <h1 class="hero-title">Do estÃ¡dio<br>para a <em>rua.</em></h1>
            <p class="hero-sub">
                A GL Street nasceu de uma paixÃ£o genuÃ­na â€” pelo futebol, pela cultura urbana e pela vontade
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
                    <div class="stat-label">Produtos no catÃ¡logo</div>
                </div>
                <div class="stat-divider d-none d-md-block"></div>
                <div class="stat-item px-4 px-md-5">
                    <div class="stat-number"><span>2024</span></div>
                    <div class="stat-label">Ano de fundaÃ§Ã£o</div>
                </div>
                <div class="stat-divider d-none d-md-block"></div>
                <div class="stat-item px-4 px-md-5">
                    <div class="stat-number">1<span>00</span>%</div>
                    <div class="stat-label">PaixÃ£o pelo esporte</div>
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
                            Tudo comeÃ§ou com uma ideia simples: criar um espaÃ§o onde a cultura do futebol
                            e o streetwear pudessem coexistir sem forÃ§ar a barra. Uma loja que entendesse
                            que a mesma pessoa que vai ao estÃ¡dio no domingo tambÃ©m quer um look que chame
                            atenÃ§Ã£o na segunda-feira.
                        </p>
                        <p>
                            A GL Street foi idealizada por Gabriel, apaixonado por futebol e por moda urbana
                            desde cedo. Cansado de ver o mesmo padrÃ£o nas lojas â€” ou muito esportivo demais,
                            ou muito fashion sem identidade â€” ele decidiu criar algo prÃ³prio, com curadoria
                            pensada e uma estÃ©tica que falasse diretamente com quem vive esses dois universos.
                        </p>
                        <p>
                            O projeto comeÃ§ou como um trabalho, mas a ideia foi longe. A GL Street Ã© a prova
                            de que quando vocÃª combina o que ama com dedicaÃ§Ã£o, o resultado tem personalidade.
                        </p>
                    </div>

                    <div class="quote-block mt-4">
                        <blockquote>
                            "Queria criar uma loja que eu mesmo teria vontade de comprar."
                        </blockquote>
                        <cite>â€” Gabriel, fundador da GL Street</cite>
                    </div>
                </div>

                <div class="col-lg-6 reveal">
                    <div class="founder-card">
                        <div class="founder-avatar">GL</div>
                        <div class="founder-name">Gabriel</div>
                        <div class="founder-role">Fundador & Criador</div>
                        <p class="founder-bio">
                            Desenvolvedor, entusiasta de futebol e apaixonado por streetwear.
                            Criou a GL Street unindo suas maiores referÃªncias â€” a energia dos
                            grandes jogos e a autenticidade da moda de rua â€” em um Ãºnico projeto
                            com identidade prÃ³pria.
                        </p>
                        <p class="founder-bio mt-3">
                            Com olhar para tendÃªncias e apreÃ§o pelos detalhes, Gabriel cuida
                            pessoalmente de cada produto que entra no catÃ¡logo, garantindo que
                            a essÃªncia da marca esteja em tudo que a loja oferece.
                        </p>
                        <span class="founder-tag">âš½ Futebol + Street</span>
                        <span class="founder-tag ms-2">ðŸ’» Desenvolvedor</span>
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
                        <div class="pillar-icon">âš½</div>
                        <div class="pillar-title">PaixÃ£o pelo futebol</div>
                        <p class="pillar-text">
                            Futebol nÃ£o Ã© sÃ³ esporte aqui â€” Ã© identidade. Cada produto reflete
                            o amor pelo jogo, desde a seleÃ§Ã£o brasileira atÃ© as chuteiras que
                            fazem histÃ³ria nos gramados.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 reveal">
                    <div class="pillar-card">
                        <div class="pillar-number">02</div>
                        <div class="pillar-icon">ðŸ™ï¸</div>
                        <div class="pillar-title">Cultura urbana</div>
                        <p class="pillar-text">
                            Streetwear de verdade tem histÃ³ria, tem atitude. A GL Street cuida
                            da curadoria pra que cada peÃ§a tenha aquela personalidade que chama
                            atenÃ§Ã£o na rua sem precisar gritar.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 reveal">
                    <div class="pillar-card">
                        <div class="pillar-number">03</div>
                        <div class="pillar-icon">âœ¦</div>
                        <div class="pillar-title">Identidade prÃ³pria</div>
                        <p class="pillar-text">
                            NÃ£o seguimos tendÃªncia â€” criamos com referÃªncia. A GL Street tem
                            um ponto de vista claro: produtos com alma, para quem nÃ£o quer
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
                    <p class="section-label">Nossa trajetÃ³ria</p>
                    <h2 class="section-title">Como chegamos atÃ© aqui</h2>
                    <p class="section-body">
                        Do primeiro rascunho atÃ© o lanÃ§amento online, cada etapa foi construÃ­da
                        com cuidado â€” e com muito amor pelo que a GL Street representa.
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-year">2025</div>
                            <div class="timeline-event">A ideia nasce</div>
                            <p class="timeline-desc">Gabriel percebe a lacuna entre o mundo do futebol e o streetwear e comeÃ§a a desenhar o conceito da GL Street.</p>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-year">2025/MarÃ§o â€” InÃ­cio</div>
                            <div class="timeline-event">Primeiros produtos e curadoria</div>
                            <p class="timeline-desc">SeleÃ§Ã£o dos primeiros itens, definiÃ§Ã£o da identidade visual e inÃ­cio do desenvolvimento do site.</p>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-year">2025 â€” Final</div>
                            <div class="timeline-event">Site entra no ar</div>
                            <p class="timeline-desc">LanÃ§amento da versÃ£o online com catÃ¡logo completo, sistema de carrinho e pÃ¡ginas de pagamento.</p>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-year">2026</div>
                            <div class="timeline-event">Linha Matchday Street & crescimento</div>
                            <p class="timeline-desc">LanÃ§amento de coleÃ§Ãµes exclusivas e expansÃ£o do catÃ¡logo com mais de 200 produtos disponÃ­veis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container reveal">
            <p class="section-label mb-3">FaÃ§a parte</p>
            <h2 class="cta-title">Pronto para encontrar<br>seu estilo?</h2>
            <p class="section-body mt-3 mb-5" style="max-width: 42ch; margin-left: auto; margin-right: auto; text-align: center;">
                Explore o catÃ¡logo, descubra lanÃ§amentos exclusivos e entre para a comunidade GL Street.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('home') }}" class="btn-cta btn-cta-primary">Ver catÃ¡logo</a>
                <a href="{{ route('cadastro') }}" class="btn-cta btn-cta-ghost">Criar minha conta</a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p style="margin-bottom: 8px;">
                <a href="{{ route('glstreet') }}" style="font-family: 'Bebas Neue', sans-serif; font-size: 1.3rem; letter-spacing: 0.14em;">GL Street</a>
            </p>
            <p>Â© 2026 GL Street. Feito com paixÃ£o pelo futebol e pela rua.</p>
            <div class="mt-3 d-flex justify-content-center gap-4 flex-wrap">
                <a href="{{ route('glstreet') }}">InÃ­cio</a>
                <a href="{{ route('home') }}">CatÃ¡logo</a>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('cadastro') }}">Cadastro</a>
            </div>
        </div>
    </footer>
@endsection

