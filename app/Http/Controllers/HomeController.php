<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = [
             [
                'icon' => 'bug',
                'title' => 'Scanner de vulnerabilidades automatizado',
                'description' => 'Uma plataforma SaaS abrangente que analisa continuamente aplicações web, APIs e infraestrutura em busca de vulnerabilidades de segurança, fornecendo orientações detalhadas para a sua correção.',
                'tags' => ['Python', 'Django', 'Docker', 'OWASP'],
                'links' => [
                    ['icon' => 'external-link-alt', 'label' => 'Demostração', 'url' => '#'],
                    ['icon' => 'github', 'label' => 'Código Fonte', 'url' => '#']
                ]
            ],
            [
                'icon' => 'shield-cat',
                'title' => 'Arquitetura de Rede de Confiança Zero',
                'description' => 'Implementação de segurança de rede microsegmentada com controles de acesso baseados em identidade e autenticação contínua para ambientes corporativos.',
                'tags' => ['Zero Trust', 'AWS', 'Terraform', 'SDP'],
                'links' => [
                    ['icon' => 'external-link-alt', 'label' => 'Estudo de Caso', 'url' => '#'],
                    ['icon' => 'file-pdf', 'label' => 'Relatório', 'url' => '#']
                ]
            ],
            [
                'icon' => 'key',
                'title' => 'Gestão de Identidade e Acesso',
                'description' => 'Solução IAM de nível empresarial com autenticação multifator, controle de acesso baseado em funções e gerenciamento de acesso privilegiado para ambientes híbridos.',
                'tags' => ['IAM', 'Azure AD', 'OAuth2.0', 'SAML'],
                'links' => [
                    ['icon' => 'external-link-alt', 'label' => 'Arquitetura', 'url' => '#'],
                    ['icon' => 'github', 'label' => 'Componentes', 'url' => '#']
                ]
            ],
            // ... mais projetos
        ];

        return view('pages.home', compact('projects'));
    }

    public function projects()
    {
        return view('pages.projects');
    }
}
