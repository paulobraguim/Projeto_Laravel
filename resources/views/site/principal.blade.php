@extends('site.layouts.base')

@section('conteudo') 
<header>
    <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top">
            <a href="#" class="navbar-brand">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" id="logo">Logo
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
            aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                <div class="navbar-nav">
                    <a href="{{ route('site.index')}}" class="nav-item nav-link" id="home-menu">Home</a>
                    <a href="{{ route('site.sobrenos') }}" class="nav-item nav-link" id="sobre-menu">Sobre Nós</a>
                    <a href="{{ route('site.contato') }}" class="nav-item nav-link" id="contato-menu">Contato</a>
                    <a href="#" class="nav-item nav-link" id="adm-menu">Admin</a>
                </div>
            </div>
        </nav>
    </div>
</header>

<main>
    <div class="container">
        <div class="row row-edit">
            <div class="col-12">
                <h1>Página Principal</h1>
            </div>
        </div>

        <div class="row row-edit">
            <div class="col-6">
                <img src="{{ asset('img/imagem-sobre-nos.jpg') }}" class="img-fluid img-edit" alt="Responsive image">
            </div>

            <div class="col-6">
                <img src="{{ asset('img/programacao-1.jpg') }}" class="img-fluid img-edit" alt="Responsive image">
            </div>
        </div>

        <div class="row row-edit">
            <div class="col-6">
                <img src="{{ asset('img/programacao-2.jpg') }}" class="img-fluid img-edit" alt="Responsive image">
            </div>

            <div class="col-6">
                <img src="{{ asset('img/programacao-3.jpg') }}" class="img-fluid img-edit" alt="Responsive image">
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Desenvolvido por Paulo Henrique</p>
                @php
                    echo "<p>Todos os direitos reservados. "  . date('d/m/Y') . "</p>"; 
                @endphp
            </div>
        </div>
    </div>
</footer>
@endsection