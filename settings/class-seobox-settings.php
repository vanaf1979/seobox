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
			'<a href="https://seobox.vanaf1979.nl" target="_blank">Website</a>',
		);
		return array_merge( $links, $mylinks );
	}


	public function remove_plugin_meta( $plugin_meta , $plugin_file )
	{
		$plugin_meta[1] = str_replace( 'href="https://vanaf1979.nl"', 'href="https://vanaf1979.nl" target="_blank"' , $plugin_meta[1] );
		unset( $plugin_meta[2] );
		$plugin_meta[] = '<a href="https://twitter.com/wpseobox" target="_blank">Twitter</a>';
		return $plugin_meta;
	}
}
