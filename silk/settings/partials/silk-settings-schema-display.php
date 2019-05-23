

<!-- / Section: OG Type \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Schema type', 'seobox' ); ?></h4>
            </td>
            <td valign="top">
                &nbsp;
            </td>
        </tr>
    </thead>
    <tbody>
    <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Active', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('_s_type_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_s_type_active_yes" name="_s_type_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_s_type_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_s_type_active_no" name="_s_type_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_s_type_active_no"><?php _e( 'No', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Default value', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                <?php
                    $current_value = get_option('_s_type_default_value'); 
                    if( ! $current_value )
                    {
                        $current_value = 'website';
                    }
                    ?>
                    <select name="_s_type_default_value">
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
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: OG Type / -->

<!-- / Section: OG Title \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Schema title', 'seobox' ); ?></h4>
            </td>
            <td valign="top">
                &nbsp;
            </td>
        </tr>
    </thead>
    <tbody>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Active', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('_s_title_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_s_title_active_yes" name="_s_title_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_s_title_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_s_title_active_no" name="_s_title_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_s_title_active_no"><?php _e( 'No', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Addition', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('_s_title_addition'); 
                    if( ! $current_value )
                    {
                        $current_value = 'sitename';
                    }
                    ?>
                    <input type="radio" id="_s_title_addition_none" name="_s_title_addition" value="none" <?php checked( $current_value, 'none' ); ?>/>
                    <label for="_s_title_addition_none"><?php _e( 'None', 'seobox' ); ?></label>
                    <input type="radio" id="_s_title_addition_sitename" name="_s_title_addition" value="sitename" <?php checked( $current_value, 'sitename' ); ?>/>
                    <label for="_s_title_addition_sitename"><?php _e( 'Sitename', 'seobox' ); ?></label>
                    <input type="radio" id="_s_title_addition_custom" name="_s_title_addition" value="custom" <?php checked( $current_value, 'custom' ); ?>/>
                    <label for="_s_title_addition_custom"><?php _e( 'Custom', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Custom addition', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                <input type="text" name="_s_title_custom_addition" placeholder="<?php _e( 'Schema title custom addition', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_s_title_custom_addition') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Position', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('_s_title_addition_position'); 
                    if( ! $current_value )
                    {
                        $current_value = 'suffix';
                    }
                    ?>
                    <input type="radio" id="_s_title_addition_position_prefix" name="_s_title_addition_position" value="prefix" <?php checked( $current_value, 'prefix' ); ?>/>
                    <label for="_s_title_addition_position_prefix"><?php _e( 'Prefix', 'seobox' ); ?></label>
                    <input type="radio" id="_s_title_addition_position_suffix" name="_s_title_addition_position" value="suffix" <?php checked( $current_value, 'suffix' ); ?>/>
                    <label for="_s_title_addition_position_suffix"><?php _e( 'Suffix', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Default value', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="text" name="_s_title_default" placeholder="<?php _e( 'Schema title default value', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_s_title_default') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="number" min="1" max="300" name="_s_title_max_lenght" placeholder="<?php _e( 'Schema title max length', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_s_title_max_lenght') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght overflow', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('_s_title_max_length_overflow'); 
                    if( ! $current_value )
                    {
                        $current_value = 'warn';
                    }
                    ?>
                    <input type="radio" id="_s_title_max_length_overflow_trim" name="_s_title_max_length_overflow" value="trim" <?php checked( $current_value, 'trim' ); ?>/>
                    <label for="_s_title_max_length_overflow_trim"><?php _e( 'Trim', 'seobox' ); ?></label>
                    <input type="radio" id="_s_title_max_length_overflow_warn" name="_s_title_max_length_overflow" value="warn" <?php checked( $current_value, 'warn' ); ?>/>
                    <label for="_s_title_max_length_overflow_warn"><?php _e( 'Warn', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: OG Title / -->

<!-- / Section: OG Description \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170" colspan="2">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Schema description', 'seobox' ); ?></h4>
            </td>
        </tr>
    </thead>
    <tbody>
        <tr class="row">
            <td valign="top" width="170">
                <label class="title"><?php _e( 'Active', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('_s_description_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_s_description_active_yes" name="_s_description_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_s_description_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_s_description_active_no" name="_s_description_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_s_description_active_no"><?php _e( 'No', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Default value', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('_s_description_default_value'); 
                    if( ! $current_value )
                    {
                        $current_value = 'excerpt';
                    }
                    ?>
                    <input type="radio" id="_s_description_default_value_none" name="_s_description_default_value" value="none" <?php checked( $current_value, 'none' ); ?>/>
                    <label for="_s_description_default_value_none">None</label>
                    <input type="radio" id="_s_description_default_value_exerpt"  name="_s_description_default_value" value="excerpt" <?php checked( $current_value, 'excerpt' ); ?>/>
                    <label for="_s_description_default_value_exerpt">Post excerpt</label>
                    <input type="radio" id="_s_description_default_value_custom"  name="_s_description_default_value" value="custom" <?php checked( $current_value, 'custom' ); ?>/>
                    <label for="_s_description_default_value_custom">Custom</label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Custom default value', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="text" name="_s_description_default_value_custom" placeholder="<?php _e( 'Schema description default value', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_s_description_default_value_custom') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="number" min="1" max="300" name="_s_description_max_length" placeholder="<?php _e( 'Schema description max length', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_s_description_max_length') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght overflow', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('_s_description_max_length_overflow'); 
                    if( ! $current_value )
                    {
                        $current_value = 'warn';
                    }
                    ?>
                    <input type="radio" id="_s_description_max_length_overflow_trim" name="_s_description_max_length_overflow" value="trim" <?php checked( $current_value, 'trim' ); ?>/>
                    <label for="_s_description_max_length_overflow_trim"><?php _e( 'Trim', 'seobox' ); ?></label>
                    <input type="radio" id="_s_description_max_length_overflow_warn" name="_s_description_max_length_overflow" value="warn" <?php checked( $current_value, 'warn' ); ?>/>
                    <label for="_s_description_max_length_overflow_warn"><?php _e( 'Warn', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: OG Description / -->

<!-- / Section: OG Image \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Schema image', 'seobox' ); ?></h4>
            </td>
            <td valign="top">
                &nbsp;
            </td>
        </tr>
    </thead>
    <tbody>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Active', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('_s_image_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_s_image_active_yes" name="_s_image_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_s_image_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_s_image_active_no" name="_s_image_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_s_image_active_no"><?php _e( 'No', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Default value', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('_s_image_default_value'); 
                    if( ! $current_value )
                    {
                        $current_value = 'featuredimage';
                    }
                    ?>
                    <input type="radio" id="_s_image_default_value_none" name="_s_image_default_value" value="none" <?php checked( $current_value, 'none' ); ?>/>
                    <label for="_s_image_default_value_none">None</label>
                    <input type="radio" id="_s_image_default_value_featuredimage"  name="_s_image_default_value" value="featuredimage" <?php checked( $current_value, 'featuredimage' ); ?>/>
                    <label for="_s_image_default_value_featuredimage">Featured image</label>
                    <input type="radio" id=_s_image_default_value_custom"  name="_s_image_default_value" value="custom" <?php checked( $current_value, 'custom' ); ?>/>
                    <label for="_s_image_default_value_custom">Custom</label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Custom default value', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">

                    <div class="seobox-image-upload-container">
                    
                        <img class="seobox-image-upload-src" src="" />

                        <!--a class="seobox-image-upload-edit" href="#">
                            <span class="fas fa-pencil-alt"></span>
                        </a-->

                        <a class="seobox-image-upload-delete" href="#">
                            <span class="fas fa-times"></span>
                        </a>

                        <input type="hidden" class="seobox-image-upload-field" value="" name="_fb_ogimage_custom_default_value" />
                    
                    </div>
                    
                    <button class="seobox-image-upload-select button button-large"><?php esc_attr_e( 'Select image', 'seobox' ); ?></button>

                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: OG Image / -->