<?php
/**
 * Get Google meta tag values.
 *
 * @link       https://seobox.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    SeoBox
 * @subpackage SeoBox/Includes
 */

namespace SeoBox\Frontend;


class ValuesGoogle {

    private $post_id;


    public function __construct( $post_id ) {

        $this->post_id = $post_id;

    }


    public function get_keywords_value() {

        return 'Keywords value placeholder';

    }


    public function get_description_value() {

        return 'Description value placeholder';

    }


    public function get_robots_value() {

        return 'Robots value placeholder';

    }


    public function get_conanical_value() {

        return 'Conanical value placeholder';

    }

}