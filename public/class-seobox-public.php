<?php

class Seobox_Public
{

	private $plugin_name;

	private $version;


	public function __construct( $plugin_name, $version )
	{
		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->load_dependencies();
	}

	private function load_dependencies()
	{
		require_once plugin_dir_path( dirname( __FILE__ ) ) . '/public/class-tag-builder.php';
	}


	public function enqueue_styles()
	{
		// wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/seobox-public.css', array(), $this->version, 'all' );
	}


	public function enqueue_scripts()
	{
		// wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/seobox-public.js', array( 'jquery' ), $this->version, false );
	}


	public function add_seabox_title_to_head( )
	{
		return 'Steph\'s geweldige title';
	}


	public function add_seabox_tags_to_head( )
	{
		global $post;
		$tag_buider = new Seobox_TagBulder( $post->ID );
		echo $tag_buider->get_tags_html();
	}

}
