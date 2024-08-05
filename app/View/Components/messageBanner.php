<?php

namespace App\View\Components;

use Illuminate\View\Component;

class messageBanner extends Component
{
    /**
     * Create a new component instance.
    
     * @return void
     
     */
    public $class;
    public $msg;
    public function __construct($class,$msg)
    {
        $this->class = $class;
        $this->msg = $msg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.message-banner');
    }
}
