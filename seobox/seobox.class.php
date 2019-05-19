<?php
/**
 * This class definse all hooks.
 *
 * @link       https://seobox.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    SeoBox
 */

namespace SeoBox;


use SeoBox\Includes\Plugin as Plugin;
use SeoBox\Includes\Loader as Loader;
use SeoBox\Includes\I18n as I18n;
use SeoBox\Metabox\Metabox as Metabox;
use SeoBox\Settings\Settings as Settings;
use SeoBox\Shortcodes\Shortcodes as Shortcodes;
use SeoBox\Frontend\Frontend as Frontend;
use SeoBox\Sidebar\Sidebar as Sidebar;


class SeoBox extends Plugin {


    /**
     * Loader instance.
     *
     * @var object $loader
     */
    protected $loader;



    /**
     * Class constructor.
     *
     * Call internal definition functions to register hooks.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function __construct() {

        parent::__construct();

        $this->loader = new Loader();

        $this->set_locale();
        $this->define_metabox_hooks();
        $this->define_settings_hooks();
        $this->define_frontend_hooks();
        $this->define_sidebar_hooks();

        $this->loader->run();

    }


    /**
     * define_metabox_hooks.
     *
     * Hooks related to the back compat metabox.
     *
     * @since 1.0.0
     * @access private
     * @return void
     */
    private function define_metabox_hooks() {	

        if( is_admin() ) {

            $admin = new Metabox();

            $this->loader->add_action( 'admin_enqueue_scripts', $admin, 'enqueue_styles' );
            $this->loader->add_action( 'admin_enqueue_scripts', $admin, 'enqueue_scripts' );

            $this->loader->add_action( 'add_meta_boxes', $admin, 'add_seo_metabox' );
            $this->loader->add_action( 'save_post', $admin, 'save_seobox' );

        }

    }


    /**
     * define_sidebar_hooks.
     *
     * Hooks related to the gutenberg sidebar.
     *
     * @since 1.0.0
     * @access private
     * @return void
     */
    private function define_sidebar_hooks() {

        $sidebar = new Sidebar();

        // Enqueue sidebar styles and scripts,
        $this->loader->add_action( 'enqueue_block_editor_assets' , $sidebar , 'enqueue_sidebar_styles' );
        $this->loader->add_action( 'enqueue_block_editor_assets' , $sidebar , 'enqueue_sidebar_scripts' );

        // Register meta fields.
        $this->loader->add_action( 'init' , $sidebar , 'register_meta_fields' );

    }


    /**
     * define_settings_hooks.
     *
     * Hooks related to the settings pages.
     *
     * @since 1.0.0
     * @access private
     * @return void
     */
    private function define_settings_hooks() {

        if( is_admin() ) {

            $settings = new Settings();

            $this->loader->add_action( 'admin_enqueue_scripts', $settings, 'enqueue_styles' );
            $this->loader->add_action( 'admin_enqueue_scripts', $settings, 'enqueue_scripts' );

            $this->loader->add_action( 'admin_menu', $settings, 'register_settings_page' );
            $this->loader->add_action( 'admin_init', $settings, 'register_settings' );
            $this->loader->add_filter( 'plugin_action_links_seobox/seobox.php' , $settings, 'seobox_settings_links', $priority = 10 );
            $this->loader->add_filter( 'plugin_row_meta', $settings, 'change_plugin_meta', 10, 2 );

        }

    }


    /**
     * define_frontend_hooks.
     *
     * Hooks related to the frontend functionality.
     *
     * @since 1.0.0
     * @access private
     * @return void
     */
    private function define_frontend_hooks() {

        if( ! is_admin() ) {

            $frontend = new Frontend();

            $this->loader->add_action( 'wp_enqueue_scripts', $frontend, 'enqueue_styles' );
            $this->loader->add_action( 'wp_enqueue_scripts', $frontend, 'enqueue_scripts' );

            $this->loader->add_action( 'after_setup_theme' , $frontend , 'add_theme_support');
            $this->loader->add_action( 'pre_get_document_title' , $frontend , 'add_seabox_title_to_head', 15 );
            $this->loader->add_action( 'wp_head' , $frontend , 'add_seobox_tags_to_head' , 1 , 1 );

        }

    }


    /**
     * set_locale.
     *
     * Register a action to setup the plugins textdomain.
     *
     * @since 1.0.0
     * @access private
     * @return void
     */
    private function set_locale() {

        $I18n = new I18n();

        $this->loader->add_action( 'plugins_loaded', $I18n, 'load_plugin_textdomain' );

    }

}
