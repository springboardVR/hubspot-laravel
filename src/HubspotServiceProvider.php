<?php

namespace SpringboardVR\HubspotLaravel;

use Illuminate\Support\ServiceProvider;
use SevenShores\Hubspot\Factory;

class HubspotServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/hubspot.php' => config_path('hubspot.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Factory::class, function ($app) {
            return new Factory(
                [
                    'key' => config('hubspot.key'),
                    'oauth' => false,
                    'base_url' => config('hubspot.base_url', 'https://api.hubapi.com'),
                ],
                null,
                [
                  'http_errors' => config('hubspot.http_errors')
                ],
                true
            );
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/hubspot.php', 'hubspot'
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Factory::class];
    }
}
