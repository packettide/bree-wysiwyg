<?php namespace Packettide\BreeWysiwyg;

use Packettide\Bree\FieldSetProvider as FieldSetProvider;
use Illuminate\Support\ServiceProvider;

class BreeWysiwygServiceProvider extends ServiceProvider {

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
		$this->package('packettide/bree-wysiwyg');

		FieldSetProvider::attachFields('advanced', array('Wysiwyg' => 'Packettide\BreeWysiwyg\BreeWysiwygAdvanced'));
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
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