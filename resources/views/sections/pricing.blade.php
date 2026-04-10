<section class="pricing-palden section-padding" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Preços</h2>
                    <span>Preços</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @if(isset($pricings) && count($pricings) > 0)
                @foreach($pricings as $pricing)
                    <div class="col-xl-4 col-md-6">
                        <div class="pricing-item @if($pricing['featured']) pricing-item--featured @endif">
                            <div class="pricing-deco">
                                <h3 class="pricing-title">{{ $pricing['title'] }}</h3>
                                <div class="pricing-price">
                                    <span class="pricing-currency">{{ $pricing['currency'] }}</span> {{ number_format($pricing['price'], 2, ',', '.') }}
                                </div>
                                <p class="pricing__sentence">{{ $pricing['period'] }}</p>
                            </div>
                            <div class="list">
                                <ul>
                                    @foreach($pricing['features'] as $feature)
                                        <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pricing-action">
                                <a href="#contact" class="mybtn mybtn-bg"><span>Contratar</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Fallback estático -->
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-item">
                        <div class="pricing-deco">
                            <h3 class="pricing-title">Desenvolvimento Web</h3>
                            <div class="pricing-price"><span class="pricing-currency">AOA</span> 350.000,00</div>
                            <p class="pricing__sentence">por projeto</p>
                        </div>
                        <div class="list">
                            <ul>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Website Responsivo</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Design Moderno e UI/UX</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Otimização SEO Básica</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Formulário de Contacto</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>1 Ano de Suporte Gratuito</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            <a href="#contact" class="mybtn mybtn-bg"><span>Contratar</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-item pricing-item--featured">
                        <div class="pricing-deco">
                            <h3 class="pricing-title">Desenvolvimento de Apps</h3>
                            <div class="pricing-price"><span class="pricing-currency">AOA</span> 500.000,00</div>
                            <p class="pricing__sentence">por projeto</p>
                        </div>
                        <div class="list">
                            <ul>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>App para Android & iOS</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Design UI/UX Personalizado</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Integração com APIs</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Publicação nas Lojas</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Suporte Prioritário</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            <a href="#contact" class="mybtn mybtn-bg"><span>Contratar</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-item">
                        <div class="pricing-deco">
                            <h3 class="pricing-title">Manutenção & Suporte</h3>
                            <div class="pricing-price"><span class="pricing-currency">AOA</span> 75.000,00</div>
                            <p class="pricing__sentence">mensal</p>
                        </div>
                        <div class="list">
                            <ul>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Atualizações de Segurança</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Backups Regulares</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Otimização de Performance</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Suporte Técnico Dedicado</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Relatórios Mensais</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            <a href="#contact" class="mybtn mybtn-bg"><span>Contratar</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-item">
                        <div class="pricing-deco">
                            <h3 class="pricing-title">Gestão de Redes</h3>
                            <div class="pricing-price"><span class="pricing-currency">AOA</span> 150.000,00</div>
                            <p class="pricing__sentence">mensal</p>
                        </div>
                        <div class="list">
                            <ul>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Configuração de Firewall</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Monitoramento de Rede 24/7</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Gestão de Servidores</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>VPN e Acesso Remoto Seguro</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Relatórios de Performance</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            <a href="#contact" class="mybtn mybtn-bg"><span>Contratar</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-item">
                        <div class="pricing-deco">
                            <h3 class="pricing-title">Desenvolvimento Desktop</h3>
                            <div class="pricing-price"><span class="pricing-currency">AOA</span> 450.000,00</div>
                            <p class="pricing__sentence">por projeto</p>
                        </div>
                        <div class="list">
                            <ul>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Aplicação para Windows</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Interface Intuitiva (UI/UX)</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Base de Dados Local/Remota</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Instalador Personalizado</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Suporte e Manutenção</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            <a href="#contact" class="mybtn mybtn-bg"><span>Contratar</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-item">
                        <div class="pricing-deco">
                            <h3 class="pricing-title">Pentest & Segurança</h3>
                            <div class="pricing-price"><span class="pricing-currency">AOA</span> 700.000,00</div>
                            <p class="pricing__sentence">por avaliação</p>
                        </div>
                        <div class="list">
                            <ul>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Análise de Vulnerabilidades Web</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Teste de Intrusão de Rede</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Relatório Detalhado de Falhas</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Recomendações de Correção</li>
                                <li><i class="fas fa-check" style="color: #007bff; margin-right: 8px;"></i>Teste de Phishing Simulado</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            <a href="#contact" class="mybtn mybtn-bg"><span>Contratar</span></a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
