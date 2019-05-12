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
use SeoBox\Admin\Admin as Admin;
use SeoBox\Settings\Settings as Settings;
use SeoBox\Shortcodes\Shortcodes as Shortcodes;
use SeoBox\Frontend\Frontend as Frontend;
use SeoBox\Sidebar\Sidebar as Sidebar;


class SeoBox extends Plugin {

    protected $loader;

    protected $plugin_name;

    protected $version;


    public function __construct() {

        parent::__construct();

        $this->loader = new Loader();

        $this->set_locale();
        $this->define_admin_hooks();
        $this->define_settings_hooks();
        $this->define_public_hooks();
        $this->define_shortcodes_hooks();
        $this->define_sidebar_hooks();

        $this->loader->run();

    }


    private function set_locale() {

        $I18n = new I18n();

        $this->loader->add_action( 'plugins_loaded', $I18n, 'load_plugin_textdomain' );

    }


    private function define_admin_hooks() {	

        if( is_admin() ) {

            $admin = new Admin();

            $this->loader->add_action( 'admin_enqueue_scripts', $admin, 'enqueue_styles' );
            $this->loader->add_action( 'admin_enqueue_scripts', $admin, 'enqueue_scripts' );

            $this->loader->add_action( 'add_meta_boxes', $admin, 'add_seo_metabox' );
            $this->loader->add_action( 'save_post', $admin, 'save_seobox' );

        }

    }


    private function define_sidebar_hooks() {

        $sidebar = new Sidebar();

        if( is_admin() ) {

            // Sidebar assets.
            $this->loader->add_action( 'enqueue_block_editor_assets' , $sidebar , 'enqueue_sidebar_assats' );

        }

        // Register Sidebar meta fields.
        $this->loader->add_action( 'init' , $sidebar , 'register_meta_fields' );

        // Ajax settings handler.
        $this->loader->add_action( 'wp_ajax_seobox_settings' , $sidebar , 'ajax_ge_settings' );

    }


    private function define_settings_hooks() {

        if( is_admin() ) {

            $settings = new Settings();

            $this->loader->add_action( 'admin_enqueue_scripts', $settings, 'enqueue_styles' );
            $this->loader->add_action( 'admin_enqueue_scripts', $settings, 'enqueue_scripts' );

            $this->loader->add_action( 'admin_menu', $settings, 'register_settings_page' );
            $this->loader->add_action( 'admin_init', $settings, 'register_settings' );

            $this->loader->add_filter( 'plugin_action_links', $settings, 'seobox_settings_links', $priority = 10 );
            $this->loader->add_filter( 'plugin_row_meta', $settings, 'change_plugin_meta', 10, 2 );

        }

    }


    private function define_public_hooks() {

        if( ! is_admin() ) {

            $frontend = new Frontend();

            $this->loader->add_action( 'wp_enqueue_scripts', $frontend, 'enqueue_styles' );
            $this->loader->add_action( 'wp_enqueue_scripts', $frontend, 'enqueue_scripts' );

            $this->loader->add_action( 'after_setup_theme' , $frontend , 'add_seabox_add_theme_support');
            $this->loader->add_action( 'pre_get_document_title' , $frontend , 'add_seabox_title_to_head', 15 );
            $this->loader->add_action( 'wp_head' , $frontend , 'add_seobox_tags_to_head' , 1 , 1 );

        }

    }


    private function define_shortcodes_hooks() {

        $shortcodes = new Shortcodes();

        $this->loader->add_action( 'wp_enqueue_scripts', $shortcodes, 'enqueue_styles' );

        $this->loader->add_action( 'init' , $shortcodes , 'register_shortcodes' );

    }

}
