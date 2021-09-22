<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap');

        .container{
            padding: 70px 0;
        }

        p, li{
            color: #444;
            font-size: 14px;;
        }

        /* NAV */
        header, .navbar{
            background-color: #2908a1;
            font-family: 'Roboto';
        }

        #nav-container{
            padding-top: 0;
            padding-bottom: 0;
        }

        #logo{
            width: 75px;
        }

        .navbar-brand{
            padding: 0;
            color: #fff;
        }

        .navbar-brand:hover{
            color: #fff;
        }

        #navbar-links{
            margin-right: 60px;    
        }

        #navbar-links a{
            color: #fff;
            text-transform: uppercase;    
        }

        #navbar-links a:hover{
            color: #eed812;
            text-transform: 3s;
            font-weight: bold;
        }

        .navbar-expand-lg .navbar-nav .nav-link{
            padding: 1rem .8rem;
        }

        .row-edit{
            text-align: center;            
            margin-top: 40px;
        }

        .row-edit-form{            
            margin-top: 40px;
            padding: 5px;
        }

        .row-edit p{
            font-weight: 300;
            font-size: 15px;
        }

        .img-edit{
            width: 450px;
            height: 300px;
        }

        label{
            font-size: 17px;
            font-weight: bold;
            color: rgb(31, 31, 31);
        }

        input[type=text]{
            border: 1px solid #2908a1;
            border-radius: 5px;
            color: rgb(112, 112, 112);
        }

        input[type=text]:hover{
            border: 1.5px solid #2908a1;
            box-shadow: 4px 5px 5px #2908a1;            
        }

        input[type=text]:focus{
            outline: none !important;
            border: 1.5px solid #2908a1;
            box-shadow: 4px 5px 5px #2908a1;            
        }

        input[type=email]{
            border: 1px solid #2908a1;
            border-radius: 5px;
            color: rgb(112, 112, 112);
        }

        input[type=email]:hover{
            border: 1.5px solid #2908a1;
            box-shadow: 4px 5px 5px #2908a1;            
        }

        input[type=email]:focus{
            outline: none !important;
            border: 1.5px solid #2908a1;
            box-shadow: 4px 5px 5px #2908a1;            
        }

        .custom{
            border: 1px solid #2908a1;
            border-radius: 5px;
            color: rgb(112, 112, 112);
        }

        .custom:hover{
            border: 1.5px solid #2908a1;
            box-shadow: 4px 5px 5px #2908a1;            
        }

        .custom:focus{
            outline: none !important;
            border: 1.5px solid #2908a1;
            box-shadow: 4px 5px 5px #2908a1;            
        }

        .btn-custom{
            background: #2908a1;
            color: #eed812;
            border: none;
            width: 90px;
            font-size: 18px;
        }

        .btn-custom:hover{
            background: #340cc4;
            font-weight: bold;
            color: #eed812;
        }


        footer{
            background-color: #2908a1;
            height: 250px;
            width: auto;            
            font-weight: 300;
            text-align: center;
        }

        footer p{
            color: #fff;
            font-size: 17px;;
        }

    </style>
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