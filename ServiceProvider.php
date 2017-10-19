<?php namespace Hht\Support;

use Illuminate\Support\ServiceProvider as ServiceProviderSupport;

class ServiceProvider extends ServiceProviderSupport
{
    /**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
            __DIR__ . '/config/pushers.php' => config_path('pushers.php'),

			__DIR__ . '/config/payers.php' => config_path('payers.php'),
        ]);
	}
}
