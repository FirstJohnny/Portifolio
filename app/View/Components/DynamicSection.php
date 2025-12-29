<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DynamicSection extends Component
{
    public $type;
    public $data;

    public function __construct($type, $data = [])
    {
        $this->type = $type;
        $this->data = $data;
    }

    public function render()
    {
        // Renderiza diferentes componentes baseado no tipo
        $viewMap = [
            'hero' => 'components.sections.hero',
            'skills' => 'components.sections.skills',
            'projects' => 'components.sections.projects',
            'contact' => 'components.sections.contact',
        ];

        return view($viewMap[$this->type] ?? 'components.sections.default', $this->data);
    }
}
