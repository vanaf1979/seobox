<?php
/**
 * Get Google meta field values.
 *
 * @link       https://seobox.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    Silk
 * @subpackage SeoBox/Frontend
 */

namespace Silk\Frontend;


class ValuesGoogle {

    private $post_id;


    /**
     * Constructor.
     *
     * * @param  int $post_id
     */
    public function __construct( $post_id ) {

        $this->post_id = $post_id;

    }


    /**
     * get_keywords_value.
     *
     * get keyword meta value.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_keywords_value() {

        return 'Keywords value placeholder';

    }


    /**
     * get_description_value.
     *
     * get description meta value.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_description_value() {

        return 'Description value placeholder';

    }


    /**
     * get_robots_value.
     *
     * get robots meta value.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_robots_value() {

        return 'Robots value placeholder';

    }


    /**
     * get_conanical_value.
     *
     * get conanical meta value.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_conanical_value() {

        return 'Conanical value placeholder';

    }

}