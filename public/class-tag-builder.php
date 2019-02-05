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
        // Image tag
        
        $html .= $this->get_meta_tag( 'twitter:type' , '_seobox_tw_type' );
        $html .= $this->get_meta_tag( 'twitter:title' , '_seobox_tw_title' );
        $html .= $this->get_meta_tag( 'twitter:description' , '_seobox_tw_description' );
        $html .= $this->get_meta_tag( 'twitter:creator' , '_seobox_tw_author_handle' );
        // Image tag

        $html .= $this->get_meta_tag( 'schema:type' , '_seobox_s_type' );
        $html .= $this->get_meta_tag( 'schema:title' , '_seobox_s_title' );
        $html .= $this->get_meta_tag( 'schema:description' , '_seobox_s_description' );
        
        return $html;
    }
    

    private function get_meta_tag( $name , $seoboxname )
	{   
        $metaarray['name'] = $name;
        $metaarray['seoboxname'] = $seoboxname;
        $metaarray['content'] = $this->wpmetas[ $seoboxname ][0];
        $metaarray = apply_filters( 'seobox_make_meta_array', $metaarray );
        return $this->make_meta_tag( $metaarray );
	}


    private static function make_meta_tag( $metaarray )
	{
        $return = "<meta name=\"{$metaarray['name']}\" content=\"{$metaarray['content']}\" />";
        $return = apply_filters( 'seobox_make_meta_tag', $return , $metaarray['name'] , $metaarray['content'] );
		return $return . "\n";
	}

}
