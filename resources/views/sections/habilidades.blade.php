<!-- habilidades Area Start -->
<div id="habilidades" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Habilidades & Competências</h2>
                    <span>Habilidades & Competências</span>
                </div>
            </div>
        </div>

        <div class="row skill-area" id="statisticsSection">
            @php
                // Fallback caso a variável $skills não esteja definida ou esteja vazia
                if (!isset($skills) || count($skills) === 0) {
                    $skills = [
                        'Programação e Desenvolvimento' => [
                            ['name' => 'HTML & CSS', 'percentage' => 95],
                            ['name' => 'PHP / Laravel', 'percentage' => 90],
                            ['name' => 'JavaScript', 'percentage' => 90],
                            ['name' => 'Flutter', 'percentage' => 80],
                        ],
                        'Redes e Infraestrutura' => [
                            ['name' => 'Linux', 'percentage' => 75],
                            ['name' => 'Windows Server', 'percentage' => 60],
                            ['name' => 'CCNA Concepts', 'percentage' => 50],
                        ],
                        'Hardware e Manutenção' => [
                            ['name' => 'Diagnóstico', 'percentage' => 90],
                            ['name' => 'Montagem e Reparação', 'percentage' => 95],
                        ],
                        'Segurança e Pentest' => [
                            ['name' => 'Kali Linux', 'percentage' => 50],
                            ['name' => 'Wireshark', 'percentage' => 45],
                        ],
                    ];
                }
            @endphp

            @foreach ($skills as $category => $categorySkills)
                <div class="col-lg-6 skill-area-line">
                    <div class="skill-box">
                        <h4 class="title">{{ $category }}</h4>
                        <div class="skill-list">
                            @foreach ($categorySkills as $skill)
                                <div class="single-skill">
                                    <div class="label">
                                        <span>{{ $skill['name'] }}</span>
                                        <span>{{ $skill['percentage'] }}%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" aria-valuenow="{{ $skill['percentage'] }}"
                                            aria-valuemin="0" aria-valuemax="100"
                                            style="width: {{ $skill['percentage'] }}%"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

         <div class="col-lg-6 skill-area-line">
                <div class="skill-box">
                    <h4 class="title">Idiomas</h4>
                    <div class="skill-list">
                        @if(isset($languages) && count($languages) > 0)
                            @foreach($languages as $language)
                                <div class="single-skill">
                                    <div class="label">
                                        <span>{{ $language['name'] }}</span>
                                        <span>{{ $language['percentage'] }}%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                             role="progressbar" aria-valuenow="{{ $language['percentage'] }}"
                                             aria-valuemin="0" aria-valuemax="100"
                                             style="width: {{ $language['percentage'] }}%"></div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <!-- Fallback estático -->
                            @php
                                $languages = [
                                    ['name' => 'Português', 'percentage' => 100],
                                    ['name' => 'Inglês', 'percentage' => 50],
                                ];
                            @endphp
                            @foreach($languages as $language)
                                <div class="single-skill">
                                    <div class="label">
                                        <span>{{ $language['name'] }}</span>
                                        <span>{{ $language['percentage'] }}%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                             role="progressbar" aria-valuenow="{{ $language['percentage'] }}"
                                             aria-valuemin="0" aria-valuemax="100"
                                             style="width: {{ $language['percentage'] }}%"></div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- habilidades Area End -->
