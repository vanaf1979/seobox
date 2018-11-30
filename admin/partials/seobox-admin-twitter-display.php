
<div class="form-wrapper">

    <label class="main"><?php _e( 'Card type', 'seobox' ); ?></label>

    <?php
    $current_value = get_post_meta( get_the_ID(), '_seobox_tw_card_type', true ); 
    if( ! $current_value )
    {
        // Needs to be default settings value.
        $current_value = 'summary';
    }
    ?>

    <select name="_seobox_tw_card_type">
        <option value="summary" <?php selected( $current_value, 'summary' ); ?>>Summary</option>
        <option value="summary_large_image" <?php selected( $current_value, 'summary_large_image' ); ?>>Summary_large_image</option>
        <option value="app" <?php selected( $current_value, 'app' ); ?>>App</option>
        <option value="player" <?php selected( $current_value, 'player' ); ?>>Player</option>
    </select>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Twitter author handle', 'seobox' ); ?></label>

    <input type="text" name="_seobox_tw_author_handle" value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_seobox_tw_author_handle', true ) ); ?>" placeholder="<?php esc_attr_e( 'Twitter author handle', 'seobox' ); ?>"/>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Twitter title', 'seobox' ); ?></label>

    <input type="text" name="_seobox_tw_title" value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_seobox_tw_title', true ) ); ?>" placeholder="<?php esc_attr_e( 'Twitter title', 'seobox' ); ?>"/>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Twitter description', 'seobox' ); ?></label>

    <textarea name="_seobox_tw_description" placeholder="<?php esc_attr_e( 'Twitter description', 'seobox' ); ?>"><?php echo esc_attr( get_post_meta( get_the_ID(), '_seobox_tw_description', true ) ); ?></textarea>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Twitter image', 'seobox' ); ?></label>

</div>

