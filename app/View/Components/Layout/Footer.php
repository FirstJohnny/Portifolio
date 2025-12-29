<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Footer extends Component
{
    public $socialLinks;
    public $quickLinks;
    public $year;

    public function __construct()
    {
        $this->socialLinks = [
            ['icon' => 'github', 'url' => 'https://github.com/FirstJohnny'],
            ['icon' => 'linkedin-in', 'url' => 'https://www.linkedin.com/in/jo%C3%A3o-nicolau-remos-tom%C3%A1s-621a1a363/'],
            ['icon' => 'whatsapp', 'url' => 'https://wa.me/244932905801'],
            ['icon' => 'dev', 'url' => '#'],
        ];

        $this->quickLinks = [
            ['label' => 'Inicio', 'url' => '#home'],
            ['label' => 'Habilidades', 'url' => '#skills'],
            ['label' => 'Projectos', 'url' => '#projects'],
            ['label' => 'Contacto', 'url' => '#contact'],
            ['label' => 'Blog', 'url' => '#'],
        ];

        $this->year = date('Y');
    }

    public function render()
    {
        return view('components.layout.footer');
    }
}
