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
        $content = $this->wpmetas[ $seoboxname ][0];
        return $this->make_meta_tag( $name , $content );
	}


    private static function make_meta_tag( $name , $content )
	{
		$return = "<meta name=\"{$name}\" content=\"{$content}\" />" . "\n";
		return $return;
	}

}
