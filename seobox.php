<?php
/**
 * The plugin bootstrap file
 *
 * @link              https://vanaf1979.nl
 * @since             0.1.0
 * @package           Seobox
 *
 * @wordpress-plugin
 * Plugin Name:       SeoBox
 * Plugin URI:        http://vanaf1979.nl/seobox
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.1.0
 * Author:            Vanaf1979
 * Author URI:        https://vanaf1979.nl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       seobox
 * Domain Path:       /languages
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) )
{
	die;
}


/**
 * Currently plugin version.
 */
define( 'PLUGIN_NAME_VERSION', '0.3.0' );


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-seobox-activator.php
 */
function activate_seobox()
{
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-seobox-activator.php';
	Seobox_Activator::activate();
}


/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-seobox-deactivator.php
 */
function deactivate_seobox()
{
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-seobox-deactivator.php';
	Seobox_Deactivator::deactivate();
}


register_activation_hook( __FILE__, 'activate_seobox' );
register_deactivation_hook( __FILE__, 'deactivate_seobox' );


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-seobox.php';


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0
 */
function run_seobox()
{
	$plugin = new Seobox();
	$plugin->run();
}
run_seobox();
