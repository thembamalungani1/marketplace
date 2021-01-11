<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Currency;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $storedCurrencies = Currency::all();
        $currencies = [];
        foreach ($storedCurrencies as $currency){
            $item = ['label' => $currency->acronym . ' - ' . $currency->country->name, 'value' => $currency->id];
            array_push($currencies, $item);
        }

        View::share('currencies', $currencies);

        $storedCategories = Category::all();
        $categories = [];
        foreach ($storedCategories as $category){
            $item = ['label' => $category->name, 'value' => $category->id];
            array_push($categories, $item);
        }

        View::share('categories', $categories);
    }
}
