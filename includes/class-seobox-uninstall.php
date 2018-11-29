<?php

class Seobox_Uninstall
{

	public static function uninstall()
	{
        $this->remove_metas();
        $this->remove_settings();
        $this->register_uninstall();
    }
    

    private function remove_metas()
    {
        // Remove metas from database
        // delete_post_meta_by_key( 'related_posts' );
    }


    private function remove_settings()
    {
        // Remove settings from database
    }


    private function register_uninstall()
	{
		// register uninstall to remote database.
	}
}
