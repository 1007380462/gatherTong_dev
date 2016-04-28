<?php
namespace App\Modules\Front\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class FrontServiceProvider extends ServiceProvider
{
	/**
	 * Register the Front module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\Front\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Front module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('front', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('front', base_path('resources/views/vendor/front'));
		View::addNamespace('front', realpath(__DIR__.'/../Resources/Views'));
	}
}
