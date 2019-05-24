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


class Activator extends Plugin {


    /**
     * activate.
     *
     * Run initialazations on plugin activation.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public static function activate() {

        self::set_version_in_database();

    }


    /**
     * set_version_in_database.
     *
     * Store plugin version in the database.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    private function set_version_in_database() {


    }

}
