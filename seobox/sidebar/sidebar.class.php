<?php
/**
 * Sidebar.
 *
 * Gutenberg sidebar related functionality.
 *
 * @link       https://seobox.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    SeoBox
 * @subpackage SeoBox/Sidebar
 */

namespace SeoBox\Sidebar;


use SeoBox\Includes\Plugin as Plugin;


class Sidebar extends Plugin {


    /**
	 * Gutenberg dependancies.
	 *
	 * @var array $dependancies
	 */
    private $dependancies = array(
        'wp-plugins',
        'wp-edit-post',
        'wp-element',
        'wp-components',
        'wp-data',
        'wp-dom-ready'
    );


    /**
	 * Constructor.
	 */
    public function __construct() { 

        parent::__construct();

    }

    
    /**
     * enqueue_sidebar_styles.
     *
     * Enqueue styles for the gutenberg sidebar.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function enqueue_sidebar_styles() {

        wp_enqueue_style( $this->pluginname . '-sidebar' , plugin_dir_url( __FILE__ ) . 'dist/css/seobox-sidebar.css' , array() , $this->version , 'all' );

    }


    /**
     * enqueue_sidebar_scripts.
     *
     * Enqueue scripts for the gutenberg sidebar.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function enqueue_sidebar_scripts() {

        wp_enqueue_script( $this->pluginname . '-sidebar' , plugin_dir_url( __FILE__ ) . 'dist/js/seobox-sidebar.js' , $this->dependancies , $this->version , 'all' );

    }
    

    /**
     * register_meta_fields.
     *
     * Register meta fields for.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function register_meta_fields() {

        $args = array(
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',
        );

        register_meta( 'post' , 'seobox_sidebar_test_field' , $args );
        
    }
    
}
