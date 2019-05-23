<?php
/**
 * The plugin bootstrap file
 *
 * @link              https://vanaf1979.nl
 * @since             0.1.0
 * @package           Silk
 *
 * @wordpress-plugin
 * Plugin Name:       Silk
 * Plugin URI:        https://silk.vanaf1979.nl
 * Description:       A Simpler Wordpress Seo plugin.
 * Version:           0.6.0
 * Author:            Vanaf1979
 * Author URI:        https://vanaf1979.nl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sikj
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) )
{
	die;
}


/* Bootstrap SeoBox */
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'silk/silk/includes/bootstrap.php';


define( 'SILK_VERSION', '0.7.0' );


use Silk\Includes\Activator as Activator;

function activate_silk() {

	Activator::activate();

}

register_activation_hook( __FILE__, 'activate_silk' );


// use Silk\Includes\Deactivator as Deactivator;

// function deactivate_silk() {

// 	Deactivator::deactivate();

// }

// register_deactivation_hook( __FILE__, 'deactivate_silk' );


use Silk\Includes\Uninstaller as Uninstaller;

function uninstall_silk() {

	Uninstaller::uninstall();

}

register_uninstall_hook( __FILE__, 'uninstall_silk' );
