<?php

class Seobox
{
	protected $loader;

	protected $plugin_name;

	protected $version;


	public function __construct()
	{
		if ( defined( 'PLUGIN_NAME_VERSION' ) )
		{
			$this->version = PLUGIN_NAME_VERSION;
		}
		else
		{
			$this->version = '0.3.0';
		}

		$this->plugin_name = 'SeoBox';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_settings_hooks();
		$this->define_public_hooks();
	}


	private function load_dependencies()
	{
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-seobox-loader.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-seobox-i18n.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-seobox-admin.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'settings/class-seobox-settings.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-seobox-public.php';

		$this->loader = new Seobox_Loader();
	}


	private function set_locale()
	{
		$plugin_i18n = new Seobox_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );
	}


	private function define_admin_hooks()
	{
		$plugin_admin = new Seobox_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

		$this->loader->add_action( 'add_meta_boxes', $plugin_admin, 'add_seo_metabox' );
		$this->loader->add_action( 'save_post', $plugin_admin, 'save_va_seo' );
	}


	private function define_settings_hooks() {

		$plugin_settings = new Plugin_Name_Settings( $this->get_plugin_name(), $this->get_version() );

		// Script loaders
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_settings, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_settings, 'enqueue_scripts' );

		// Register the settings page
		$this->loader->add_action( 'admin_menu', $plugin_settings, 'register_settings_page' );
		// Register individual settings
		$this->loader->add_action( 'admin_init', $plugin_settings, 'register_settings' );

	}


	private function define_public_hooks()
	{
		$plugin_public = new Seobox_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
	}


	public function run()
	{
		$this->loader->run();
	}


	public function get_plugin_name()
	{
		return $this->plugin_name;
	}


	public function get_loader()
	{
		return $this->loader;
	}


	public function get_version()
	{
		return $this->version;
	}

}
