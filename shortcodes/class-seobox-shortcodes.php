<?php

class Seobox_Shortcodes
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
    

    public function register_shortcodes( )
	{
        add_shortcode( 'sbschema' , array(  $this , 'handle_schema_tag') );
        add_shortcode( 'sbschemablock' , array(  $this , 'handle_schemablock_tag') );
	}


	public function handle_schema_tag( $atts , $content = null )
	{
		$a = shortcode_atts( array(
			'type' => 'type'
		), $atts );

		return "<span class=\"{$a['class']}\">{$content}</span>";
    }
    

    public function handle_schemablock_tag( $atts , $content = null )
	{
		$a = shortcode_atts( array(
			'type' => 'type'
		), $atts );

		return "<div class=\"{$a['class']}\">{$content}</div>";
	}

}
