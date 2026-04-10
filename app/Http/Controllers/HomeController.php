<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'educations' => $this->getEducations(),
            'experiences' => $this->getExperiences(),
            'skills' => $this->getSkills(),
            'languages' => $this->getLanguages(),
            'portfolios' => $this->getPortfolios(),
            'testimonials' => $this->getTestimonials(),
            'blogs' => $this->getBlogs(),
            'clients' => $this->getClients(),
            'services' => $this->getServices(),
            'stats' => $this->getStats(),
            'pricings' => $this->getPricings(),
        ];

        return view('home', $data);
    }

    private function getEducations()
    {
        return [
            [
                'institution' => 'Instituto Médio Politecnico Privado Fonte de Saber',
                'degree' => 'Técnico de Gestão de Sistemas Informáticos',
                'year' => '2022 - 2026',
                'description' => 'O IMPPFS tem como objetivo auxiliar os alunos no percurso de acesso ao ensino superior, encaminhar os futuros profissionais para o mercado de trabalho.'
            ],
            [
                'institution' => 'CIFTEL',
                'degree' => 'Curso de Programação Web',
                'year' => '2023 - 2024',
                'description' => 'Neste curso aprendi a criar websites e aplicações web, assim sendo capaz de desenvolver soluções modernas e eficazes.'
            ],
            [
                'institution' => 'Twala Academy',
                'degree' => 'Curso Programação com Laravel',
                'year' => '2024 - 2025',
                'description' => 'Neste curso aprendi e aprimorei conceitos que tinha sobre desenvolver para web, aprendi a trabalhar com várias das tecnologias que estão em alta no mercado.'
            ],
            [
                'institution' => 'CIFTEL',
                'degree' => 'CCNA 1 - Introdução às Redes',
                'year' => '2025 - 2025',
                'description' => 'Obtive certificação em Introdução às Redes, com ênfase em conceitos fundamentais de redes de computadores e segurança da informação.'
            ]
        ];
    }

    private function getExperiences()
    {
        return [
            [
                'company' => 'Elprime Solution',
                'position' => 'Tecnico de IT & Programador',
                'year' => '2024 - Presente',
                'description' => 'Atuo como responsável pela modernização digital dos processos internos da empresa, com foco na melhoria da eficiência operacional e na integração de soluções tecnológicas.'
            ],
            [
                'company' => 'Anjovip',
                'position' => 'CEO & Fundador',
                'year' => '2021 - 2023',
                'description' => 'Fui o criador da startup, desenvolvendo sua visão e estratégica para o sucessso do negócio.'
            ],
            [
                'company' => 'Wobotec',
                'position' => 'Freelancer',
                'year' => '2025 - 2026',
                'description' => 'Fui contratado como freelancer para implementação de uma infraestrutura de rede, para melhorar a conectividade e segurança de uma escola do ensino médio .'
            ]
        ];
    }

    private function getSkills()
    {
        return [
            'Programação e Desenvolvimento' => [
                ['name' => 'HTML & CSS', 'percentage' => 95],
                ['name' => 'PHP / Laravel', 'percentage' => 90],
                ['name' => 'JavaScript', 'percentage' => 90],
                ['name' => 'C#', 'percentage' => 80],
                ['name' => 'Flutter', 'percentage' => 80],
            ],
            'Redes e Infraestrutura' => [
                ['name' => 'Linux (Debian/Ubuntu)', 'percentage' => 75],
                ['name' => 'Windows Server', 'percentage' => 60],
                ['name' => 'Conceitos CCNA', 'percentage' => 50],
            ],
            'Hardware e Manutenção' => [
                ['name' => 'Diagnóstico e Reparação', 'percentage' => 90],
                ['name' => 'Montagem de Computadores', 'percentage' => 95],
            ],
            'Segurança e Pentest' => [
                ['name' => 'Kali Linux / Ferramentas', 'percentage' => 50],
                ['name' => 'Análise de Redes (Wireshark)', 'percentage' => 45],
            ],
        ];
    }

    private function getLanguages()
    {
        return [
            ['name' => 'Português', 'percentage' => 100],
            ['name' => 'Inglês', 'percentage' => 50],
        ];
    }

    private function getPortfolios()
    {
        return [
            [
                'title' => 'EL BOOST - Software de Faturação Online e POS',
                'image' => 'portfolio_16943463071551993715.png',
                'slug' => 'EL-BOOST-software-de-faturacao-online-e-pos'
            ],
            [
                'title' => 'EstagioConnect - Conectando Talentos às Melhores Oportunidades',
                'image' => 'portfolio_16943463071551993716.png',
                'slug' => 'estagioconnect-conectando-talentos-às-melhores-oportunidades'
            ],
            [
                'title' => 'EduPrime - Transformando carreiras através da excelência em formação profissional. ',
                'image' => 'portfolio_16943463071551993717.png',
                'slug' => 'eduprime-transformando-carreiras-através-da-excelência-em-formação-profissional'
            ],
            [
                'title' => 'Portal de Treinamentos - Elprime Solution',
                'image' => 'portfolio_16943463071551993718.png',
                'slug' => 'portal-de-treinamentos-elprime-solution'
            ],
            [
                'title' => 'Elprime Solution - Óptima Solução para o mercado.',
                'image' => 'portfolio_16943463071551993719.png',
                'slug' => 'elprime-solution-óptima-solução-para-o-mercado'
            ],
            [
                'title' => 'CodeTracker - Seu Assistente Pessoal de Estudos Dev',
                'image' => 'portfolio_16943463071551993720.png',
                'slug' => 'codetracker-seu-assistente-pessoal-de-estudos-dev'
            ],
            [
                'title' => 'Elprime School - Plataforma EAD para Professores Freelancers',
                'image' => 'portfolio_16943463071551993721.png',
                'slug' => 'elprime-school-plataforma-ead-para-professores-freelancers'
            ]
        ];
    }

    private function getTestimonials()
    {
        return [
            [
                'name' => 'Pedro K. Raimundo',
                'position' => 'CEO da Elprime Solution',
                'image' => 'Raimundo.webp',
                'rating' => 5,
                'comment' => 'João é um grande profissional. Ele realmente se dedica no que faz, e ama. Amo seus trabalhos e a sua capacidade de resolver os problemas e dar sempre uma boa solução...'
            ],
            [
                'name' => 'Álvaro Kichandoki',
                'position' => 'Contabilista',
                'image' => 'Álvaro.webp',
                'rating' => 3,
                'comment' => 'João é um profissional dedicado, muito rápido e eficiente para entregar os projetos. Ele tem um bom conhecimento técnico.'
            ],
            [
                'name' => 'Sebastião da Cruz Miranda',
                'position' => 'Eng. de Software',
                'image' => 'Sebastiao.jpg',
                'rating' => 5,
                'comment' => 'Óptimo profissional. Recomendo fortemente seus serviços.'
            ]
        ];
    }

    private function getBlogs()
    {
        return [
            [
                'title' => 'lifestyle - O app perfeito para você',
                'slug' => 'life',
                'image' => '1684387720537358025.png',
                'date' => '2026-09-11'
            ],
            [
                'title' => 'Chita - Sistema de Gestão Escolar',
                'slug' => 'chita-sistema-de-gestao-escolar',
                'image' => '16692947501046140923.png',
                'date' => '2026-12-24'
            ],
            [
                'title' => 'Usando API para validar dados do bilhete...',
                'slug' => 'usando-api-para-validar-dados-do-bilhete-angola',
                'image' => '16403401081071754391.png',
                'date' => '2026-08-20'
            ]
        ];
    }

    private function getClients()
    {
        return [
            ['name' => 'Elprime Solution', 'url' => 'https://elprimesolution.com', 'logo' => 'elprime.png'],
            ['name' => 'Wobotec', 'url' => '#', 'logo' => 'wobotec.jpg'],
            ['name' => 'Isicloud', 'url' => 'https://isicloud.ao/', 'logo' => '1621420985587513328.png'],
            ['name' => 'Serhost', 'url' => 'https://www.serhost.ao/', 'logo' => '1621416769256269180.png'],
            ['name' => 'Angohost', 'url' => 'http://angohost.ao/', 'logo' => '1621416549566158389.png'],
        ];
    }

    private function getServices()
    {
        return [
            [
                'id' => 8,
                'title' => 'Desenvolvimento Web',
                'image' => '1574776906727189926.png',
                'description' => 'Criação de websites e sistemas web robustos, utilizando tecnologias modernas como PHP, Laravel e JavaScript para entregar soluções de alta performance.'
            ],
            [
                'id' => 16,
                'title' => 'Desenvolvimento de Apps',
                'image' => 'app.png',
                'description' => 'Desenvolvimento de aplicações móveis multiplataforma com Flutter, focadas numa experiência de utilizador intuitiva e design responsivo para Android e iOS.'
            ],
            [
                'id' => 17,
                'title' => 'Gestão de Redes e Servidores',
                'image' => 'network.png',
                'description' => 'Implementação e gestão de infraestruturas de rede e servidores (Linux/Windows), garantindo segurança, conectividade e performance para o seu negócio.'
            ],
            [
                'id' => 18,
                'title' => 'Suporte Técnico e Hardware',
                'image' => 'support.png',
                'description' => 'Serviços de montagem, diagnóstico e reparação de computadores, oferecendo suporte técnico especializado para resolver problemas de hardware e software.'
            ]
            ,
            [
                'id' => 19,
                'title' => 'Pentest & Segurança',
                'image' => 'cyber-security.png',
                'description' => 'Análise de vulnerabilidades e testes de intrusão para garantir a segurança dos seus sistemas e proteger os seus dados contra ameaças.'
            ]
            ,
            [
                'id' => 20,
                'title' => 'Desenvolvimento Desktop',
                'image' => 'desktop.png',
                'description' => 'Criação de aplicações desktop robustas e eficientes com C# e .NET Framework, focadas em performance e experiência de utilizador nativa.'
            ]
        ];
    }

    private function getStats()
    {
        return [
            ['icon' => '15765234541659685266.png', 'count' => 4, 'suffix' => '+', 'title' => 'Anos de Exp'],
            ['icon' => '15765234441378728684.png', 'count' => 30, 'suffix' => '+', 'title' => 'Clientes Satisfeitos'],
            ['icon' => '15765234241155195086.png', 'count' => 50, 'suffix' => '+', 'title' => 'Trabalhos feitos'],
        ];
    }

    private function getPricings()
    {
        return [
            [
                'title' => 'Desenvolvimento Web',
                'price' => 350000,
                'currency' => 'AOA',
                'period' => 'por projeto',
                'features' => [
                    'Website Responsivo',
                    'Design Moderno e UI/UX',
                    'Otimização SEO Básica',
                    'Formulário de Contacto',
                    '1 Ano de Suporte Gratuito',
                ],
                'featured' => false,
            ],
            [
                'title' => 'Desenvolvimento de Apps',
                'price' => 500000,
                'currency' => 'AOA',
                'period' => 'por projeto',
                'features' => [
                    'App para Android & iOS',
                    'Design UI/UX Personalizado',
                    'Integração com APIs',
                    'Publicação nas Lojas',
                    'Suporte Prioritário',
                ],
                'featured' => false,
            ],
            [
                'title' => 'Desenvolvimento Desktop',
                'price' => 450000,
                'currency' => 'AOA',
                'period' => 'por projeto',
                'features' => [
                    'Aplicação para Windows',
                    'Interface Intuitiva (UI/UX)',
                    'Base de Dados Local/Remota',
                    'Instalador Personalizado',
                    'Suporte e Manutenção',
                ],
                'featured' => false,
            ],
            [
                'title' => 'Manutenção & Suporte',
                'price' => 75000,
                'currency' => 'AOA',
                'period' => 'mensal',
                'features' => [
                    'Atualizações de Segurança',
                    'Backups Regulares',
                    'Otimização de Performance',
                    'Suporte Técnico Dedicado',
                    'Relatórios Mensais',
                ],
                'featured' => false,
            ],
            [
                'title' => 'Gestão de Redes',
                'price' => 150000,
                'currency' => 'AOA',
                'period' => 'mensal',
                'features' => [
                    'Configuração de Firewall',
                    'Monitoramento de Rede 24/7',
                    'Gestão de Servidores',
                    'VPN e Acesso Remoto Seguro',
                    'Relatórios de Performance',
                ],
                'featured' => false,
            ],
            [
                'title' => 'Pentest & Segurança',
                'price' => 700000,
                'currency' => 'AOA',
                'period' => 'por avaliação',
                'features' => [
                    'Análise de Vulnerabilidades Web',
                    'Teste de Intrusão de Rede',
                    'Relatório Detalhado de Falhas',
                    'Recomendações de Correção',
                    'Teste de Phishing Simulado',
                ],
                'featured' => false,
            ],
        ];
    }

    public function portfolioDetail($slug)
    {
        $portfolios = $this->getPortfolios();
        $portfolio = collect($portfolios)->firstWhere('slug', $slug);

        if (!$portfolio) {
            abort(404);
        }

        return view('portfolio-detail', compact('portfolio'));
    }

    public function portfolios()
    {
        $portfolios = $this->getPortfolios();
        return view('portfolios', compact('portfolios'));
    }

    public function blog()
    {
        $blogs = $this->getBlogs();
        return view('blog', compact('blogs'));
    }

    public function blogPost($slug)
    {
        $blogs = $this->getBlogs();
        $post = collect($blogs)->firstWhere('slug', $slug);

        if (!$post) {
            abort(404);
        }

        return view('blog-post.' . $post['slug'], compact('post'));
    }

    public function serviceDetail($id)
    {
        $services = $this->getServices();
        $service = collect($services)->firstWhere('id', $id);

        if (!$service) {
            abort(404);
        }

        return view('service-detail', compact('service'));
    }
}
