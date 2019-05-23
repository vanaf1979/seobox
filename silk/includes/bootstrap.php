
<?php
/* Configure autoloading */
require_once plugin_dir_path( dirname( __FILE__ ) ) . '/includes/autoloader.class.php';

use Silk\includes\Autoloader as Autoloader;

$autoloader = new Autoloader( 'Silk' , plugin_dir_path( dirname( __FILE__ ) ) . '' , '.class.php' );


/* Run functions class */
use \Silk\Silk as Silk;

function run_silk() {

	$functions = new Silk();

}

run_silk();