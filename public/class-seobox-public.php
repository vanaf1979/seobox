<?php

class Seobox_Public
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
		// wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/seobox-public.css', array(), $this->version, 'all' );
	}


	public function enqueue_scripts()
	{
		// wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/seobox-public.js', array( 'jquery' ), $this->version, false );
	}

	public function add_seabox_add_theme_support( )
	{
		add_theme_support( 'title-tag' );
	}


	public function add_seabox_title_to_head( $title )
	{
		global $post;
		$tag_buider = new Seobox_TagBulder( $post->ID );
		return $tag_buider->get_browser_title();
	}


	public function add_seabox_tags_to_head( )
	{
		global $post;
		$tag_buider = new Seobox_TagBulder( $post->ID );
		echo $tag_buider->get_tags_html();
	}

}
