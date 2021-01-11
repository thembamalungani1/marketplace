<?php

namespace App\Providers;

use App\Contracts\IAuthenticationService;
use App\Services\AuthenticationService;
use Illuminate\Support\ServiceProvider;

class MarketplaceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IAuthenticationService::class, AuthenticationService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
