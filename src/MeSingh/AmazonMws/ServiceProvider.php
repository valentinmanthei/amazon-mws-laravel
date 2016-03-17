<?php namespace MeSingh\AmazonMws;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        // Merge config file into services
        $this->mergeConfigFrom(
            __DIR__.'/../../config/services.php', 'services'
        );

		// $this->app->alias('AmazonOrderList', 'MeSingh\AmazonMws\AmazonOrderList');
		// $this->app->alias('AmazonOrderItemList', 'MeSingh\AmazonMws\AmazonOrderItemList');
	}

	public function boot()
	{
        //
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
