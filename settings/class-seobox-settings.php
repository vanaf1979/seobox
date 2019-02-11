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
		 add_options_page( 'Seobox' , 'Seobox' , 'manage_options' , 'Seobox' , [ &$this , 'settings_page_content' ] );
	}


	public function register_settings( )
	{
		// Default arguments to register_setting
		$args_default = array(
			'type'              => 'string',
			'group'             => 'seobox-settings',
			'description'       => null,
			'sanitize_callback' => null,
			'show_in_rest'      => false
		);
		
		// Arguments to register_setting with sanitazion callback=.
		$args_text_input = array(
			'type'              => 'string',
			'group'             => 'seobox-settings',
			'description'       => null,
			'sanitize_callback' => array( $this, 'sanitize_input_callback'),
			'show_in_rest'      => false
		);

		// GOOGLE
		// G Browser title
		register_setting( 'seobox-settings', '_g_browser_title_active', $args_default );
		register_setting( 'seobox-settings', '_g_browser_title_addition', $args_default );
		register_setting( 'seobox-settings', '_g_browser_title_custom_addition', $args_text_input );
		register_setting( 'seobox-settings', '_g_browser_title_addition_position', $args_default );
		register_setting( 'seobox-settings', '_g_browser_title_default', $args_text_input );
		register_setting( 'seobox-settings', '_g_browser_title_max_lenght', $args_text_input );
		register_setting( 'seobox-settings', '_g_browser_title_max_length_overflow', $args_default );

		// G Keywords
		register_setting( 'seobox-settings', '_g_keywords_active', $args_default );
		register_setting( 'seobox-settings', '_g_keywords_default_value', $args_default );
		register_setting( 'seobox-settings', '_g_keywords_max_lenght', $args_text_input );
		register_setting( 'seobox-settings', '_g_keywords_max_length_overflow', $args_default );

		// G Description
		register_setting( 'seobox-settings', '_g_description_active', $args_default );
		register_setting( 'seobox-settings', '_g_description_default_value', $args_default );
		register_setting( 'seobox-settings', '_g_description_default_value_custom', $args_text_input );
		register_setting( 'seobox-settings', '_g_description_max_length', $args_text_input );
		register_setting( 'seobox-settings', '_g_description_max_length_overflow', $args_default );

		// G Robots
		register_setting( 'seobox-settings', '_g_robots_active', $args_default );
		register_setting( 'seobox-settings', '_g_robots_default_value', $args_default );

		// FB Canonical link
		register_setting( 'seobox-settings', '_g_canonical_active', $args_default );
		register_setting( 'seobox-settings', '_g_canonical_active_default_value', $args_default );
		register_setting( 'seobox-settings', '_g_canonical_custom_devault_value', $args_text_input );

		// FACEBOOK
		// FB open graph type
		register_setting( 'seobox-settings', '_fb_ogtype_active', $args_default );
		register_setting( 'seobox-settings', '_fb_ogtype_default_value', $args_default );

		// FB open graph title
		register_setting( 'seobox-settings', '_fb_ogtitle_active', $args_default );
		register_setting( 'seobox-settings', '_fb_ogtitle_addition', $args_default );
		register_setting( 'seobox-settings', '_fb_ogtitle_custom_addition', $args_text_input );
		register_setting( 'seobox-settings', '_fb_ogtitle_addition_position', $args_default );
		register_setting( 'seobox-settings', '_fb_ogtitle_default', $args_text_input );
		register_setting( 'seobox-settings', '_fb_ogtitle_max_lenght', $args_text_input );
		register_setting( 'seobox-settings', '_fb_ogtitle_max_length_overflow', $args_default );

		// FB open graph description
		register_setting( 'seobox-settings', '_fb_ogdescription_active', $args_default );
		register_setting( 'seobox-settings', '_fb_ogdescription_default_value', $args_default );
		register_setting( 'seobox-settings', '_fb_ogdescription_default_value_custom', $args_text_input );
		register_setting( 'seobox-settings', '_fb_ogdescription_max_length', $args_text_input );
		register_setting( 'seobox-settings', '_fb_ogdescription_max_length_overflow', $args_default );

		// FB open graph image
		register_setting( 'seobox-settings', '_fb_ogimage_active', $args_default );
		register_setting( 'seobox-settings', '_fb_ogimage_default_value', $args_default );
	}


	public function sanitize_input_callback( $value  )
	{
		return sanitize_text_field( $value );
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
