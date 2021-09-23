<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo')</title>    
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
        @yield('conteudo')
    </body>
</html>    