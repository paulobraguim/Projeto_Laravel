@extends('site.layouts.base')

@section('titulo', 'Página de Contato')

@section('conteudo')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 row-edit">
                <h3>Página de Contato</h3><hr>
                <p>Preencha o formulário para entrar em contato conosco.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @component('site.layouts._components.form_contato')                    
                @endcomponent
            </div>
        </div>            
    </div>
</main>
@endsection