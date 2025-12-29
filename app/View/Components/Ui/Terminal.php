<?php

namespace App\View\Components\Ui;

use Illuminate\View\Component;

class Terminal extends Component
{
    public $lines;

    public function __construct()
    {
        $this->lines = [
            ['type' => 'command', 'content' => 'quem sou eu'],
            ['type' => 'output', 'content' => 'engenheiro_devsecops'],
            ['type' => 'command', 'content' => 'verificar_status_de_segurança'],
            ['type' => 'output', 'content' => 'Sistema: Todos os protocolos de segurança ativos'],
            ['type' => 'command', 'content' => 'scan_vulnerabilities'],
            ['type' => 'output', 'content' => 'Status: Nenhuma ameaça crítica detectada'],
            ['type' => 'cursor', 'content' => 'LoneWolf_'],
        ];
    }

    public function render()
    {
        return view('components.ui.terminal');
    }
}
