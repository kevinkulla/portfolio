<?php

namespace App\View\Components;

use Illuminate\View\Component;

class restOfPaintings extends Component
{

    public $collectionId;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($collectionId)
    {
        $this->collectionId = $collectionId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.rest-of-paintings');
    }
}
