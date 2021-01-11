<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchCategoryBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $title, public $image, public $class = '')
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
        return view('components.search-category-box');
    }
}
