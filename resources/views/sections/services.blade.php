<!-- Service Area Start -->
<div id="services" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Meus Serviços</h2>
                    <span>Meus Serviços</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @if(isset($services) && count($services) > 0)
                @foreach($services as $service)
                    <div class="col-xl-4 col-md-6">
                        <a href="{{ route('service.detail', $service['id']) }}" class="item">
                            <img src="{{ asset('assets/front/img/' . $service['image']) }}" alt="{{ $service['title'] }}">
                            <h6 class="title">{{ $service['title'] }}</h6>
                            <p>{{ $service['description'] }}</p>
                        </a>
                    </div>
                @endforeach
            @else
                <!-- Fallback estático -->
                <div class="col-xl-4 col-md-6">
                    <a href="#" class="item">
                        <img src="{{ asset('assets/front/img/1574776906727189926.png') }}" alt="Desenvolvimento Web">
                        <h6 class="title">Desenvolvimento Web</h6>
                        <p>Criação de websites e sistemas web robustos, utilizando tecnologias modernas como PHP, Laravel e JavaScript para entregar soluções de alta performance.</p>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a href="#" class="item">
                        <img src="{{ asset('assets/front/img/16242967351958079857.jpeg') }}" alt="Desenvolvimento de Apps">
                        <h6 class="title">Desenvolvimento de Apps</h6>
                        <p>Desenvolvimento de aplicações móveis multiplataforma com Flutter, focadas numa experiência de utilizador intuitiva e design responsivo para Android e iOS.</p>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a href="#" class="item">
                        <img src="{{ asset('assets/front/img/network.png') }}" alt="Gestão de Redes e Servidores">
                        <h6 class="title">Gestão de Redes e Servidores</h6>
                        <p>Implementação e gestão de infraestruturas de rede e servidores (Linux/Windows), garantindo segurança, conectividade e performance para o seu negócio.</p>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a href="#" class="item">
                        <img src="{{ asset('assets/front/img/support.png') }}" alt="Suporte Técnico e Hardware">
                        <h6 class="title">Suporte Técnico e Hardware</h6>
                        <p>Serviços de montagem, diagnóstico e reparação de computadores, oferecendo suporte técnico especializado para resolver problemas de hardware e software.</p>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a href="#" class="item">
                        <img src="{{ asset('assets/front/img/pentest.png') }}" alt="Pentest & Segurança">
                        <h6 class="title">Pentest & Segurança</h6>
                        <p>Análise de vulnerabilidades e testes de intrusão para garantir a segurança dos seus sistemas e proteger os seus dados contra ameaças.</p>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a href="#" class="item">
                        <img src="{{ asset('assets/front/img/desktop.png') }}" alt="Desenvolvimento Desktop">
                        <h6 class="title">Desenvolvimento Desktop</h6>
                        <p>Criação de aplicações desktop robustas e eficientes com C# e .NET Framework, focadas em performance e experiência de utilizador nativa.</p>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Service Area End -->
