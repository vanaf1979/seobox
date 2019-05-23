

<!-- / Section: OG Type \ -->

<table width="100%" class="silk-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Open graph type', 'silk' ); ?></h4>
            </td>
            <td valign="top">
                &nbsp;
            </td>
        </tr>
    </thead>
    <tbody>
    <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Active', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('fb_ogtype_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="fb_ogtype_active_yes" name="fb_ogtype_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="fb_ogtype_active_yes"><?php _e( 'Yes', 'silk' ); ?></label>
                    <input type="radio" id="fb_ogtype_active_no" name="fb_ogtype_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="fb_ogtype_active_no"><?php _e( 'No', 'silk' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Default value', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                <?php
                    $current_value = get_option('fb_ogtype_default_value'); 
                    if( ! $current_value )
                    {
                        $current_value = 'website';
                    }
                    ?>
                    <select name="fb_ogtype_default_value">
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

<table width="100%" class="silk-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Open graph title', 'silk' ); ?></h4>
            </td>
            <td valign="top">
                &nbsp;
            </td>
        </tr>
    </thead>
    <tbody>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Active', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('fb_ogtitle_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="fb_ogtitle_active_yes" name="fb_ogtitle_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="fb_ogtitle_active_yes"><?php _e( 'Yes', 'silk' ); ?></label>
                    <input type="radio" id="fb_ogtitle_active_no" name="fb_ogtitle_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="fb_ogtitle_active_no"><?php _e( 'No', 'silk' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Addition', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('fb_ogtitle_addition'); 
                    if( ! $current_value )
                    {
                        $current_value = 'sitename';
                    }
                    ?>
                    <input type="radio" id="fb_ogtitle_addition_none" name="fb_ogtitle_addition" value="none" <?php checked( $current_value, 'none' ); ?>/>
                    <label for="fb_ogtitle_addition_none"><?php _e( 'None', 'silk' ); ?></label>
                    <input type="radio" id="fb_ogtitle_addition_sitename" name="fb_ogtitle_addition" value="sitename" <?php checked( $current_value, 'sitename' ); ?>/>
                    <label for="fb_ogtitle_addition_sitename"><?php _e( 'Sitename', 'silk' ); ?></label>
                    <input type="radio" id="fb_ogtitle_addition_custom" name="fb_ogtitle_addition" value="custom" <?php checked( $current_value, 'custom' ); ?>/>
                    <label for="fb_ogtitle_addition_custom"><?php _e( 'Custom', 'silk' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Custom addition', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                <input type="text" name="fb_ogtitle_custom_addition" placeholder="<?php _e( 'Open graph title custom addition', 'silk' ); ?>" value="<?php echo esc_attr( get_option('fb_ogtitle_custom_addition') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Position', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('fb_ogtitle_addition_position'); 
                    if( ! $current_value )
                    {
                        $current_value = 'suffix';
                    }
                    ?>
                    <input type="radio" id="fb_ogtitle_addition_position_prefix" name="fb_ogtitle_addition_position" value="prefix" <?php checked( $current_value, 'prefix' ); ?>/>
                    <label for="fb_ogtitle_addition_position_prefix"><?php _e( 'Prefix', 'silk' ); ?></label>
                    <input type="radio" id="fb_ogtitle_addition_position_suffix" name="fb_ogtitle_addition_position" value="suffix" <?php checked( $current_value, 'suffix' ); ?>/>
                    <label for="fb_ogtitle_addition_position_suffix"><?php _e( 'Suffix', 'silk' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Default value', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="text" name="fb_ogtitle_default" placeholder="<?php _e( 'Open graph title default value', 'silk' ); ?>" value="<?php echo esc_attr( get_option('_fb_ogtitle_default') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="number" min="1" max="300" name="fb_ogtitle_max_lenght" placeholder="<?php _e( 'OPen grpah title max length', 'silk' ); ?>" value="<?php echo esc_attr( get_option('fb_ogtitle_max_lenght') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght overflow', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('fb_ogtitle_max_length_overflow'); 
                    if( ! $current_value )
                    {
                        $current_value = 'warn';
                    }
                    ?>
                    <input type="radio" id="fb_ogtitle_max_length_overflow_trim" name="fb_ogtitle_max_length_overflow" value="trim" <?php checked( $current_value, 'trim' ); ?>/>
                    <label for="fb_ogtitle_max_length_overflow_trim"><?php _e( 'Trim', 'silk' ); ?></label>
                    <input type="radio" id="fb_ogtitle_max_length_overflow_warn" name="fb_ogtitle_max_length_overflow" value="warn" <?php checked( $current_value, 'warn' ); ?>/>
                    <label for="fb_ogtitle_max_length_overflow_warn"><?php _e( 'Warn', 'silk' ); ?></label>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: OG Title / -->

<!-- / Section: OG Description \ -->

<table width="100%" class="silk-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170" colspan="2">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Open graph description', 'silk' ); ?></h4>
            </td>
        </tr>
    </thead>
    <tbody>
        <tr class="row">
            <td valign="top" width="170">
                <label class="title"><?php _e( 'Active', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('fb_ogdescription_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="fb_ogdescription_active_yes" name="fb_ogdescription_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="fb_ogdescription_active_yes"><?php _e( 'Yes', 'silk' ); ?></label>
                    <input type="radio" id="fb_ogdescription_active_no" name="fb_ogdescription_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="fb_ogdescription_active_no"><?php _e( 'No', 'silk' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Default value', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('fb_ogdescription_default_value'); 
                    if( ! $current_value )
                    {
                        $current_value = 'excerpt';
                    }
                    ?>
                    <input type="radio" id="fb_ogdescription_default_value_none" name="fb_ogdescription_default_value" value="none" <?php checked( $current_value, 'none' ); ?>/>
                    <label for="fb_ogdescription_default_value_none">None</label>
                    <input type="radio" id="fb_ogdescription_default_value_exerpt"  name="fb_ogdescription_default_value" value="excerpt" <?php checked( $current_value, 'excerpt' ); ?>/>
                    <label for="fb_ogdescription_default_value_exerpt">Post excerpt</label>
                    <input type="radio" id="fb_ogdescription_default_value_custom"  name="fb_ogdescription_default_value" value="custom" <?php checked( $current_value, 'custom' ); ?>/>
                    <label for="fb_ogdescription_default_value_custom">Custom</label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Custom default value', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="text" name="fb_ogdescription_default_value_custom" placeholder="<?php _e( 'Custom default open graph description value', 'silk' ); ?>" value="<?php echo esc_attr( get_option('fb_ogdescription_default_value_custom') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="number" min="1" max="300" name="fb_ogdescription_max_length" placeholder="<?php _e( 'Open graph description max length', 'silk' ); ?>" value="<?php echo esc_attr( get_option('fb_ogdescription_max_length') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght overflow', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('fb_ogdescription_max_length_overflow'); 
                    if( ! $current_value )
                    {
                        $current_value = 'warn';
                    }
                    ?>
                    <input type="radio" id="fb_ogdescription_max_length_overflow_trim" name="fb_ogdescription_max_length_overflow" value="trim" <?php checked( $current_value, 'trim' ); ?>/>
                    <label for="fb_ogdescription_max_length_overflow_trim"><?php _e( 'Trim', 'silk' ); ?></label>
                    <input type="radio" id="fb_ogdescription_max_length_overflow_warn" name="fb_ogdescription_max_length_overflow" value="warn" <?php checked( $current_value, 'warn' ); ?>/>
                    <label for="fb_ogdescription_max_length_overflow_warn"><?php _e( 'Warn', 'silk' ); ?></label>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: OG Description / -->

<!-- / Section: OG Image \ -->

<table width="100%" class="silk-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Open graph image', 'silk' ); ?></h4>
            </td>
            <td valign="top">
                &nbsp;
            </td>
        </tr>
    </thead>
    <tbody>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Active', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('fb_ogimage_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="fb_ogimage_active_yes" name="fb_ogimage_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="fb_ogimage_active_yes"><?php _e( 'Yes', 'silk' ); ?></label>
                    <input type="radio" id="fb_ogimage_active_no" name="fb_ogimage_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="fb_ogimage_active_no"><?php _e( 'No', 'silk' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Default value', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <?php
                    $current_value = get_option('fb_ogimage_default_value'); 
                    if( ! $current_value )
                    {
                        $current_value = 'featuredimage';
                    }
                    ?>
                    <input type="radio" id="fb_ogimage_default_value_none" name="fb_ogimage_default_value" value="none" <?php checked( $current_value, 'none' ); ?>/>
                    <label for="fb_ogimage_default_value_none">None</label>
                    <input type="radio" id="fb_ogimage_default_value_featuredimage"  name="fb_ogimage_default_value" value="featuredimage" <?php checked( $current_value, 'featuredimage' ); ?>/>
                    <label for="fb_ogimage_default_value_featuredimage">Featured image</label>
                    <input type="radio" id="fb_ogimage_default_value_custom"  name="fb_ogimage_default_value" value="custom" <?php checked( $current_value, 'custom' ); ?>/>
                    <label for="fb_ogimage_default_value_custom">Custom</label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Custom default value', 'silk' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">

                    <div class="silk-image-upload-container">
                    
                        <img class="silk-image-upload-src" src="" />

                        <!--a class="silk-image-upload-edit" href="#">
                            <span class="fas fa-pencil-alt"></span>
                        </a-->

                        <a class="silk-image-upload-delete" href="#">
                            <span class="fas fa-times"></span>
                        </a>

                        <input type="hidden" class="silk-image-upload-field" value="" name="fb_ogimage_custom_default_value" />
                    
                    </div>
                    
                    <button class="silk-image-upload-select button button-large"><?php esc_attr_e( 'Select image', 'silk' ); ?></button>

                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: OG Image / -->