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
			$this->version = '0.5.0';
		}

		$this->plugin_name = 'SeoBox';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_settings_hooks();
		$this->define_public_hooks();
		$this->define_shortcodes_hooks();
	}


	private function load_dependencies()
	{
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-seobox-loader.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-seobox-i18n.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-seobox-admin.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'settings/class-seobox-settings.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'shortcodes/class-seobox-shortcodes.php';

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
		if( is_admin() )
		{
			$plugin_admin = new Seobox_Admin( $this->get_plugin_name(), $this->get_version() );

			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

			$this->loader->add_action( 'add_meta_boxes', $plugin_admin, 'add_seo_metabox' );
			$this->loader->add_action( 'save_post', $plugin_admin, 'save_seobox' );
		}
	}


	private function define_settings_hooks()
	{
		if( is_admin() )
		{
			$plugin_settings = new Plugin_Name_Settings( $this->get_plugin_name(), $this->get_version() );

			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_settings, 'enqueue_styles' );
			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_settings, 'enqueue_scripts' );

			$this->loader->add_action( 'admin_menu', $plugin_settings, 'register_settings_page' );
			$this->loader->add_action( 'admin_init', $plugin_settings, 'register_settings' );

			$this->loader->add_filter( 'plugin_action_links', $plugin_settings, 'seobox_settings_links', $priority = 10 );
			$this->loader->add_filter( 'plugin_row_meta', $plugin_settings, 'remove_plugin_meta', 10, 2 );

		}
	}


	private function define_public_hooks()
	{
		if( ! is_admin() )
		{
			$plugin_public = new Seobox_Public( $this->get_plugin_name(), $this->get_version() );

			$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
			$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

			$this->loader->add_action( 'after_setup_theme' , $plugin_public , 'add_seabox_add_theme_support');
			$this->loader->add_action( 'pre_get_document_title' , $plugin_public , 'add_seabox_title_to_head', 15 );
			$this->loader->add_action( 'wp_head' , $plugin_public , 'add_seabox_tags_to_head' , 1 , 1 );
		}
	}


	private function define_shortcodes_hooks()
	{
		$plugin_shortcodes = new Seobox_Shortcodes( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_shortcodes, 'enqueue_styles' );

		$this->loader->add_action( 'init' , $plugin_shortcodes , 'register_shortcodes' );
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
