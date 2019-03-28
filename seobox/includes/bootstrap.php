
<?php
/* Configure autoloading */
require_once plugin_dir_path( dirname( __FILE__ ) ) . '/includes/autoloader.class.php';

use SeoBox\includes\Autoloader as Autoloader;

$autoloader = new Autoloader( 'SeoBox' , plugin_dir_path( dirname( __FILE__ ) ) . '' , '.class.php' );


/* Run functions class */
use \SeoBox\SeoBox as SeoBox;

function run_seobox() {

	$functions = new SeoBox();

}

run_seobox();