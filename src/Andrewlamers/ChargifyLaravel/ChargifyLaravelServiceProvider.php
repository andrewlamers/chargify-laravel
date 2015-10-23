<?php
namespace Andrewlamers\ChargifyLaravel;
use Illuminate\Support\ServiceProvider;
use Crucial\Service\Chargify;
use Config;

class ChargifyLaravelServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(array(
            __DIR__.'/chargify.php' => config_path('chargify.php')
        ), 'config');

        $this->mergeConfigFrom(__DIR__.'/chargify.php', 'chargify');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('chargify', function ($app) {

            $chargify = new Chargify(config('chargify'));

            return $chargify;

        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('chargify');
    }

}