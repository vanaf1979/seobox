<?php
/**
 * Store and provide plugin inforation.
 *
 * @link       https://seobox.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    SeoBox
 * @subpackage SeoBox/Includes
 */

namespace SeoBox\Includes;


class Plugin {

    protected $pluginname;

    protected $version;

    protected $textdomain;

    protected $plugin_path;


    public function __construct() {

        $this->pluginname = 'Seobox';

        $this->version = '0.7.0';

        $this->textdomain = 'seobox';

        $this->plugin_path = plugin_dir_path( dirname( __FILE__ ) );

    }

}