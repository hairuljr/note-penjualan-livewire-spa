<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BackButton extends Component
{
    public $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route)
    {
        $this->route = $route;
    }

    public function render()
    {
        return view('components.back-button');
    }
}
