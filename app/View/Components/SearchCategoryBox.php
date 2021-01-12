<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class SearchCategoryBox extends Component
{
    public $url = '';

    /**
     * Create a new component instance.
     *
     * @param $title
     * @param $image
     * @param $name
     * @param string $class
     */
    public function __construct(public $title, public $image, public $name, public $class = '')
    {
        $category = Category::where('name', $name)->first();
        if ($category) {
            $this->url = route('search', ['category_id' => $category->id]);
        }
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
