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

        $this->remove_version_from_database();

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
