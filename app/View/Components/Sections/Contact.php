<?php

namespace App\View\Components\Sections;

use Illuminate\View\Component;

class Contact extends Component
{
    public $contactInfo;

    public function __construct()
    {
        $this->contactInfo = [
            [
                'icon' => 'envelope',
                'title' => 'E-mail',
                'content' => 'joaonicolauremostomas@gmail.com'
            ],
            [
                'icon' => 'phone',
                'title' => 'Telefone',
                'content' => '+244 932 905 801'
            ],
            [
                'icon' => 'map-marker-alt',
                'title' => 'Localização',
                'content' => 'Luanda-Angola, Cacuaco'
            ],
            [
                'icon' => 'clock',
                'title' => 'Disponibilidade',
                'content' => 'Disponível para contratos e vagas em tempo integral.'
            ],
        ];
    }

    public function render()
    {
        return view('components.sections.contact');
    }
}
