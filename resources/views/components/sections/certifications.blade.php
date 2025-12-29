<section id="certifications" class="certifications-section">
    <div class="container">
        <h2 class="animate-fade">Credenciais Verificadas</h2>

        <!-- Descrição da Seção -->
        <div style="text-align: center; max-width: 700px; margin: 0 auto 3rem;">
            <p style="color: rgba(255, 255, 255, 0.7); font-size: 1.1rem; line-height: 1.6;">
                Certificações reconhecidas pela indústria que comprovam expertise técnica e compromisso contínuo
                com excelência profissional em <span style="color: var(--primary); font-weight: 600;">cibersegurança</span>
                e <span style="color: var(--accent); font-weight: 600;">desenvolvimento de software</span>.
            </p>
        </div>

        <!-- Grid de Certificados -->
        <div class="certs-grid">
            @foreach($certs as $index => $cert)
            <div class="cert-card animate-fade" style="animation-delay: {{ $index * 0.15 }}s;">
                <!-- Imagem do Certificado -->
                <div class="cert-image-wrapper">
                    <img src="{{ asset($cert['image']) }}" alt="{{ $cert['name'] }}" loading="lazy">

                    <!-- Overlay com Ícone -->
                    <div class="cert-overlay-icon">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>

                <!-- Conteúdo do Card -->
                <div class="cert-content">
                    <!-- Header com Emissor e Status -->
                    <div class="cert-header">
                        <span class="issuer">
                            <i class="fas fa-award"></i>
                            {{ $cert['issuer'] }}
                        </span>
                        <div class="cert-status" title="Verificado">
                            <i class="fas fa-check-circle"></i>
                        </div>
                    </div>

                    <!-- Nome do Certificado -->
                    <h3>{{ $cert['name'] }}</h3>

                    <!-- Footer com Data -->
                    <div class="cert-footer">
                        <span class="date">
                            <i class="far fa-calendar-alt"></i>
                            {{ $cert['date'] }}
                        </span>

                        <!-- Badge de Validação -->
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <span style="font-size: 0.75rem; color: var(--cyber-green); font-family: 'Roboto Mono', monospace;">
                                VALIDADO
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Link Overlay -->
                <a href="{{ $cert['url'] ?? '#' }}"
                   class="cert-link-overlay"
                   aria-label="Ver certificado {{ $cert['name'] }}"
                   @if(isset($cert['url']) && $cert['url'] !== '#')
                   target="_blank"
                   rel="noopener noreferrer"
                   @endif
                ></a>
            </div>
            @endforeach
        </div>

        <!-- Botão de Ação Final -->
        <div style="text-align: center; margin-top: 4rem;">
            <a href="#contact" class="btn btn-outline">
                <i class="fas fa-trophy"></i>
                Ver Todas as Certificações
            </a>
        </div>
    </div>

    <!-- Efeito de Partículas -->
    <div class="cyber-scan">
        <div class="scan-line"></div>
    </div>
</section>

<!-- Script para Animações Adicionais -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer para animações on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observar todos os cards de certificado
    document.querySelectorAll('.cert-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
        observer.observe(card);
    });

    // Adicionar efeito de ripple ao clicar nos cards
    document.querySelectorAll('.cert-card').forEach(card => {
        card.addEventListener('click', function(e) {
            const ripple = document.createElement('div');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.style.position = 'absolute';
            ripple.style.borderRadius = '50%';
            ripple.style.background = 'rgba(37, 99, 235, 0.5)';
            ripple.style.transform = 'scale(0)';
            ripple.style.animation = 'ripple 0.6s ease-out';
            ripple.style.pointerEvents = 'none';

            this.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
        });
    });
});

// Adicionar keyframes para o ripple
const style = document.createElement('style');
style.textContent = `
    @keyframes ripple {
        to {
            transform: scale(2);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);
</script>
