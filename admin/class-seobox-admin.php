<?php

class Seobox_Admin
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
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'dist/css/seobox-admin.css', array(), $this->version, 'all' );
	}


	public function enqueue_scripts()
	{
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'dist/js/seobox-admin.js', array( 'jquery' ), $this->version, false );
	}


	public function add_seo_metabox()
	{
		$screens = ['post', 'page'];
		foreach ($screens as $screen)
		{
			add_meta_box(
				'seobox-meta',  // Unique ID
				'SeoBox',  // Box title
				[self::class, 'meta_box_content'],// Content callback, must be of type callable
				$screen  // Post type
			);
		}
	}


	public function meta_box_content( $post )
	{
		require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/seobox-admin-display.php' );
	}


	public static function save_va_seo( $post_id )
	{
		if ( array_key_exists( 'va_seo_test', $_POST ) )
		{
			// update_post_meta(
			// 	$post_id,
			// 	'_va_seo_test',
			// 	$_POST['va_seo_test']
			// );
		}
	}
}
