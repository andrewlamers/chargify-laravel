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
		$this->package('andrewlamers/chargify-laravel');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

		$this->app->bind('chargify', function () {

			$chargify = new Chargify(Config::get('chargify-laravel::config'));

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
