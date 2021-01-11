<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInputBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @param $label
     * @param $name
     * @param $id
     * @param string $type
     * @param string $placeholder
     * @param string $class
     */
    public function __construct(public $label, public $name, public $id, public $type = 'text', public $placeholder = '', public $class = '')
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
        return view('components.form-input-box');
    }
}
