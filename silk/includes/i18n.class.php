<?php
/**
 * This class handles internationalization of this plugin.
 *
 * @link       https://silk.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    Silk
 * @subpackage Silk/Includes
 */

namespace Silk\Includes;


use Silk\Includes\Plugin as Plugin;


class I18n extends Plugin {

   
    public function load_plugin_textdomain() {

        load_plugin_textdomain(
            'silk',
            false,
            dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
        );

    }

}
