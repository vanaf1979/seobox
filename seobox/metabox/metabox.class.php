<?php
/**
 * Back compat metabox functionality.
 *
 * @link       https://seobox.vanaf1979.nl
 * @since      1.0.0
 *
 * @package    SeoBox
 * @subpackage SeoBox/Metabox
 */

namespace SeoBox\Metabox;


use SeoBox\Includes\Plugin as Plugin;


class Metabox extends Plugin {

    /**
     * Constructor.
     */
    public function __construct() { 

        parent::__construct();

    }


    /**
     * enqueue_styles.
     *
     * Enqueue styles for the frontend.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function enqueue_styles() {

        wp_enqueue_style(
            $this->pluginname . '-metabox',
            plugin_dir_url( __FILE__ ) . 'dist/css/seobox-admin.css',
            array(),
            $this->version,
            'all'
        );

    }


    /**
     * enqueue_scripts.
     *
     * Enqueue scripts for the frontend.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function enqueue_scripts() {

        wp_enqueue_script(
            $this->pluginname . '-metabox',
            plugin_dir_url( __FILE__ ) . 'dist/js/seobox-admin.js',
            array(),
            $this->version,
            false
        );

        if ( ! did_action( 'wp_enqueue_media' ) ) {

            wp_enqueue_media();

        }

    }


    /**
     * add_seo_metabox.
     *
     * Add a meta box to the post screens.
     *
     * @since 1.0.0
     * @access public
     * @return void
     */
    public function add_seo_metabox() {

        $args = array(
            'public' => true,
            'exclude_from_search' => false,
            '_builtin' => false
        ); 

        $output = 'names';
        $operator = 'and';
        $screens = get_post_types( $args , $output , $operator );

        // Add post and page post types
        $screens[] = 'post';
        $screens[] = 'page';

        // Add meta box to all post types edit pages
        foreach ( $screens as $screen ) {

            add_meta_box(
                'seobox-meta',
                'SeoBox',
                [self::class, 'meta_box_content'],
                $screen,
                'advanced',
                'default',
                array(
                    '__back_compat_meta_box' => true,
                )
            );

        }

    }


    /**
     * meta_box_content.
     *
     * Render the content of the metabox.
     *
     * @since 1.0.0
     * @access public
     * @param  object $post
     * @return void
     */
    public static function meta_box_content( $post ) {

        require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/seobox-admin-display.php' );

    }


    /**
     * save_seobox.
     *
     * Collect meta values before saving.
     *
     * @since 1.0.0
     * @access public
     * @param  int $post_id
     * @return void
     */
    public static function save_seobox( $post_id ) {

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        
            return;

        }

        // Check the security nonce.
        if ( ! isset( $_POST['seobox_admin_nonce'] ) || ! wp_verify_nonce( $_POST['seobox_admin_nonce'], 'seobox_admin_save_metas' ) ) {
            
            return $post_id;

        }

        if ( $parent_id = wp_is_post_revision( $post_id ) ) {

            $post_id = $parent_id;

        }

        $this->save_seobox_meta( $post_id , '_seobox_g_browser_title' );
        $this->save_seobox_meta( $post_id , '_seobox_g_keywords' );
        $this->save_seobox_meta( $post_id , '_seobox_g_description' );
        $this->save_seobox_meta( $post_id , '_seobox_g_canonical' );
        $this->save_seobox_meta( $post_id , '_seobox_g_index_follow' );

        $this->save_seobox_meta( $post_id , '_seobox_fb_open_graph_type' );
        $this->save_seobox_meta( $post_id , '_seobox_fb_open_graph_title' );
        $this->save_seobox_meta( $post_id , '_seobox_fb_open_graph_description' );

        $this->save_seobox_meta( $post_id , '_seobox_tw_card_type' );
        $this->save_seobox_meta( $post_id , '_seobox_tw_title' );
        $this->save_seobox_meta( $post_id , '_seobox_tw_description' );
        $this->save_seobox_meta( $post_id , '_seobox_tw_author_handle' );

        $this->save_seobox_meta( $post_id , '_seobox_s_type' );
        $this->save_seobox_meta( $post_id , '_seobox_s_title' );
        $this->save_seobox_meta( $post_id , '_seobox_s_description' );
    }


    /**
     * save_seobox_meta.
     *
     * Save metabox values to the database.
     *
     * @since 1.0.0
     * @access public
     * @param  int $post_id
     * @param  string $key
     * @return void
     */
    public function save_seobox_meta( $post_id , $key ) {
        
        if( array_key_exists( $key , $_POST )  ) {	
            
            $new_value = $_POST[ $key ];
            $new_value = apply_filters( 'seobox_before_save_meta', $new_value , $key );
            update_post_meta( $post_id , $key , sanitize_text_field( $new_value ) );

        }

    }

}
