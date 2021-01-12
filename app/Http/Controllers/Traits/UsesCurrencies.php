<?php


namespace App\Http\Controllers\Traits;


use App\Models\Currency;
use Illuminate\Support\Facades\View;

trait UsesCurrencies
{
    public function registerCurrencies()
    {
        $storedCurrencies = Currency::all();
        $currencies = [['label' => 'Currency', 'value' => 0]];

        foreach ($storedCurrencies as $currency){
            $label = sprintf('%s - %s', $currency->acronym, $currency->country->name);
            $item = ['label' => $label, 'value' => $currency->id];
            array_push($currencies, $item);
        }

        View::share('currencies', $currencies);
    }
}
