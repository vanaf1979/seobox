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


class Activator extends Plugin {


    public static function activate() {

        //$this->set_version_in_database();
        //$this->setup_default_options();
        //$this->register_activation();

    }


    private function set_version_in_database() {

        if ( defined( 'PLUGIN_NAME_VERSION' ) ) {

            // put the version number in de database as an array. $this->version
        
        }

    }


    private function setup_default_options() {

        // settup options, and default values.

    }


    private function register_activation() {

        // register activation to remote database.

    }
    
}
