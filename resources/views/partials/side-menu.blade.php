<nav class="my-navbar">
    <div class="d-flex flex-column justify-content-between h100">
        <div class="header-top-area">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/front/img/avatar_1619874862913595028.png') }}" alt="Edgar Singui">
            </a>
            <h4 class="name">João Tomás</h4>
        </div>

        <div id="ca-navbar">
            <ul class="navbar-nav" id="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ request()->routeIs('home') ? '#home' : url('/').'#home' }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ request()->routeIs('home') ? '#about' : url('/').'#about' }}">Sobre</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ request()->routeIs('home') ? '#services' : url('/').'#services' }}">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ request()->routeIs('home') ? '#habilidades' : url('/').'#habilidades' }}">Habilidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ request()->routeIs('home') ? '#eduandex' : url('/').'#eduandex' }}">Resumo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ request()->routeIs('home') ? '#portfolio' : url('/').'#portfolio' }}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ request()->routeIs('home') ? '#blog' : url('/').'#blog' }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ request()->routeIs('home') ? '#contact' : url('/').'#contact' }}">Contactos</a>
                </li>
            </ul>
        </div>

        <div class="header-bottom-area">
            <div class="menu-social-links">
                <a href="https://github.com/firstjohnny" target="_blank" rel="noopener noreferrer" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/jo%C3%A3o-tom%C3%A1s-3a601b3a8" target="_blank" rel="noopener noreferrer" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/joaonicolauremostomas" target="_blank" rel="noopener noreferrer" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/FirstJohnny" target="_blank" rel="noopener noreferrer" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</nav>
