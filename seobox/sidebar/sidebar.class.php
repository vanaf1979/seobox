<?php
/**
 * Admin area specific functionality of this plugin.
 *
 * @link       https://seobox.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    SeoBox
 * @subpackage SeoBox/Admin
 */

namespace SeoBox\Sidebar;


use SeoBox\Includes\Plugin as Plugin;


class Sidebar extends Plugin {


    private $dependancies = array(
        'wp-plugins',
        'wp-edit-post',
        'wp-element',
        'wp-components',
        'wp-data'
    );


    public function __construct() { 

        parent::__construct();

    }

    
    function enqueue_sidebar_assats() {

        wp_enqueue_style( $this->pluginname . '-sidebar' , plugin_dir_url( __FILE__ ) . 'dist/css/seobox-sidebar.css' , array() , $this->version , 'all' );

        wp_enqueue_script( $this->pluginname . '-sidebar' , plugin_dir_url( __FILE__ ) . 'dist/js/seobox-sidebar.js' , $this->dependancies , $this->version , 'all' );
        
        // oad plugin settings.
        // wp_localize_script( $this->pluginname . '-sidebar', 'seoboxp-settings', $this->enqueue_sidebar_styles() );

    }


    function enqueue_sidebar_styles() {

        

    }


    // private function get_seobox_settings() {

    //     return array();

    // }
    

    public function register_meta_fields() {

        $args = array(
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',
        );

        register_meta( 'post' , 'seobox_sidebar_test_field' , $args );
        
    }


    public function ajax_ge_settings() {

        $settings['testsetting'] = 'Test value';

        echo json_encode( $settings );

    }
    

}
