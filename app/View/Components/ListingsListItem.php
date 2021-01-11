<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListingsListItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @param $listing
     */
    public function __construct(public $listing)
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
        return view('components.listings-list-item');
    }
}
