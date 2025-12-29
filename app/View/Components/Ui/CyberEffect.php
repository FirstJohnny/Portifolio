<?php

namespace App\View\Components\Ui;

use Illuminate\View\Component;

class CyberEffect extends Component
{
    public $type;

    public function __construct($type = 'grid')
    {
        $this->type = $type;
    }

    public function render()
    {
        return view('components.ui.cyber-effect');
    }
}
