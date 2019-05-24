<?php
/**
 * This class creates meta tag html output.
 *
 * @link       https://silk.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    Silk
 * @subpackage Silk/Includes
 */

namespace Silk\Frontend\Helpers;


class Tagbuilder {


    public function __construct() { }


    public static function write_meta_tag( $name , $value ) {

        $return = "\t<meta name=\"{$name}\" content=\"{$value}\" />";

        // Run registerd filters on the meta tag.
        $return = apply_filters( 'silk_make_meta_tag', $return , $metaarray['name'] , $metaarray['content'] );

        return $return . "\n";
        
    }


    // TODO: Remove, depercated.
    public function get_tags_html()
    {
        global $post;
        $values = new Metavalues( $post->ID );

        $html = '';
        // $value = $values->get_seobox_g_keywords();
        // $html .= $this->get_meta_tag( 'keywords' , '_seobox_g_keywords' , $value );
        $html .= $this->get_meta_tag( 'keywords' , '_silk_g_keywords' );
        $html .= $this->get_meta_tag( 'description' , '_silk_g_description' );
        // canonical needs other tags
        $html .= $this->get_meta_tag( 'canonical' , '_silk_g_canonical' );
        $html .= $this->get_meta_tag( 'robots' , '_silk_g_index_follow' );

        $html .= $this->get_meta_tag( 'og:type' , '_silk_fb_open_graph_type' );
        $html .= $this->get_meta_tag( 'og:title' , '_silk_fb_open_graph_title' );
        $html .= $this->get_meta_tag( 'og:description' , '_silk_fb_open_graph_description' );
        // og:url
        // og:site_nam
        // Image tag

        $html .= $this->get_meta_tag( 'twitter:card' , '_silk_tw_type' );
        $html .= $this->get_meta_tag( 'twitter:title' , '_silk_tw_title' );
        $html .= $this->get_meta_tag( 'twitter:description' , '_silk_tw_description' );
        $html .= $this->get_meta_tag( 'twitter:creator' , '_silk_tw_author_handle' );
        // twitter:domain
        // Image tag

        $html .= $this->get_meta_tag( 'schema:type' , '_silk_s_type' );
        $html .= $this->get_meta_tag( 'schema:title' , '_silk_s_title' );
        $html .= $this->get_meta_tag( 'schema:description' , '_silk_s_description' );

        return $html;
    }


    // TODO: Remove, depercated.
    private function get_meta_tag( $name , $silkname ) {   
        
        if( ! isset( $this->wpmetas[ $silkname ] ) ) {

            return;

        }

        // Populate the meta array.
        $metaarray['name'] = $name;
        $metaarray['silkname'] = $silkname;
        $metaarray['content'] = $this->wpmetas[ $silkname ][0];

        // Run registerd filters on the meta array.
        $metaarray = apply_filters( 'silk_make_meta_array', $metaarray );

        // Make html tsh of the meta array.
        return $this->make_meta_tag( $metaarray );

    }


    // TODO: Remove, depercated.
    private static function make_meta_tag( $metaarray ) {

        $return = "<meta name=\"{$metaarray['name']}\" content=\"{$metaarray['content']}\" />";

        // Run registerd filters on the meta tag.
        $return = apply_filters( 'silk_make_meta_tag', $return , $metaarray['name'] , $metaarray['content'] );

        return $return . "\n";
        
    }

}
