<?php

class Seobox_i18n
{

	public function load_plugin_textdomain()
	{
		load_plugin_textdomain(
			'seobox',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}

}
