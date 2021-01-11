<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormSelectOptions extends Component
{
    /**
     * Create a new component instance.
     *
     * @param $label
     * @param $name
     * @param $id
     * @param $options
     */
    public function __construct(public $label, public $name, public $id, public $options)
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
        return view('components.form-select-options');
    }
}
