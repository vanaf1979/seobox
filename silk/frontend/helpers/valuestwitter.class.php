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


class ValuesTwitter {

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
     * get_card_type.
     *
     * description.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_card_type() {

        return trim( get_post_meta( $this->post_id , 'silk_tw_card_type' , true ) );

    }


    /**
     * get_author_handle.
     *
     * description.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_author_handle() {

        return trim( get_post_meta( $this->post_id , 'silk_tw_author_handle' , true ) );

    }


    /**
     * get_title.
     *
     * description.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_title() {

        return trim( get_post_meta( $this->post_id , 'silk_tw_title' , true ) );

    }


    /**
     * get_description.
     *
     * description.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_description() {

        return trim( get_post_meta( $this->post_id , 'silk_tw_description' , true ) );

    }
    

    /**
     * get_image.
     *
     * description.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_image() {

        return trim( get_post_meta( $this->post_id , 'silk_tw_image' , true ) );

    }
    
}