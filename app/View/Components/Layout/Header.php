<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Header extends Component
{
    public $logo = 'LoneWolf';
    public $navItems;

    public function __construct()
    {
        $this->navItems = [
            ['label' => 'Inicio', 'href' => '#home'],
            ['label' => 'Habilidades', 'href' => '#skills'],
            ['label' => 'Projectos', 'href' => '#projects'],
            ['label' => 'Contacto', 'href' => '#contact'],
            ['label' => 'Sobre', 'href' => '#about'],
            ['label' => 'Certificações', 'href' => '#certifications']
        ];
    }

    public function render()
    {
        return view('components.layout.header');
    }
}
