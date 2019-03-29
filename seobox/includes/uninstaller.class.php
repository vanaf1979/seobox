<?php
/**
 * This class handles activation of this plugin.
 *
 * @link       https://seobox.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    SeoBox
 * @subpackage SeoBox/Includes
 */

namespace SeoBox\Includes;


use SeoBox\Includes\Plugin as Plugin;


class Uninstaller extends Plugin {


    public static function uninstall() {
        
        $this->remove_metas();
        $this->remove_settings();
        $this->remove_version_from_database();
        $this->register_uninstall();

    }


    private function remove_metas() {

        // Remove metas from database
        delete_post_meta_by_key( '_seobox_g_browser_title' );
        delete_post_meta_by_key( '_seobox_g_keywords' );
        delete_post_meta_by_key( '_seobox_g_description' );

    }


    private function remove_settings() {

        // Remove settings from database.

    }


    private function remove_version_from_database() {

        if ( defined( 'SEOBOX_VERSION' ) ) {

            // remove the version number from the database.
        
        }

    }


    private function register_uninstall() {

        // register uninstall to remote database.

    }
    
}
