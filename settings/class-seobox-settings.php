<?php

class Plugin_Name_Settings
{

	private $plugin_name;

	private $version;


	public function __construct( $plugin_name, $version )
	{
		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}


	public function enqueue_styles()
	{
		wp_enqueue_style( $this->plugin_name . '-settings', plugin_dir_url( __FILE__ ) . 'dist/css/seobox-settings.css', array(), $this->version, 'all' );
	}


	public function enqueue_scripts()
	{
		wp_enqueue_script( $this->plugin_name . '-settings', plugin_dir_url( __FILE__ ) . 'dist/js/seobox-settings.js', array(), $this->version, false );
	}


	public function register_settings_page( )
	{
		 add_options_page( 'SeoBox' , 'SeoBox' , 'manage_options' , 'SeoBox' , [ &$this , 'settings_page_content' ] );
	}


	public function register_settings( )
	{
		register_setting( 'seobox-settings', 'seobox-setting-name-1' );
	}


	public function settings_page_content( )
	{
		require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'settings/partials/seobox-settings-display.php' );
	}


	public function seobox_settings_links( $links )
	{
		$mylinks = array(
			'<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">Settings</a>',
		);
		return array_merge( $links, $mylinks );
	}

}
