<?php

namespace Willemo\LaravelFlightStats;

use Illuminate\Support\ServiceProvider;
use Willemo\FlightStats\FlexClient;

class FlexServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FlexClient::class, function ($app) {
            return new FlexClient($app['config']['flightstats']);
        });
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/flightstats.php' => config_path('flightstats.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            FlexClient::class,
        ];
    }
}
