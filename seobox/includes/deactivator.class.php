<?php
/**
 * This class handles deactivation of this plugin.
 *
 * @link       https://seobox.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    SeoBox
 * @subpackage SeoBox/Includes
 */

namespace SeoBox\Includes;


use SeoBox\Includes\Plugin as Plugin;


class Deactivator extends Plugin {


    public static function deactivate() {

        $this->remove_version_from_database();
        $this->register_deactivation();

    }


    private function remove_version_from_database() {

        if ( defined( 'SEOBOX_VERSION' ) ) {

            // remove the version number from the database.
        
        }

    }


    private function register_deactivation() {

        // register deactivation to remote database.

    }
    
}
