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


class ValuesSchema {

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
     * get_open_graph_type.
     *
     * description.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_schema_type() {

        return trim( get_post_meta( $this->post_id , 'silk_s_type' , true ) );

    }


    /**
     * get_open_graph_title.
     *
     * description.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_schema_title() {

        return trim( get_post_meta( $this->post_id , 'silk_s_title' , true ) );

    }


    /**
     * get_open_graph_description.
     *
     * description.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_schema_description() {

        return trim( get_post_meta( $this->post_id , 'silk_s_description' , true ) );

    }

    /**
     * get_open_graph_image.
     *
     * description.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_schema_image() {

        return trim( get_post_meta( $this->post_id , 'silk_s_image' , true ) );

    }
    

}