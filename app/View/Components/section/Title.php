<?php

namespace App\View\Components\section;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Title extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $link;

    public function __construct($title, $link=null)
    {
        $this->title = $title;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section.title');
    }
}
