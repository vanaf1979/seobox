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
        delete_post_meta_by_key( '_seobox_g_browser_title' );
        delete_post_meta_by_key( '_seobox_g_keywords' );
        delete_post_meta_by_key( '_seobox_g_description' );
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
