<!DOCTYPE html>
<html lang="APP_LOCALE">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Olá Bem vindo ao meu site, Sou João Tomás, dev mobile e web')">
    <meta name="keywords" content="@yield('meta_keywords', 'João Tomás,Portfolio Pessoal,CV,Angola,Programador')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'João Tomás- Portfolio/CV')</title>

    <link rel="shortcut icon" href="{{ asset('assets/front/img/fav_icon_15754604121407404171.png') }}" type="image/png">

     <!-- Font Awesome 5 (CDN) - ADICIONE ESTA LINHA -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">

    <!-- CSS -->
    <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/plugin.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/dynamic-style.php?color=FF0000') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/darktheme.css') }}" rel="stylesheet">

    @stack('styles')
     @vite(['resources/css/app.css'])
     <style>
        /* Estilo para o item de menu ativo */
#ca-navbar .navbar-nav .nav-item.active .nav-link {
    color: #007bff; /* Cor azul para o texto do link ativo */
}

#ca-navbar .navbar-nav .nav-item.active {
    border-right: 3px solid #007bff; /* Borda azul à direita para indicar a seleção */
    background-color: rgba(0, 123, 255, 0.05); /* Fundo azul muito subtil */
}

     </style>
</head>
<body class="darktheme">

    @include('partials.menu-toggle')

    <header class="header side-menu">
        @include('partials.side-menu')
    </header>

    <div class="main-site-content">
        @yield('content')

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="">
                            Copyright © {{ date('Y') }}. Todos os Direitos Reservados por João Tomás
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/front/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/main.js') }}"></script>

    <script>
        var wowjs = 0;
    </script>

    <script>
        $(document).ready(function() {
            // --- 1. SMOOTH SCROLL & MOBILE MENU ---
            $('#ca-navbar a.nav-link[href*="#"]').on('click', function(event) {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 800);

                        // Fecha o menu mobile se estiver aberto
                        if ($('.menu-toogle-icon').is(':visible')) {
                            $('#nav-icon3').removeClass('open');
                            $('.side-menu').removeClass('show');
                        }
                        return false;
                    }
                }
            });

            // --- 2. SCROLL-SPY (destaca item do menu ao rolar) ---
            var lastId,
                topMenu = $("#ca-navbar"),
                // All list items
                menuItems = topMenu.find(".nav-link"),
                // Anchors corresponding to menu items
                scrollItems = menuItems.map(function() {
                    var item = $($(this).attr("href"));
                    if (item.length) {
                        return item;
                    }
                });

            $(window).scroll(function() {
                var fromTop = $(this).scrollTop() + 150; // Offset para melhor precisão

                var cur = scrollItems.map(function() {
                    if ($(this).offset().top < fromTop)
                        return this;
                });
                cur = cur[cur.length - 1];
                var id = cur && cur.length ? cur.attr("id") : "";

                if (lastId !== id) {
                    lastId = id;
                    menuItems.parent().removeClass("active").end().filter("[href='#" + id + "']").parent().addClass("active");
                }
            });
        });
    </script>

    @stack('scripts')
    @vite(['resources/js/app.js'])
</body>
</html>
