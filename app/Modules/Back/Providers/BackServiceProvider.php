<?php
namespace App\Modules\Back\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class BackServiceProvider extends ServiceProvider
{
	/**
	 * Register the Back module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\Back\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Back module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('back', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('back', base_path('resources/views/vendor/back'));
		View::addNamespace('back', realpath(__DIR__.'/../Resources/Views'));
	}
}
