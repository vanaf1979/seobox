<?php
/**
 * This class handles the plugins shortcodes.
 *
 * @link       https://seobox.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    SeoBox
* @subpackage SeoBox/Shortcodes
 */

namespace SeoBox\Shortcodes;


use SeoBox\Includes\Plugin as Plugin;


class Shortcodes extends Plugin {


    public function __construct() { }


    public function enqueue_styles() {

        // wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/seobox-public.css', array(), $this->version, 'all' );
    
    }


    public function register_shortcodes( ) {

        add_shortcode( 'sbsb' , array(  $this , 'handle_schemablock_tag') );
        add_shortcode( 'sbs' , array(  $this , 'handle_schema_tag') );

    }


    public function handle_schema_tag( $atts , $content = null ) {

        $a = shortcode_atts( array(
            'tag' => 'tag',
            'prop' => 'prop'
        ), $atts );

        if( $a['tag'] > '' ) {

            $a['tag'] = "span";
        
        }

        $content = do_shortcode( $content );
        return "<{$a['tag']} class=\"sbshcema\" itemprop=\"{$a['prop']}\">{$content}</{$a['tag']}>";
    }


    public function handle_schemablock_tag( $atts , $content = null ) {

        $a = shortcode_atts( array(
            'tag' => '',
            'prop' => '',
            'type' => ''
        ), $atts );

        if( $a['tag'] > '' ) {

            $a['tag'] = "div";

        }

        if( $a['prop'] > '' ) {

            $a['prop'] = " itemprop=\"{$a['prop']}\"";
        
        }

        $content = do_shortcode( $content );
        return "<{$a['tag']}{$itemprop} class=\"sbschemablock\" itemscope itemtype=\"{$a['type']}\">{$content}</{$a['tag']}>";
    
    }

}
