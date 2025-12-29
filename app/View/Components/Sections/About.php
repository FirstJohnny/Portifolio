<?php

namespace App\View\Components\Sections;

use Illuminate\View\Component;

class About extends Component
{
    public $bio;
    public $journey;
    public $gallery;

    public function __construct()
    {
        $this->bio = "Sou um Dev FullStack e Especialista em Cibersegurança apaixonado por criar sistemas resilientes. Com uma abordagem 'security-first', combino desenvolvimento ágil com práticas robustas de defesa.";

        $this->journey = [
            "Iniciei minha jornada explorando redes locais e sistemas Linux, fascinado por como os dados viajavam.",
            "Especializei-me em DevSecOps para preencher a lacuna entre velocidade de desenvolvimento e segurança.",
            "Hoje, atuo protegendo infraestruturas críticas e desenvolvendo soluções que resistem às ameaças modernas.",
            "Sou muito abil e expert em laravel, Node Js, Python e C#."
        ];

        // Substitua as URLs abaixo pelas suas fotos reais
        $this->gallery = [
            ['url' => 'image/eu.webp', 'alt' => 'Meu Setup'],
            ['url' => 'image/feira.webp', 'alt' => 'Palestrando'],
            ['url' => 'image/coding.png', 'alt' => 'Desenvolvendo'],
            ['url' => 'image/equipa.webp', 'alt' => 'Trabalho em Equipe'],
        ];
    }

    public function render()
    {
        return view('components.sections.about');
    }
}
