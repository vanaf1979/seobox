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
 * Description:       Wordpress Seo plugin
 * Version:           0.4.0
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


define( 'PLUGIN_NAME_VERSION', '0.4.0' );


function activate_seobox()
{
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-seobox-activator.php';
	Seobox_Activator::activate();
}


function deactivate_seobox()
{
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-seobox-deactivator.php';
	Seobox_Deactivator::deactivate();
}


register_activation_hook( __FILE__, 'activate_seobox' );
register_deactivation_hook( __FILE__, 'deactivate_seobox' );


require plugin_dir_path( __FILE__ ) . 'includes/class-seobox.php';


function run_seobox()
{
	$plugin = new Seobox();
	$plugin->run();
}
run_seobox();
