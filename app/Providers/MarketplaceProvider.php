<?php

namespace App\Providers;

use App\Contracts\IAuthenticationService;
use App\Contracts\IListingRepository;
use App\Contracts\IListingService;
use App\Repositories\ListingRepository;
use App\Services\AuthenticationService;
use App\Services\ListingService;
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
        $this->app->bind(IListingRepository::class, ListingRepository::class);
        $this->app->bind(IListingService::class, ListingService::class);
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
