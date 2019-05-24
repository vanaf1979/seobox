<?php
/**
 * Fontend specific functionality.
 *
 * @link       https://silk.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    Silk
 * @subpackage Silk/FrontEnd
 */

namespace Silk\Frontend;


use Silk\Includes\Plugin as Plugin;
use Silk\Frontend\Helpers\Tagbuilder as Tagbuilder;
use Silk\Frontend\Helpers\Titlevalue as Titlevalue;
use Silk\Frontend\Helpers\Metavalues as Metavalues;
use Silk\Frontend\Helpers\ValuesGoogle as ValuesGoogle;
use Silk\Frontend\Helpers\ValuesFacebook as ValuesFacebook;
use Silk\Frontend\Helpers\ValuesTwitter as ValuesTwitter;
use Silk\Frontend\Helpers\ValuesSchema as ValuesSchema;
use Silk\Frontend\Helpers\JsonLd as JsonLd;


class Frontend extends Plugin {

    /**
     * Constructor.
     */
    public function __construct() { 

        parent::__construct();
        
    }


    /**
     * enqueue_styles.
     *
     * Enqueue styles for the frontend.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function enqueue_styles() {

        // wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/seobox-public.css', array(), $this->version, 'all' );
    
    }


    /**
     * enqueue_styles.
     *
     * Enqueue scripts for the frontend.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function enqueue_scripts() {
    
        // wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/seobox-public.js', array( 'jquery' ), $this->version, false );
    
    }

    
    /**
     * add_theme_support.
     *
     * Add theme support for the title tag.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function add_theme_support( ) {
        
        add_theme_support( 'title-tag' );

    }


    /**
     * add_seabox_title_to_head.
     *
     * Add a title tag to the head.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function add_silk_title_to_head( $title ) {

        global $post;

        $title = new Titlevalue( $post->ID );

        return $title->get_title_value();

    }


    /**
     * add_silk_tags_to_head.
     *
     * Add seo meta tags to the head.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function add_silk_tags_to_head() {

        global $post;

        $tag_buider = new Tagbuilder();

        $output = '';

        // GOOGLE.
        $gvalues = new ValuesGoogle( $post->ID );
        // Description.
        $value = $gvalues->get_description_value();
        $output .= $tag_buider->write_meta_tag( 'description' , $value );
        // Robots
        $value = $gvalues->get_robots_value();
        $output .= $tag_buider->write_meta_tag( 'robots' , $value );
        // Conanical.
        $value = $gvalues->get_conanical_value();
        $output .= $tag_buider->write_meta_tag( 'canonical' , $value );


        // FACEBOOK.
        $fbvalues = new ValuesFacebook( $post->ID );

        $value = $fbvalues->get_open_graph_type();
        $output .= $tag_buider->write_meta_tag( 'og:type' , $value );
        
        $value = $fbvalues->get_open_graph_title();
        $output .= $tag_buider->write_meta_tag( 'og:title' , $value );

        $value = $fbvalues->get_open_graph_description();
        $output .= $tag_buider->write_meta_tag( 'og:description' , $value );

        $value = $fbvalues->get_open_graph_image();
        $output .= $tag_buider->write_meta_tag( 'og:image' , $value );

        
        // TWITTER.
        $twvalues = new ValuesTwitter( $post->ID );

        $value = $twvalues->get_card_type();
        $output .= $tag_buider->write_meta_tag( 'twitter:card' , $value );

        // ?
        $value = $twvalues->get_author_handle();
        $output .= $tag_buider->write_meta_tag( 'twitter:author' , $value );

        $value = $twvalues->get_title();
        $output .= $tag_buider->write_meta_tag( 'twitter:title' , $value );

        $value = $twvalues->get_description();
        $output .= $tag_buider->write_meta_tag( 'twitter:description' , $value );
        
        $value = $twvalues->get_image();
        $output .= $tag_buider->write_meta_tag( 'twitter:image' , $value );


        // SCHEMA.
        $svalues = new ValuesSchema( $post->ID );

        $value = $svalues->get_schema_type();
        $output .= $tag_buider->write_meta_tag( 'schema:type' , $value );

        $value = $svalues->get_schema_title();
        $output .= $tag_buider->write_meta_tag( 'schema:title' , $value );

        $value = $svalues->get_schema_description();
        $output .= $tag_buider->write_meta_tag( 'schema:description' , $value );

        $value = $svalues->get_schema_image();
        $output .= $tag_buider->write_meta_tag( 'schema:image' , $value );


        // TAGS.

        echo $output;
        
    }


    public function write_jsonld_to_head() {

        global $post;

        $jsonLd = new JsonLd( $post->ID );
        $json = $jsonLd->writeJsonLd();

        echo "\t<script type=\"application/ld+json\">{$json}</script>";

    }

}
