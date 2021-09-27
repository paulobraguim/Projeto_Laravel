
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
                    <a href="{{ route('site.login') }}" class="nav-item nav-link" id="adm-menu">Admin</a>
                </div>
            </div>
        </nav>
    </div>
</header>