<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style_base.css') }}">
</head>
<body>
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
</body>
</html>