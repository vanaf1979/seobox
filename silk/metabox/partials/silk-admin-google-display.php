

<div class="form-wrapper">

    <label class="main"><?php _e( 'Browser title', 'silk' ); ?></label>

    <input type="text" id="tags" name="silk_g_browser_title" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'silk_g_browser_title', true ) ); ?>" placeholder="<?php esc_attr_e( 'Browser title', 'silk' ); ?>"/>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Keywords', 'silk' ); ?></label>

    <input type="text" name="silk_g_keywords" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'silk_g_keywords', true ) ); ?>" placeholder="<?php esc_attr_e( 'Keywords', 'silk' ); ?>"/>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Description', 'silk' ); ?></label>

    <textarea name="silk_g_description" placeholder="<?php esc_attr_e( 'Description', 'silk' ); ?>"><?php echo esc_attr( get_post_meta( get_the_ID(), 'silk_g_description', true ) ); ?></textarea>

</div>

<div class="form-wrapper">

    <label class="main"><?php _e( 'Canonical', 'silk' ); ?></label>

    <input type="text" name="silk_g_canonical" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'silk_g_canonical', true ) ); ?>" placeholder="<?php esc_attr_e( 'Canonical', 'silk' ); ?>" class="i18n-multilingual-curly"/>

</div>

<div class="form-wrapper">

    <label class="main"><?php _e( 'Index / Follow', 'silk' ); ?></label>

    <ul>
        <?php
        $current_value = get_post_meta( get_the_ID(), 'silk_g_index_follow', true ); 
        if( ! $current_value )
        {
            // Needs to be default settings value.
            $current_value = 'index / follow';
        }
        ?>
        <li>
            <label><input type="radio" name="silk_g_index_follow" value="index / follow" <?php checked( $current_value, 'index / follow' ); ?>/> index / follow</label>
        </li>
        <li>
            <label><input type="radio" name="silk_g_index_follow" value="index / nofollow" <?php checked( $current_value, 'index / nofollow' ); ?>/> index / nofollow</label>
        </li>
        <li>
            <label><input type="radio" name="silk_g_index_follow" value="noindex / nofollow" <?php checked( $current_value, 'noindex / nofollow' ); ?>/> noindex / nofollow</label>
        </li>
        <li>
            <label><input type="radio" name="silk_g_index_follow" value="noindex / follow" <?php checked( $current_value, 'noindex / follow' ); ?>/> noindex / follow</label>
        </li>
    </ul>

</div>