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

    <div class="container-fluid">
        <div class="row row-color-blue">
            <div class="col-md-12">
                <h4>Entre em contato conosco.</h4>
            </div>            
        </div>

        <div class="row row-form-home">
            <div class="col-md-12">
                @component('site.layouts._components.form_contato') 
                @endcomponent
            </div>
        </div>
    </div> 
</main>
@endsection