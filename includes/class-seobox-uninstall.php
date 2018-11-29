<?php

class Seobox_Uninstall
{

	public static function uninstall()
	{
        $this->remove_metas();

        $this->remove_settings();
    }
    

    private static function remove_metas()
    {
        // delete_post_meta_by_key( 'related_posts' );
    }


    private static function remove_settings()
    {
        
    }

}
