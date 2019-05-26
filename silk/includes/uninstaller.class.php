<?php
/**
 * This class handles activation of this plugin.
 *
 * @link       https://silk.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    Silk
 * @subpackage Silk/Includes
 */

namespace Silk\Includes;


use Silk\Includes\Plugin as Plugin;


class Uninstaller extends Plugin {


    /**
     * uninstall.
     *
     * Remove any plugin data on deinstallation.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public static function uninstall() {
        
        self::remove_metas();
        self::remove_settings();
        self::remove_version_from_database();
        self::register_uninstall();

    }


    /**
     * remove_metas.
     *
     * Remove all meta fields from database.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    private function remove_metas() {

        // Remove metas from database
        delete_post_meta_by_key( '_silk_g_browser_title' );
        delete_post_meta_by_key( '_silk_g_keywords' );
        delete_post_meta_by_key( '_silk_g_description' );

    }


    /**
     * remove_settings.
     *
     * Remove all settings fields from database.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    private function remove_settings() {

        // Remove settings from database.

    }


    /**
     * remove_version_from_database.
     *
     * Remove plugin version from database.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    private function remove_version_from_database() {


    }
    
}