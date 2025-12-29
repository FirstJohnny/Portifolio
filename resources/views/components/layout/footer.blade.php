<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-about">
                <a href="/" class="logo">
                <img src="{{asset('favicon.png')}}" alt="" style="width: 50px">
                Lone<span>Wolf</span>
            </a>
                <p>Especializada em desenvolvimento de software seguro, proteção de infraestrutura e estratégia de
                    cibersegurança para defesa contra ameaças digitais modernas.</p>
                <div class="social-icons">
                    @foreach ($socialLinks as $social)
                        <a href="{{ $social['url'] }}" class="social-icon">
                            <i class="fab fa-{{ $social['icon'] }}"></i>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="footer-links">
                <h4>Links rápidos</h4>
                <ul>
                    @foreach ($quickLinks as $link)
                        <li><a href="{{ $link['url'] }}" target="_blank" rel="noopener noreferrer"
                                onclick="event.stopPropagation()">{{ $link['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-newsletter">
                <h4>Informações sobre segurança</h4>
                <p>Assine para receber dicas de segurança e informações do setor.</p>
                <form class="newsletter-form" id="newsletterForm" action="{{ route('newsletter') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Seu endereço de e-mail " required>
                    <button type="submit" class="btn btn-accent" style="padding: 0.8rem 1.5rem;">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ $year }} LoneWolf Portfolio. Todos os direitos reservados. | Desenvolvido com foco em
                segurança.</p>
        </div>
    </div>
</footer>
