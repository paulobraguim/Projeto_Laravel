<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>    
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
            <div class="row row-edit">
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <h3>Sobre a Empresa</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quia obcaecati 
                                adipisci fuga iste officia! Eum veniam fuga adipisci est aspernatur nesciunt debitis 
                                voluptate minus, laudantium qui ipsum maxime distinctio.
                            </p>

                            <p>
                                Suspendisse potenti. Maecenas at fringilla mauris. Suspendisse vitae nisi consectetur, mollis nisi mollis, 
                                facilisis magna. Morbi suscipit lectus erat, eget volutpat tortor interdum quis. Pellentesque mollis 
                                nulla eu ornare egestas. Donec eleifend felis et mauris tempus ullamcorper. Duis quis elit sem. 
                                Etiam efficitur eu turpis eget gravida. In sit amet rutrum nisl. Sed eget magna eget arcu scelerisque 
                                commodo. Pellentesque sit amet felis ut diam tincidunt egestas a nec nibh. Maecenas elementum nulla egestas 
                                est gravida, quis efficitur tellus consectetur. Aliquam bibendum quam id felis interdum, eget vehicula erat 
                                scelerisque.
                            </p>
                        </div>

                        <div class="col-6">
                            <p>
                                Sed quis neque quis sem ullamcorper imperdiet eu quis mauris. Nam nec sem diam. Nullam sed massa ex. 
                                Phasellus pellentesque et est vitae feugiat. Vivamus interdum ut felis id aliquet. Nunc dictum accumsan ex a 
                                varius. Sed eget ante nunc. Suspendisse potenti. Pellentesque eu faucibus orci, nec elementum neque. Fusce erat 
                                justo, feugiat ac pharetra vel, tincidunt non tellus. Donec posuere elit vel mauris gravida, commodo ultricies 
                                arcu blandit. Vivamus aliquet tincidunt pharetra. Suspendisse lacinia augue quis quam placerat iaculis. 
                                Nulla euismod porta imperdiet. Donec enim nisi, finibus et laoreet id, cursus a lorem.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <img src="{{ asset('img/imagem-sobre-nos.jpg') }}" class="img-fluid" alt="Responsive image">
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