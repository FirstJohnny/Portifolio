<!-- Resume Area Start -->
<div id="eduandex" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Resumo</h2>
                    <span>Resumo</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="edu-box">
                    <h2 class="title">Educação</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="education-list">
                                @if(isset($educations) && count($educations) > 0)
                                    @foreach($educations as $education)
                                        <div class="single-education">
                                            <h4 class="collage-name">{{ $education['institution'] }}</h4>
                                            <p class="degree">{{ $education['degree'] }}<span class="year">{{ $education['year'] }}</span></p>
                                            <div class="description">
                                                <p>{{ $education['description'] }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <!-- Fallback estático -->
                                    <div class="single-education">
                                        <h4 class="collage-name">Instituto Médio Politecnico Privado Fonte de Saber</h4>
                                        <p class="degree">Técnico de Gestão de Sistemas Informáticos<span class="year">2022  - 2026</span></p>
                                        <div class="description">
                                            <p>O IMPPFS tem como objetivo auxiliar os alunos no percurso de acesso ao ensino superior, encaminhar os futuros profissionais para o mercado de trabalho.</p>
                                        </div>
                                    </div>
                                    <div class="single-education">
                                        <h4 class="collage-name">CIFTEL</h4>
                                        <p class="degree">Curso de Programação Web<span class="year">2023  - 2024</span></p>
                                        <div class="description">
                                            <p>Neste curso aprendi a criar websites e aplicações web, assim sendo capaz de desenvolver soluções modernas e eficazes.</p>
                                        </div>
                                    </div>
                                    <div class="single-education">
                                        <h4 class="collage-name">Twala Academy</h4>
                                        <p class="degree">Curso Programação com Laravel<span class="year">2024  - 2025</span></p>
                                        <div class="description">
                                            <p>Neste curso aprendi e aprimorei conceitos que tinha sobre desenvolver para web, aprendi a trabalhar com várias das tecnologias que estão em alta no mercado.</p>
                                        </div>
                                    </div>
                                    <div class="single-education">
                                        <h4 class="collage-name">CIFTEL</h4>
                                        <p class="degree">CCNA 1 - Introdução às Redes<span class="year">2025  - 2025</span></p>
                                        <div class="description">
                                            <p>Obtive certificação em Introdução às Redes, com ênfase em conceitos fundamentais de redes de computadores e segurança da informação.</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="edu-box">
                    <h2 class="title">Experiencia</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="education-list">
                                @if(isset($experiences) && count($experiences) > 0)
                                    @foreach($experiences as $experience)
                                        <div class="single-education">
                                            <h4 class="collage-name">{{ $experience['company'] }}</h4>
                                            <p class="degree">{{ $experience['position'] }}<span class="year">{{ $experience['year'] }}</span></p>
                                            <div class="description">
                                                <p>{{ $experience['description'] }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <!-- Fallback estático -->
                                    <div class="single-education">
                                        <h4 class="collage-name">Elprime Solution</h4>
                                        <p class="degree">Tecnico de IT & Programador <span class="year">2024 - Presente</span></p>
                                        <div class="description">
                                            <p>Atuo como responsável pela modernização digital dos processos internos da empresa, com foco na melhoria da eficiência operacional e na integração de soluções tecnológicas.</p>
                                        </div>
                                    </div>
                                    <div class="single-education">
                                        <h4 class="collage-name">Anjovip</h4>
                                        <p class="degree">CEO & Fundador <span class="year">2021 - 2023</span></p>
                                        <div class="description">
                                            <p>Fui o criador da startup, desenvolvendo sua visão e estratégica para o sucessso do negócio.</p>
                                        </div>
                                    </div>
                                    <div class="single-education">
                                        <h4 class="collage-name">Wobotec</h4>
                                        <p class="degree">Freelancer <span class="year">2025 - 2026</span></p>
                                        <div class="description">
                                            <p>Fui contratado como freelancer para implementação de uma infraestrutura de rede, para melhorar a conectividade e segurança de uma escola do ensino médio .</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
<!-- Resume Area End -->
