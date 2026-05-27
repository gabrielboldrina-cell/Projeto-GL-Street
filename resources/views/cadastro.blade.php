@extends('layouts.app')

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/png" href="{{ url('images/branding/capa.png') }}">
    <link rel="stylesheet" href="{{ url('css/theme.css') }}">
    <link rel="stylesheet" href="{{ url('css/cadastro.css') }} ">
    <script src="{{ url('js/cadastrar.js') }}"></script>
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
                    <a class="site-nav-link" href="{{ route('sobre') }}">Sobre</a>
                    <a class="site-nav-link" href="{{ route('login') }}">Login</a>
                </div>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <div class="page-wrap">
        <div class="register-card">
            <div class="card-header-gl">
                <p class="card-eyebrow">GL Street</p>
                <h1 class="card-title-gl">Criar Conta</h1>
                <p class="card-subtitle-gl">Preencha os dados abaixo para entrar na comunidade GL Street.</p>
            </div>

            <div class="gl-divider"></div>

            <div class="form-grid">
                <div class="gl-field span-full">
                    <label class="gl-label" for="nomeCompleto">Nome completo</label>
                    <div class="gl-input-wrap">
                        <span class="gl-input-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="4" />
                                <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
                            </svg>
                        </span>
                        <input class="gl-input" type="text" id="nomeCompleto" placeholder="Gabriel Oliveira"
                            autocomplete="name">
                    </div>
                </div>

                <div class="gl-field span-full">
                    <label class="gl-label" for="email">E-mail</label>
                    <div class="gl-input-wrap">
                        <span class="gl-input-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="4" width="20" height="16" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                        </span>
                        <input class="gl-input" type="email" id="email" placeholder="seu@email.com"
                            autocomplete="email">
                    </div>
                </div>

                <div class="gl-field">
                    <label class="gl-label" for="usuario">Usuario</label>
                    <div class="gl-input-wrap">
                        <span class="gl-input-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                        </span>
                        <input class="gl-input" type="text" id="usuario" placeholder="gabriel_gl"
                            autocomplete="username">
                    </div>
                </div>

                <div class="gl-field">
                    <label class="gl-label" for="telefone">Telefone</label>
                    <div class="gl-input-wrap">
                        <span class="gl-input-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.14 12a19.79 19.79 0 0 1-3-8.57 2 2 0 0 1 1.99-2.18h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                        </span>
                        <input class="gl-input" type="tel" id="telefone" placeholder="(11) 99999-9999"
                            autocomplete="tel">
                    </div>
                </div>

                <div class="gl-field span-full">
                    <label class="gl-label" for="cpf">CPF</label>
                    <div class="gl-input-wrap">
                        <span class="gl-input-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="5" width="20" height="14" rx="2" />
                                <line x1="2" y1="10" x2="22" y2="10" />
                            </svg>
                        </span>
                        <input class="gl-input" type="text" id="cpf" placeholder="000.000.000-00"
                            maxlength="14" autocomplete="off">
                    </div>
                </div>

                <div class="gl-field span-full">
                    <label class="gl-label" for="senha">Senha</label>
                    <div class="gl-input-wrap">
                        <span class="gl-input-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" />
                                <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                            </svg>
                        </span>
                        <input class="gl-input with-eye" type="password" id="senha"
                            placeholder="Minimo 8 caracteres" autocomplete="new-password">
                        <button class="gl-eye-btn" type="button" onclick="togglePass('senha', this)"
                            aria-label="Mostrar senha">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </button>
                    </div>
                    <div class="strength-bar">
                        <div class="strength-seg" id="seg1"></div>
                        <div class="strength-seg" id="seg2"></div>
                        <div class="strength-seg" id="seg3"></div>
                        <div class="strength-seg" id="seg4"></div>
                    </div>
                    <div class="strength-hint" id="strengthHint"></div>
                </div>

                <div class="gl-field span-full">
                    <label class="gl-label" for="confirmarSenha">Confirmar senha</label>
                    <div class="gl-input-wrap">
                        <span class="gl-input-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </span>
                        <input class="gl-input with-eye" type="password" id="confirmarSenha"
                            placeholder="Repita a senha" autocomplete="new-password">
                        <button class="gl-eye-btn" type="button" onclick="togglePass('confirmarSenha', this)"
                            aria-label="Mostrar confirmacao">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="terms-note">
                <input type="checkbox" id="termos">
                <label for="termos">
                    Li e aceito os <a href="#">Termos de Uso</a> e a <a href="#">Politica de Privacidade</a>
                    da GL Street.
                </label>
            </div>

            <button class="btn-register" id="btnCadastro" type="button">
                Criar minha conta
            </button>

            <p class="login-link">
                Ja tem uma conta? <a href="{{ route('login') }}">Fazer login</a>
            </p>
        </div>
    </div>
@endsection

