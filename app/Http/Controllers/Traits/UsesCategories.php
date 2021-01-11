<?php


namespace App\Http\Controllers\Traits;


use App\Models\Category;
use Illuminate\Support\Facades\View;

trait UsesCategories
{
    public function registerCategories()
    {
        $storedCategories = Category::all();
        $categories = [['label' => 'Category', 'value' => 0]];
        foreach ($storedCategories as $category){
            $item = ['label' => $category->name, 'value' => $category->id];
            array_push($categories, $item);
        }

        View::share('categories', $categories);
    }
}
