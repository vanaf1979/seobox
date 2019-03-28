<?php
/**
 * This class retrieves meta values..
 *
 * @link       https://seobox.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    SeoBox
 * @subpackage SeoBox/Includes
 */

namespace SeoBox\Includes;


class MetaValues {

    private $postid;

    private $wpmetas;


    public function __construct( $postid ) {

        $this->postid = $postid;

        $this->wpmetas = get_post_meta( $this->postid );

    }


    public function get_seobox_g_keywords()
    {
        if( get_option('_g_keywords_active') == 'yes' ) {

            if( isset( $this->wpmetas[ $seoboxname ] ) and trim( $this->wpmetas[ $seoboxname ][0] ) > '' ) {
            
                return $this->wpmetas[ $seoboxname ][0];
            
            } else  {

                return get_option('_g_keywords_default_value');
                
            }

        } else {

            return null;

        }
        
    }

}
