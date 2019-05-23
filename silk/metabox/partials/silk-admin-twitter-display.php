
<div class="form-wrapper">

    <label class="main"><?php _e( 'Twitter card type', 'silk' ); ?></label>

    <?php
    $current_value = get_post_meta( get_the_ID(), 'silk_tw_card_type', true ); 
    if( ! $current_value )
    {
        // Needs to be default settings value.
        $current_value = 'summary';
    }
    ?>

    <select name="silk_tw_card_type">
        <option value="summary" <?php selected( $current_value, 'summary' ); ?>>Summary</option>
        <option value="summary_large_image" <?php selected( $current_value, 'summary_large_image' ); ?>>Summary large image</option>
        <option value="app" <?php selected( $current_value, 'app' ); ?>>App</option>
        <option value="player" <?php selected( $current_value, 'player' ); ?>>Player</option>
    </select>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Twitter author handle', 'silk' ); ?></label>

    <input type="text" name="silk_tw_author_handle" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'silk_tw_author_handle', true ) ); ?>" placeholder="<?php esc_attr_e( 'Twitter author handle', 'silk' ); ?>"/>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Twitter title', 'silk' ); ?></label>

    <input type="text" name="silk_tw_title" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'silk_tw_title', true ) ); ?>" placeholder="<?php esc_attr_e( 'Twitter title', 'silk' ); ?>"/>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Twitter description', 'silk' ); ?></label>

    <textarea name="silk_tw_description" placeholder="<?php esc_attr_e( 'Twitter description', 'silk' ); ?>"><?php echo esc_attr( get_post_meta( get_the_ID(), 'silk_tw_description', true ) ); ?></textarea>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Twitter image', 'silk' ); ?></label>

    <input type="hidden" value="" id="silk_tw_image" name="silk_tw_image">
    <button class="image-upload-button button button-large" data-field="silk_tw_image" data-preview="image-preview-twitter"><?php esc_attr_e( 'Select image', 'silk' ); ?></button>

    <div class="image-preview-twitter">
        <img src="" alt="" />
    </div>
</div>

