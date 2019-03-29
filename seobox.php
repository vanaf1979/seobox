<?php
/**
 * The plugin bootstrap file
 *
 * @link              https://vanaf1979.nl
 * @since             0.1.0
 * @package           Seobox
 *
 * @wordpress-plugin
 * Plugin Name:       Seobox
 * Plugin URI:        https://seobox.vanaf1979.nl
 * Description:       A Simpler Wordpress Seo plugin.
 * Version:           0.6.0
 * Author:            Vanaf1979
 * Author URI:        https://vanaf1979.nl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       seobox
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) )
{
	die;
}


/* Bootstrap SeoBox */
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'seobox/seobox/includes/bootstrap.php';


define( 'SEOBOX_VERSION', '0.7.0' );


use SeoBox\Includes\Activator as Activator;

function activate_seobox() {

	Activator::activate();

}

register_activation_hook( __FILE__, 'activate_seobox' );


use SeoBox\Includes\Deactivator as Deactivator;

function deactivate_seobox() {

	Deactivator::deactivate();

}

register_deactivation_hook( __FILE__, 'deactivate_seobox' );


use SeoBox\Includes\Uninstaller as Uninstaller;

function uninstall_seobox() {

	Uninstaller::uninstall();

}

register_uninstall_hook( __FILE__, 'uninstall_seobox' );
