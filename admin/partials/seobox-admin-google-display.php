

<div class="form-wrapper">

    <label class="main"><?php _e( 'Browser title', 'seobox' ); ?></label>

    <input type="text" name="_seobox_g_browser_title" value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_seobox_g_browser_title', true ) ); ?>" placeholder="<?php esc_attr_e( 'Browser title', 'seobox' ); ?>"/>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Keywords', 'seobox' ); ?></label>

    <input type="text" name="_seobox_g_keywords" value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_seobox_g_keywords', true ) ); ?>" placeholder="<?php esc_attr_e( 'Keywords', 'seobox' ); ?>"/>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Description', 'seobox' ); ?></label>

    <textarea name="_seobox_g_description" placeholder="<?php esc_attr_e( 'Description', 'seobox' ); ?>"><?php echo esc_attr( get_post_meta( get_the_ID(), '_seobox_g_description', true ) ); ?></textarea>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Index / Follow', 'seobox' ); ?></label>

    <ul>
        <?php
        $current_value = get_post_meta( get_the_ID(), '_seobox_g_index_follow', true ); 
        if( ! $current_value )
        {
            // Needs to be default settings value.
            $current_value = 'index / follow';
        }
        ?>
        <li>
            <label><input type="radio" name="_seobox_g_index_follow" value="index / follow" <?php checked( $current_value, 'index / follow' ); ?>/> index / follow</label>
        </li>
        <li>
            <label><input type="radio" name="_seobox_g_index_follow" value="index / nofollow" <?php checked( $current_value, 'index / nofollow' ); ?>/> index / nofollow</label>
        </li>
        <li>
            <label><input type="radio" name="_seobox_g_index_follow" value="noindex / nofollow" <?php checked( $current_value, 'noindex / nofollow' ); ?>/> noindex / nofollow</label>
        </li>
        <li>
            <label><input type="radio" name="_seobox_g_index_follow" value="noindex / follow" <?php checked( $current_value, 'noindex / follow' ); ?>/> noindex / follow</label>
        </li>
    </ul>

</div>