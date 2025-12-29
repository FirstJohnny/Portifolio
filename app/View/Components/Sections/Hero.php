<?php

namespace App\View\Components\Sections;

use Illuminate\View\Component;

class Hero extends Component
{
    public $title;
    public $description;
    public $stats;

    public function __construct()
    {
        $this->title = "Construindo Futuros Digitais Seguros";
        $this->description = "Sou engenheiro DevSecOps e especialista em cibersegurança, com experiência na criação de sistemas resilientes e seguros que protegem contra ameaças modernas.";

        $this->stats = [
            ['value' => '50+', 'label' => 'Projetos Garantidos', 'color' => 'primary'],
            ['value' => '100%', 'label' => 'Auditorias de segurança aprovadas', 'color' => 'accent'],
            ['value' => '24/7', 'label' => 'Monitoramento de Ameaças', 'color' => 'cyber-green'],
        ];
    }

    public function render()
    {
        return view('components.sections.hero');
    }
}
