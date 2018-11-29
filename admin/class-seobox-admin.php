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
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'dist/js/seobox-admin.js', array(), $this->version, false );
	}


	public function add_seo_metabox()
	{
		// Find custom post types
		$args = array( 'public' => true, 'exclude_from_search' => false, '_builtin' => false ); 
		$output = 'names';
		$operator = 'and';
		$screens = get_post_types( $args , $output , $operator );

		// Add post and page post types
		$screens[] = 'post';
		$screens[] = 'page';

		// Add meta box to all post types edit pages
		foreach ( $screens as $screen )
		{
			add_meta_box(
				'seobox-meta',
				'SeoBox',
				[self::class, 'meta_box_content'],
				$screen
			);
		}
	}


	public function meta_box_content( $post )
	{
		require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/seobox-admin-display.php' );
	}


	public static function save_seobox( $post_id )
	{
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		{
			return;
		}
		
		if ( $parent_id = wp_is_post_revision( $post_id ) )
		{
			$post_id = $parent_id;
		}

		// $file = plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-seobox-admin.php';
	 	// if ( ! isset( $_POST['seobox_admin_nonce'] ) || ! wp_verify_nonce( $_POST ['seobox_admin_nonce'], $file ) )
		// {
		// 	echo "NOPE seobox_admin_nonce";
		// 	echo $_POST['seobox_admin_nonce'];
		// 	exit;
		// 	return $post_id;
		// }

		if( array_key_exists( '_seobox_g_browser_title' , $_POST ) )
		{
			update_post_meta( $post_id , '_seobox_g_browser_title' , sanitize_text_field( $_POST['_seobox_g_browser_title'] ) );
		}
	}
}
