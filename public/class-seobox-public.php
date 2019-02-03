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


	public function add_seabox_title_to_head( )
	{
		return 'Steph\'s geweldige title';
	}


	public function add_seabox_tags_to_head( )
	{
		echo $this->make_tag( 'meta', [ 'name' => 'sb-version' , 'content' => $this->version ] );
	}


	private static function make_tag( $tag , $attrs )
	{
		$return = "<{$tag} " ;
		foreach ( $attrs as $key => $value )
		{
			$return .= "{$key}=\"{$value}\" ";
		}
		return $return .= '/>' . "\n";
	}

}
