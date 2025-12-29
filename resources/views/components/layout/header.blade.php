<style>
    @media (max-width: 768px) {
        .nav-links {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: var(--bg-color, #121212); /* Usa sua variável de fundo ou preto suave */
            flex-direction: column;
            align-items: center;
            padding: 2rem 0;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            z-index: 1000;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .nav-links li {
            width: 100%;
            text-align: center;
            margin: 0px 0;
        }

        .nav-links a {
            color: var(--text-color, #e0e0e0); /* Usa sua variável de texto ou cinza claro */
            font-size: 1.2rem;
            display: block;
            padding: 10px;
            transition: all 0.3s ease;
        }
        .nav-links .btn {
            width: 90%;
            display: block;
            margin: 1px auto;
        }

        .nav-links a:hover {
            color: var(--primary-color, #fff);
            background-color: rgba(255,255,255,0.05);
        }

        .nav-links.show {
            display: flex !important;
            animation: slideDown 0.3s ease forwards;
        }

        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    }
</style>
<header id="header">
    <div class="container">
        <nav>
            <a href="/" class="logo">
                <img src="{{asset('favicon.png')}}" alt="" style="width: 50px">
                Lone<span>Wolf</span>
            </a>
            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-links" id="navLinks">
                @foreach($navItems as $item)
                <li>
                    <a href="{{ $item['href'] }}" class="{{ request()->is('/') && $item['href'] == '#home' ? 'active' : '' }}">
                        {{ $item['label'] }}
                    </a>
                </li>
                @endforeach
                <li>
                    <a href="#" class="btn btn-outline btn-accent" style="padding: 0.5rem 1.5rem;">
                        Resumo
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('header');
        const mobileBtn = document.getElementById('mobileMenuBtn');
        const navLinks = document.getElementById('navLinks');
        const icon = mobileBtn.querySelector('i');
        const links = navLinks.querySelectorAll('a');

        // Função para alternar o menu
        function toggleMenu() {
            navLinks.classList.toggle('show');
            const isOpen = navLinks.classList.contains('show');

            // Troca o ícone (Barras <-> X)
            if (isOpen) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        }

        mobileBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMenu();
        });

        // Fecha o menu ao clicar em um link
        links.forEach(link => {
            link.addEventListener('click', () => {
                if (navLinks.classList.contains('show')) {
                    toggleMenu();
                }
            });
        });

        // Fecha o menu ao clicar fora dele
        document.addEventListener('click', (e) => {
            if (navLinks.classList.contains('show') && !navLinks.contains(e.target) && !mobileBtn.contains(e.target)) {
                toggleMenu();
            }
        });

        // Efeito de scroll no header (Glassmorphism mais compacto ao rolar)
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    });
</script>
