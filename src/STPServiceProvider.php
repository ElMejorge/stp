<?php

namespace AhorroLibre\STP;

use Illuminate\Support\ServiceProvider;

class STPServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('stp.php'),
        ]);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
        config([
            'config/config.php',
        ]);
    }

}
