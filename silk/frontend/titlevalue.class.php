<?php
/**
 * This class retrieves meta values..
 *
 * @link       https://silk.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    Silk
 * @subpackage Silk/Frontend
 */

namespace Silk\Frontend;


class Titlevalue {

    /**
     * Current post id.
     *
     * @var object $post_id
     */
    private $post_id;


    /**
     * Constructor.
     */
    public function __construct( $post_id ) {

        $this->post_id = $post_id;

    }


    /**
     * get_title_value.
     *
     * get title meta value.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function get_title_value()
    {
        // Is this field active?
        if( get_option('_g_browser_title_active') == 'yes' ) {

            // get the title addition type.
            $addition_type = get_option('_g_browser_title_addition');

            if( $addition_type == 'none' ) {

                $addition = null;

            } else if( $addition_type == 'sitename' ) {

                $addition = get_bloginfo( 'name' );

            } else if( $addition_type == 'custom' ) {

                $addition = trim( esc_attr( get_option('_g_browser_title_custom_addition') ) );

            }


            // Get addition position.
            $adition_position = get_option('_g_browser_title_addition_position');


            // Determine the title value.
            if ( trim( get_post_meta( $this->post_id , '_silk_g_browser_title' , true ) ) > '' ) {

                $title_text = trim( get_post_meta( $this->post_id , '_silk_g_browser_title' , true ) );

            } else if ( trim( esc_attr( get_option('_g_browser_title_default') ) ) ) {

                $title_text = trim( esc_attr( get_option('_g_browser_title_default') ) );
            }


            // Check addition position and return value.
            if( $addition ) {

                if( $adition_position == 'prefix' ) {

                    return $addition . ' | ' . $title_text;
    
                } else {
    
                    return $title_text . ' | ' . $addition;
    
                }

            } else {

                return $title_text;

            }
            
        } else {

            return null;

        }
    }

}