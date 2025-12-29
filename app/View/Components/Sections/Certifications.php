<?php

namespace App\View\Components\Sections;

use Illuminate\View\Component;

class Certifications extends Component
{
    public $certs;

    public function __construct()
    {
        $this->certs = [
            [
                'name' => 'Imersão Dev Com Google Gimini',
                'issuer' => 'Alura',
                'date' => '2025',
                'image' => 'certifications/alura.png',
                'url' => 'documentos/Certificado1.pdf'
            ],
            [
                'name' => 'Cyber Academy 2025 2ª Edição',
                'issuer' => 'FEBRABAN ',
                'date' => '2025',
                'image' => 'certifications/cyber.png',
                'url' => 'documentos/certificado2.pdf'
            ]
        ];
    }

    public function render()
    {
        return view('components.sections.certifications');
    }
}
