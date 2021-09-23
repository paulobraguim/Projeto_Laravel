@extends('site.layouts.base')

@section('titulo', 'Página de Contato')

@section('conteudo') 
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-8 row-edit">
                <h3>Página de Contato</h3><hr>
                <p>Preencha o formulário para entrar em contato conosco.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt magni non, corporis, 
                    eaque debitis animi, illum ratione placeat cum facere vero! Odio inventore eligendi 
                    provident recusandae in repudiandae. Molestiae, assumenda!
                </p>
            </div>

            <div class="col-md-4 row-edit-form">
                <div class="row">
                    <div class="mb-3">
                        <label for="inputNome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome">                            
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="inputTelefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="inputTelefone" placeholder="Digite seu telefone">                            
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="email@example.com">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="selectContato" class="form-label">Motivo</label>
                        <select class="form-select custom" id="selectContato" aria-label="Default select example">
                            <option selected>Qual o motivo do contato? </option>
                            <option value="1">Reclamação</option>
                            <option value="2">Sugestão</option>
                            <option value="3">Elogio</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="mensagem" class="form-label">Mensagem</label>
                        <textarea class="form-control custom" id="mensagem" rows="3" placeholder="Digite sua mensagem"></textarea>                              
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary btn-custom">Enviar</button>
                    </div>
                </div>
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