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

namespace Silk\Frontend\Helpers;


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
     * get_description_value.
     *
     * get description meta value.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_description_value() {

        return trim( get_post_meta( $this->post_id , 'silk_g_description' , true ) );

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

        return trim( get_post_meta( $this->post_id , 'silk_g_index_follow' , true ) );

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

        return trim( get_post_meta( $this->post_id , 'silk_g_canonical' , true ) );

    }

}