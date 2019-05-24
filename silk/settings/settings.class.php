<?php
/**
 * Settings page specific functionality of this plugin.
 *
 * @link       https://silk.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    Silk
 * @subpackage Silk/Settings
 */

namespace Silk\Settings;


use Silk\Includes\Plugin as Plugin;


class Settings extends Plugin {


    public function __construct() { 

        parent::__construct();
        
    }


    /**
     * enqueue_styles.
     *
     * Enqueue styles for admin pages.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function enqueue_styles() {

        wp_enqueue_style(
            $this->pluginname . '-settings',
            plugin_dir_url( __FILE__ ) . 'dist/css/silk-settings.css',
            array(),
            $this->version,
            'all'
        );
    
    }


    /**
     * enqueue_scripts.
     *
     * Enqueue scripts for admin pages.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function enqueue_scripts() {

        wp_enqueue_script(
            $this->pluginname . '-settings',
            plugin_dir_url( __FILE__ ) . 'dist/js/silk-settings.js',
            array(),
            $this->version,
            false
        );
    
    }


    /**
     * register_settings_page.
     *
     * Register the settings page under settings.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function register_settings_page( ) {

        add_options_page(
            'Silk',
            'Silk',
            'manage_options',
            'Silk',
            [ &$this , 'settings_page_content' ]
        );
    
    }


    /**
     * register_settings.
     *
     * Register settings with WordPress.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function register_settings( ) {

        // Default arguments to register_setting
        $args_default = array(
            'type'              => 'string',
            'group'             => 'silk-settings',
            'description'       => null,
            'sanitize_callback' => null,
            'show_in_rest'      => false
        );

        // Arguments to register_setting with sanitazion callback.
        $args_text_input = array(
            'type'              => 'string',
            'group'             => 'silk-settings',
            'description'       => null,
            'sanitize_callback' => array( $this, 'sanitize_input_callback'),
            'show_in_rest'      => false
        );

        
        // GOOGLE
        // Google Browser title.
        register_setting( 'silk-settings-google', 'g_browser_title_active', $args_default );
        register_setting( 'silk-settings-google', 'g_browser_title_addition', $args_default );
        register_setting( 'silk-settings-google', 'g_browser_title_custom_addition', $args_text_input );
        register_setting( 'silk-settings-google', 'g_browser_title_addition_position', $args_default );
        register_setting( 'silk-settings-google', 'g_browser_title_default', $args_text_input );
        register_setting( 'silk-settings-google', 'g_browser_title_max_lenght', $args_text_input );
        register_setting( 'silk-settings-google', 'g_browser_title_max_length_overflow', $args_default );

        // Google Keywords.
        register_setting( 'silk-settings-google', 'g_keywords_active', $args_default );
        register_setting( 'silk-settings-google', 'g_keywords_default_value', $args_default );
        register_setting( 'silk-settings-google', 'g_keywords_max_lenght', $args_text_input );
        register_setting( 'silk-settings-google', 'g_keywords_max_length_overflow', $args_default );

        // Google Description.
        register_setting( 'silk-settings-google', 'g_description_active', $args_default );
        register_setting( 'silk-settings-google', 'g_description_default_value', $args_default );
        register_setting( 'silk-settings-google', 'g_description_default_value_custom', $args_text_input );
        register_setting( 'silk-settings-google', 'g_description_max_length', $args_text_input );
        register_setting( 'silk-settings-google', 'g_description_max_length_overflow', $args_default );

        // Google Robots.
        register_setting( 'silk-settings-google', 'g_robots_active', $args_default );
        register_setting( 'silk-settings-google', 'g_robots_default_value', $args_default );

        // Google Canonical link.
        register_setting( 'silk-settings-google', 'g_canonical_active', $args_default );
        register_setting( 'silk-settings-google', 'g_canonical_active_default_value', $args_default );
        register_setting( 'silk-settings-google', 'g_canonical_custom_devault_value', $args_text_input );

        // FACEBOOK
        // Facebook open graph type.
        register_setting( 'silk-settings-facebook', 'fb_ogtype_active', $args_default );
        register_setting( 'silk-settings-facebook', 'fb_ogtype_default_value', $args_default );

        // Facebook open graph title.
        register_setting( 'silk-settings-facebook', 'fb_ogtitle_active', $args_default );
        register_setting( 'silk-settings-facebook', 'fb_ogtitle_addition', $args_default );
        register_setting( 'silk-settings-facebook', 'fb_ogtitle_custom_addition', $args_text_input );
        register_setting( 'silk-settings-facebook', 'fb_ogtitle_addition_position', $args_default );
        register_setting( 'silk-settings-facebook', 'fb_ogtitle_default', $args_text_input );
        register_setting( 'silk-settings-facebook', 'fb_ogtitle_max_lenght', $args_text_input );
        register_setting( 'silk-settings-facebook', 'fb_ogtitle_max_length_overflow', $args_default );

        // Facebook open graph description.
        register_setting( 'silk-settings-facebook', 'fb_ogdescription_active', $args_default );
        register_setting( 'silk-settings-facebook', 'fb_ogdescription_default_value', $args_default );
        register_setting( 'silk-settings-facebook', 'fb_ogdescription_default_value_custom', $args_text_input );
        register_setting( 'silk-settings-facebook', 'fb_ogdescription_max_length', $args_text_input );
        register_setting( 'silk-settings-facebook', 'fb_ogdescription_max_length_overflow', $args_default );

        // Facebook open graph image.
        register_setting( 'silk-settings-facebook', 'fb_ogimage_active', $args_default );
        register_setting( 'silk-settings-facebook', 'fb_ogimage_default_value', $args_default );
        register_setting( 'silk-settings-facebook', 'fb_ogimage_custom_default_value', $args_default );

        // TWITTER
        // Twiiter card type.
        register_setting( 'silk-settings-twitter', 'tw_cardtype_active', $args_default );
        register_setting( 'silk-settings-twitter', 'tw_cardtype_default_value', $args_default );

        // Twiiter card author handle.
        register_setting( 'silk-settings-twitter', 'tw_cardauthor_active', $args_default );
        register_setting( 'silk-settings-twitter', 'tw_cardauthor_default', $args_default );

        // Twiiter card title.
        register_setting( 'silk-settings-twitter', 'tw_cardtitle_active', $args_default );
        register_setting( 'silk-settings-twitter', 'tw_cardtitle_addition', $args_default );
        register_setting( 'silk-settings-twitter', 'tw_cardtitle_custom_addition', $args_text_input );
        register_setting( 'silk-settings-twitter', 'tw_cardtitle_addition_position', $args_default );
        register_setting( 'silk-settings-twitter', 'tw_cardtitle_default', $args_text_input );
        register_setting( 'silk-settings-twitter', 'tw_cardtitle_max_lenght', $args_text_input );
        register_setting( 'silk-settings-twitter', 'tw_cardtitle_max_length_overflow', $args_default );

        // Twiiter card description.
        register_setting( 'silk-settings-twitter', 'tw_carddescription_active', $args_default );
        register_setting( 'silk-settings-twitter', 'tw_carddescription_default_value', $args_default );
        register_setting( 'silk-settings-twitter', 'tw_carddescription_default_value_custom', $args_text_input );
        register_setting( 'silk-settings-twitter', 'tw_carddescription_max_length', $args_default );
        register_setting( 'silk-settings-twitter', 'tw_carddescription_max_length_overflow', $args_default );

        // Twiiter card image.
        register_setting( 'silk-settings-twitter', 'tw_cardimage_active', $args_default );
        register_setting( 'silk-settings-twitter', 'tw_cardimage_default_value', $args_default );
        register_setting( 'silk-settings-twitter', 'tw_cardimage_custom_default_value', $args_default );

        // SCHEMA
        // Schema type.
        register_setting( 'silk-settings-schema', 's_type_active', $args_default );
        register_setting( 'silk-settings-schema', 's_type_default_value', $args_default );

        // Schema title.
        register_setting( 'silk-settings-schema', 's_title_active', $args_default );
        register_setting( 'silk-settings-schema', 's_title_addition', $args_default );
        register_setting( 'silk-settings-schema', 's_title_custom_addition', $args_text_input );
        register_setting( 'silk-settings-schema', 's_title_addition_position', $args_default );
        register_setting( 'silk-settings-schema', 's_title_default', $args_default );
        register_setting( 'silk-settings-schema', 's_title_max_lenght', $args_text_input );
        register_setting( 'silk-settings-schema', 's_title_max_length_overflow', $args_default );

        // Schema description.
        register_setting( 'silk-settings-schema', 's_description_active', $args_default );
        register_setting( 'silk-settings-schema', 's_description_default_value', $args_default );
        register_setting( 'silk-settings-schema', 's_description_default_value_custom', $args_text_input );
        register_setting( 'silk-settings-schema', 's_description_max_length', $args_default );
        register_setting( 'silk-settings-schema', 's_description_max_length_overflow', $args_default );

        // Schema image.
        register_setting( 'silk-settings-schema', 's_image_active', $args_default );
        register_setting( 'silk-settings-schema', 's_image_default_value', $args_default );

        // TAGS
        // Google analytics.
        register_setting( 'silk-settings-tags', 'tag_analytics_active', $args_default );
        register_setting( 'silk-settings-tags', 'tag_analytics_value', $args_text_input );

        // Google search console.
        register_setting( 'silk-settings-tags', 'tag_console_active', $args_default );
        register_setting( 'silk-settings-tags', 'tag_console_value', $args_text_input );

        // Google tag manager.
        register_setting( 'silk-settings-tags', 'tag_manager_active', $args_default );
        register_setting( 'silk-settings-tags', 'tag_manager_value', $args_text_input );

    }


    /**
     * sanitize_input_callback.
     *
     * Sanatize user input.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function sanitize_input_callback( $value  ) {

        return sanitize_text_field( $value );

    }


    /**
     * settings_page_content.
     *
     * Load template for the settings page.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function settings_page_content( ) {

        require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'settings/partials/silk-settings-display.php' );
    
    }


    /**
     * seobox_settings_links.
     *
     * Add settings link to plugin page.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function silk_settings_links( $links ) {

        $mylinks = array(
            '<a href="' . admin_url( 'options-general.php?page=' . $this->pluginname ) . '">Settings</a>',
            '<a href="https://vanaf1979-1.gitbook.io/silk/" target="_blank">Documentation</a>',
        );

        return array_merge( $links, $mylinks );

    }


    /**
     * change_plugin_meta.
     *
     * Add site and twitter link to plugins page.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function change_plugin_meta( $plugin_meta , $plugin_file ) {

        if ( strpos( $plugin_file, 'silk.php' ) !== false ) {

            $plugin_meta[1] = str_replace( 'href="https://vanaf1979.nl"', 'href="https://vanaf1979.nl" target="_blank"' , $plugin_meta[1] );
            unset( $plugin_meta[2] );
            $plugin_meta[] = '<a href="https://twitter.com/wpseobox" target="_blank">Twitter</a>';

        }

        return $plugin_meta;

    }
}
