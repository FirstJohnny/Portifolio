<?php

namespace App\View\Components\Ui;

use Illuminate\View\Component;

class Card extends Component
{
    public $variant;
    public $icon;
    public $title;
    public $description;
    public $tags;
    public $animationDelay;

    public function __construct(
        $variant = 'default',
        $icon = null,
        $title = null,
        $description = null,
        $tags = [],
        $animationDelay = 0
    ) {
        $this->variant = $variant;
        $this->icon = $icon;
        $this->title = $title;
        $this->description = $description;
        $this->tags = is_array($tags) ? $tags : explode(',', $tags);
        $this->animationDelay = $animationDelay;
    }

    public function render()
    {
        return view('components.ui.card');
    }
}
