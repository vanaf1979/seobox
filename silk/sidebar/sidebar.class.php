<?php
/**
 * Sidebar.
 *
 * Gutenberg sidebar related functionality.
 *
 * @link       https://silk.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    Silk
 * @subpackage Silk/Sidebar
 */

namespace Silk\Sidebar;


use Silk\Includes\Plugin as Plugin;


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


    private $fields = array(
        'silk_g_browser_title',
        'silk_g_description',
        'silk_g_canonical',
        'silk_g_index_follow',
        'silk_fb_open_graph_type',
        'silk_fb_open_graph_title',
        'silk_fb_open_graph_description',
        'silk_fb_open_graph_image',
        'silk_tw_card_type',
        'silk_tw_author_handle',
        'silk_tw_title',
        'silk_tw_description',
        'silk_tw_image',
        'silk_s_type',
        'silk_s_title',
        'silk_s_description',
        'silk_s_image'
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

        wp_enqueue_style(
            $this->pluginname . '-sidebar',
            plugin_dir_url( __FILE__ ) . 'dist/css/silk-sidebar.css',
            array() , $this->version,
            'all'
        );

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

        wp_enqueue_script(
            $this->pluginname . '-sidebar',
            plugin_dir_url( __FILE__ ) . 'dist/js/silk-sidebar.js',
            $this->dependancies,
            $this->version,
            'all'
        );

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

        foreach( $this->fields as $field ) {

            register_meta(
                'post',
                $field,
                $args
            );

        }
        
    }
    
}
