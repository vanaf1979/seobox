


<div class="form-wrapper">

    <label class="main"><?php _e( 'Schema type', 'seobox' ); ?></label>

    <?php
    $current_value = get_post_meta( get_the_ID(), '_seobox_s_type', true ); 
    if( ! $current_value )
    {
        // Needs to be default settings value.
        $current_value = 'website';
    }
    ?>

    <select name="_seobox_s_type">
        <option value="website" <?php selected( $current_value, 'website' ); ?>>Website</option>
        <option value="profile" <?php selected( $current_value, 'profile' ); ?>>Profile</option>
        <option value="book" <?php selected( $current_value, 'book' ); ?>>Book</option>
        <option value="article" <?php selected( $current_value, 'article' ); ?>>Article</option>
        <option value="music.song" <?php selected( $current_value, 'music.song' ); ?>>Music song</option>
        <option value="music.album" <?php selected( $current_value, 'music.album' ); ?>>Music album</option>
        <option value="music.playlist" <?php selected( $current_value, 'music.playlist' ); ?>>Music playlist</option>
        <option value="music.radio_station" <?php selected( $current_value, 'music.radio_station' ); ?>>Music radio station</option>
        <option value="video.movie" <?php selected( $current_value, 'video.movie' ); ?>>Video movie</option>
        <option value="video.episode" <?php selected( $current_value, 'video.episode' ); ?>>Video episode</option>
        <option value="video.tv_show" <?php selected( $current_value, 'video.tv_show' ); ?>>Video tv show</option>
        <option value="video.other" <?php selected( $current_value, 'video.other' ); ?>>Video other</option>
    </select>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Schema title', 'seobox' ); ?></label>

    <input type="text" name="_seobox_s_title" value="<?php echo esc_attr( get_post_meta( get_the_ID(), '_seobox_s_title', true ) ); ?>" placeholder="<?php esc_attr_e( 'Schema title', 'seobox' ); ?>"/>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Schema description', 'seobox' ); ?></label>

    <textarea name="_seobox_s_description" placeholder="<?php esc_attr_e( 'Schema description', 'seobox' ); ?>"><?php echo esc_attr( get_post_meta( get_the_ID(), '_seobox_s_description', true ) ); ?></textarea>

</div>


<div class="form-wrapper">

    <label class="main"><?php _e( 'Schema image', 'seobox' ); ?></label>

    <!-- 
    https://wordpress.stackexchange.com/questions/112592/add-media-button-in-custom-plugin
    https://mycyberuniverse.com/integration-wordpress-media-uploader-plugin-options-page.html
    Good: https://rudrastyh.com/wordpress/customizable-media-uploader.html
    -->

    <input type="hidden" value="" id="_seobox_s_image" name="_seobox_s_image">
    <button class="image-upload-button button button-large" data-field="_seobox_s_image" data-preview="image-preview-schema"><?php esc_attr_e( 'Select image', 'seobox' ); ?></button>

    <div class="image-preview-schema">
        <img src="" alt="" />
    </div>

</div>