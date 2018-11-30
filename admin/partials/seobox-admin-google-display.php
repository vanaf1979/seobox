

<div class="form-wrapper">

    <label><?php _e( 'Browser title', 'seobox' ); ?></label>

    <input type="text" name="_seobox_g_browser_title" value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_seobox_g_browser_title', true ) ); ?>" placeholder="<?php esc_attr_e( 'Browser title', 'seobox' ); ?>"/>

</div>


<div class="form-wrapper">

    <label><?php _e( 'Keywords', 'seobox' ); ?></label>

    <input type="text" name="_seobox_g_keywords" value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_seobox_g_keywords', true ) ); ?>" placeholder="<?php esc_attr_e( 'Keywords', 'seobox' ); ?>"/>

</div>


<div class="form-wrapper">

    <label><?php _e( 'Description', 'seobox' ); ?></label>

    <textarea name="_seobox_g_description" placeholder="<?php esc_attr_e( 'Description', 'seobox' ); ?>"><?php echo esc_attr( get_post_meta( get_the_ID(), '_seobox_g_description', true ) ); ?></textarea>

</div>