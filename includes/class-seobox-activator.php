<?php

class Seobox_Activator
{
	protected $version;

	public static function activate()
	{
		$this->set_version_in_database();
		$this->setup_default_options();
		$this->register_activation();
	}


	private function set_version_in_database()
	{
		if ( defined( 'PLUGIN_NAME_VERSION' ) )
		{
			$this->version = PLUGIN_NAME_VERSION;

			// put the version number in de database as an array.
		}
	}


	private function setup_default_options()
	{
		// settup options, and default values.
	}


	private function register_activation()
	{
		// register activation to remote database.
	}
}
