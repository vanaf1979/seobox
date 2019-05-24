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


class JsonLd {


    private $post;


    public function __construct( $post_id ) { 

        $this->post = get_post( $post_id );
        
    }


    public function writeJsonLd() {

        $json = array();

        $json['@context'] = "https://schema.org";

            // Oraganisation
            $json['@graph'][0]['@type'] = "Organization";
            $json['@graph'][0]['@id'] = get_site_url()  . "#organization";
            $json['@graph'][0]['name'] = "Organization";
            $json['@graph'][0]['url'] = get_site_url();
                $json['@graph'][0]['sameAs'][] = "https://facebook.com/mypage";
                $json['@graph'][0]['sameAs'][] = "https://linkedin.com/mypage";
                $json['@graph'][0]['sameAs'][] = "https://twitter.com/mypage";

            // Website
            $json['@graph'][1]['@type'] = "WebSite";
            $json['@graph'][1]['@id'] = get_site_url()  . "#website";
            $json['@graph'][1]['url'] = get_site_url();
            $json['@graph'][1]['name'] = get_bloginfo('name');
                $json['@graph'][1]['publisher']['@id'] = get_site_url()  . "#organization";
                $json['@graph'][1]['potentialAction']['@type'] = "SearchAction";
                $json['@graph'][1]['potentialAction']['target'] = get_site_url()  . "?s={search_term_string}";
                $json['@graph'][1]['potentialAction']['query-input'] = "required name=search_term_string";

            // Webpage
            $json['@graph'][2]['@type'] = "WebPage";
            $json['@graph'][2]['@id'] = get_permalink( $this->post->ID )  . "#webpage";
            $json['@graph'][2]['url'] = get_permalink( $this->post->ID );
            $json['@graph'][2]['inLanguage'] = get_locale();
            $json['@graph'][2]['name'] = $this->post->post_title;
            $json['@graph'][2]['isPartOf']['@id'] = get_site_url()  . "#website";
            // Webpage > Image
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $this->post->ID ) , 'full' );
            if( $image || 1 == 1 ) {
                $json['@graph'][2]['image']['$type'] = "ImageObject";
                $json['@graph'][2]['image']['@id'] = $image[0] . "#primaryimage";
                $json['@graph'][2]['image']['url'] = $image[0];
                $json['@graph'][2]['image']['width'] = $image[1];
                $json['@graph'][2]['image']['height'] = $image[2];
            }
            $json['@graph'][2]['datePublished'] = mysql2date( DATE_W3C, $this->post->post_date, false );
            $json['@graph'][2]['dateModified'] = mysql2date( DATE_W3C, $this->post->post_modified, false );
            // TODO: Add Schena description instead else exerpt.
            $json['@graph'][2]['description'] = get_the_excerpt( $this->post );

            if( get_post_type( $this->post ) == 'post' || 1 == 1 ) {

                // Article
                $json['@graph'][3]['@type'] = "Article";
                $json['@graph'][3]['@id'] = get_permalink( $this->post->ID )  . "#article";
                $json['@graph'][3]['isPartOf']['@id'] = get_permalink( $this->post->ID )  . "#webpage";

                $json['@graph'][3]['author']['@id'] = get_site_url() . "/author/" . get_the_author_meta( 'display_name' , $this->post->post_author ) . "/#author";
                $json['@graph'][3]['author']['name'] = get_the_author_meta( 'display_name' , $this->post->post_author );

                $json['@graph'][3]['publisher']['@id'] = get_site_url()  . "#organization";

                $json['@graph'][3]['headline'] = $this->post->post_title;
                $json['@graph'][3]['datePublished'] = mysql2date( DATE_W3C, $this->post->post_date, false );
                $json['@graph'][3]['datePublished'] = mysql2date( DATE_W3C, $this->post->post_modified, false );
                $json['@graph'][3]['commentCount'] = get_comments_number( $this->post->ID );
                $json['@graph'][3]['mainEntityOfPage'] = get_permalink( $this->post->ID )  . "#webpage";
                if( $image ) {
                    $json['@graph'][3]['image']['@id'] =  $image[0] . "#primaryimage";
                }
                $tags = get_the_tags( $this->post->ID );
                if( $tags ) {
                    $json['@graph'][3]['keywords'] = implode( "," , $tags );
                }
                $json['@graph'][3]['articleSection'] = "";

                // Person
                $json['@graph'][4]['@type'] = "Person";
                $json['@graph'][4]['@id'] = get_site_url() . "/author/" . get_the_author_meta( 'display_name' , $this->post->post_author ) . "/#author";
                $json['@graph'][4]['name'] = get_the_author_meta( 'display_name' , $this->post->post_author );
                $json['@graph'][4]['image']['@type'] = "ImageObject";
                $json['@graph'][4]['image']['@id'] = get_site_url() . "#personlogo";
                $json['@graph'][4]['image']['url'] = get_avatar_url( $this->post->post_author );
                $json['@graph'][4]['image']['caption'] = get_the_author_meta( 'display_name' , $this->post->post_author );
                $json['@graph'][4]['sameAs'][] = "";

            };

        return json_encode( $json );

    }
    
}