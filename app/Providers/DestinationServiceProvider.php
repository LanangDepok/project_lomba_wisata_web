<?php

namespace App\Providers;

use App\Services\DestinationServiceInf;
use App\Services\DestinationService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class DestinationServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function provides()
    {
        return [DestinationServiceInf::class];
    }    /**
         * Register services.
         */
    public function register(): void
    {
        $this->app->singleton(DestinationServiceInf::class, DestinationService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
