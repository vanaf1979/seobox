<?php
/**
 * Fontend specific functionality.
 *
 * @link       https://seobox.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    SeoBox
 * @subpackage SeoBox/FrontEnd
 */

namespace SeoBox\Frontend;


use SeoBox\Includes\Plugin as Plugin;
use SeoBox\Frontend\Tagbuilder as Tagbuilder;
use SeoBox\Frontend\Titlevalue as Titlevalue;
use SeoBox\Frontend\Metavalues as Metavalues;
use SeoBox\Frontend\ValuesGoogle as ValuesGoogle;


class Frontend extends Plugin {


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
     * enqueue_styles.
     *
     * Enqueue styles for the frontend.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function s( ) {
        
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
    public function add_seabox_title_to_head( $title ) {

        global $post;

        $title = new Titlevalue( $post->ID );

        return $title->get_title_value();

    }


    /**
     * add_seobox_tags_to_head.
     *
     * Add seo meta tags to the head.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function add_seobox_tags_to_head() {

        global $post;

        $tag_buider = new Tagbuilder();

        $output = '';

        // GOOGLE.
        $gvalues = new ValuesGoogle( $post->ID );
        // Keywords
        $value = $gvalues->get_keywords_value();
        $output .= $tag_buider->write_meta_tag( 'keywords' , $value );
        // Description.
        $value = $gvalues->get_description_value();
        $output .= $tag_buider->write_meta_tag( 'description' , $value );
        // Robots
        $value = $gvalues->get_robots_value();
        $output .= $tag_buider->write_meta_tag( 'robots' , $value );
        // Conanical.
        $value = $gvalues->get_conanical_value();
        $output .= $tag_buider->write_meta_tag( 'conanical' , $value );


        // FACEBOOK.


        // TWITTER.


        // SCHEMA.


        // TAGS.

        echo $output;

    }

}
