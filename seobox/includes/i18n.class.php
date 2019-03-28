<?php
/**
 * This class handles internationalization of this plugin.
 *
 * @link       https://seobox.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    SeoBox
 * @subpackage SeoBox/Includes
 */

namespace SeoBox\Includes;


use SeoBox\Includes\Plugin as Plugin;


class I18n extends Plugin {

   
    public function load_plugin_textdomain() {

        load_plugin_textdomain(
            'seobox',
            false,
            dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
        );

    }

}
