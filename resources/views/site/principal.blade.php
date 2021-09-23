@extends('site.layouts.base')

@section('titulo', 'Página Home')

@section('conteudo') 
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