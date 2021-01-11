<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListingsListView extends Component
{
    /**
     * Create a new component instance.
     *
     * @param $listings
     */
    public function __construct(public $listings)
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
        return view('components.listings-list-view');
    }
}
