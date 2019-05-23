<?php
/**
 * Store and provide plugin inforation.
 *
 * @link       https://silk.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    Silk
 * @subpackage Silk/Includes
 */

namespace Silk\Includes;


class Plugin {

    protected $pluginname;

    protected $version;

    protected $textdomain;

    protected $plugin_path;


    /**
     * __construct.
     */
    public function __construct() {

        $this->pluginname = 'Silk';

        $this->version = '0.7.0';

        $this->textdomain = 'silk';

        $this->plugin_path = plugin_dir_path( dirname( __FILE__ ) );

    }

}