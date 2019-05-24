<?php
/**
 * This class handles deactivation of this plugin.
 *
 * @link       https://silk.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    Silk
 * @subpackage Silk/Includes
 */

namespace Silk\Includes;


use Silk\Includes\Plugin as Plugin;


class Deactivator extends Plugin {


    /**
     * deactivate.
     *
     * Deinitialize the plugin.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public static function deactivate() {

        self::remove_version_from_database();

    }


    /**
     * remove_version_from_database.
     *
     * Remove the plugoin version from the databse.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    private function remove_version_from_database() {


    }
    
}
