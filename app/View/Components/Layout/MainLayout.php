<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class MainLayout extends Component
{
    public $title;

    public function __construct($title = 'LoneWolf Portfolio')
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('components.layout.main-layout');
    }
}
