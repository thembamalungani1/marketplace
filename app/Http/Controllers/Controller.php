<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\UsesCategories;
use App\Http\Controllers\Traits\UsesCurrencies;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, UsesCurrencies, UsesCategories;

    public function __construct()
    {
        $this->registerCategories();
        $this->registerCurrencies();
    }
}
