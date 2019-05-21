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

        $this->set_version_in_database();

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
