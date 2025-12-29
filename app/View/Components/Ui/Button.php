<?php

namespace App\View\Components\Ui;

use Illuminate\View\Component;

class Button extends Component
{
    public $href;
    public $variant;
    public $type;
    public $disabled;

    public function __construct(
        $href = '#',
        $variant = 'primary',
        $type = 'button',
        $disabled = false
    ) {
        $this->href = $href;
        $this->variant = $variant;
        $this->type = $type;
        $this->disabled = $disabled;
    }

    public function render()
    {
        return view('components.ui.button');
    }
}
