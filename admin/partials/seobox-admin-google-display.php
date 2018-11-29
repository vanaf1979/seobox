

<h4><?php _e( 'Google', 'seobox' ); ?></h4>

<div class="form-wrapper">

    <label><?php _e( 'Browser title', 'seobox' ); ?></label>

    <input type="text" name="_seobox_g_browser_title" value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_seobox_g_browser_title', true ) ); ?>" placeholder="<?php esc_attr_e( 'Browser title', 'seobox' ); ?>"/>

</div>