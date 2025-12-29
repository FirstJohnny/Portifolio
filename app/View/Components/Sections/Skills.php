<?php

namespace App\View\Components\Sections;

use Illuminate\View\Component;

class Skills extends Component
{
    public $skills;

    public function __construct()
    {
        $this->skills = [
            [
                'icon' => 'code',
                'title' => 'Desenvolvimento seguro',
                'description' => 'Desenvolvimento de aplicações com foco em segurança, utilizando frameworks modernos e práticas de programação segura.',
                'tags' => ['Python', 'Java', 'Node.js', 'SAST/DAST']
            ],
            [
                'icon' => 'network-wired',
                'title' => 'Segurança da infraestrutura',
                'description' => 'Projetar e implementar arquiteturas de rede seguras, firewalls e sistemas de detecção de intrusão.',
                'tags' => ['AWS/Azure', 'Kubernetes', 'Docker', 'Terraform']
            ],
            [
                'icon' => 'shield-alt',
                'title'=>'Operações de segurança',
                'description'=>'Implementação de análise de ameaças, gestão de vulnerabilidades, resposta a incidentes e monitoramento de segurança.',
                'tags'=>['SIEM','SOC','Teste de penetração','NIST/ISO']
            ],
             [
                'icon' => 'cloud',
                'title'=>'Segurança na nuvem',
                'description'=>'Protegendo ambientes de nuvem com políticas de IAM, criptografia, controles de conformidade e modelos de confiança zero.',
                'tags'=>['Segurança da AWS','Azure AD','CloudTrail','Benchmarks do CIS']
            ],
        ];
    }

    public function render()
    {
        return view('components.sections.skills');
    }
}
