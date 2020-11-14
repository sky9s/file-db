<?php

namespace Sky9s\FileDb\Components;

use Illuminate\View\Component;

class FileInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('sky9s::components.file-input');
    }
}
