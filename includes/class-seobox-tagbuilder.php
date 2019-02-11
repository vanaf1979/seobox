<?php

class Seobox_TagBulder
{

	private $postid;

	private $wpmetas;


	public function __construct( $postid )
	{
        $this->postid = $postid;
        
        $this->wpmetas = get_post_meta( $this->postid );
    }


    public function get_browser_title()
	{
        if( ! isset( $this->wpmetas[ '_seobox_g_browser_title' ] ) )
        {
            return;
        }

        if( $this->wpmetas[ '_seobox_g_browser_title' ][0] > '' )
        {
            return $this->wpmetas[ '_seobox_g_browser_title' ][0];
        }
        else
        {   
            $post = get_post( $this->postid );
            return $post->post_title;
        }
    }


    public function get_tags_html()
	{
        $html = '';
        $html .= $this->get_meta_tag( 'keywords' , '_seobox_g_keywords' );
        $html .= $this->get_meta_tag( 'description' , '_seobox_g_description' );
        // canonical needs other tags
        $html .= $this->get_meta_tag( 'canonical' , '_seobox_g_canonical' );
        $html .= $this->get_meta_tag( 'robots' , '_seobox_g_index_follow' );

        $html .= $this->get_meta_tag( 'og:type' , '_seobox_fb_open_graph_type' );
        $html .= $this->get_meta_tag( 'og:title' , '_seobox_fb_open_graph_title' );
        $html .= $this->get_meta_tag( 'og:description' , '_seobox_fb_open_graph_description' );
        // og:url
        // og:site_nam
        // Image tag
        
        $html .= $this->get_meta_tag( 'twitter:card' , '_seobox_tw_type' );
        $html .= $this->get_meta_tag( 'twitter:title' , '_seobox_tw_title' );
        $html .= $this->get_meta_tag( 'twitter:description' , '_seobox_tw_description' );
        $html .= $this->get_meta_tag( 'twitter:creator' , '_seobox_tw_author_handle' );
        // twitter:domain
        // Image tag

        $html .= $this->get_meta_tag( 'schema:type' , '_seobox_s_type' );
        $html .= $this->get_meta_tag( 'schema:title' , '_seobox_s_title' );
        $html .= $this->get_meta_tag( 'schema:description' , '_seobox_s_description' );
        
        return $html;
    }
    

    private function get_meta_tag( $name , $seoboxname )
	{   
        if( ! isset( $this->wpmetas[ $seoboxname ] ) )
        {
            return;
        }

        // Populate the meta array.
        $metaarray['name'] = $name;
        $metaarray['seoboxname'] = $seoboxname;
        $metaarray['content'] = $this->wpmetas[ $seoboxname ][0];

        // Run registerd filters on the meta array.
        $metaarray = apply_filters( 'seobox_make_meta_array', $metaarray );

        // Make html tsh of the meta array.
        return $this->make_meta_tag( $metaarray );
	}


    private static function make_meta_tag( $metaarray )
	{
        $return = "<meta name=\"{$metaarray['name']}\" content=\"{$metaarray['content']}\" />";
        
        // Run registerd filters on the meta tag.
        $return = apply_filters( 'seobox_make_meta_tag', $return , $metaarray['name'] , $metaarray['content'] );
        
        return $return . "\n";
	}

}
