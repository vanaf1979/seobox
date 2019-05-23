

<!-- / Section: Card Type \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Twitter card type', 'seobox' ); ?></h4>
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
                    $current_value = get_option('_tw_cardtype_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_tw_cardtype_active_yes" name="_tw_cardtype_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_tw_cardtype_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_tw_cardtype_active_no" name="_tw_cardtype_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_tw_cardtype_active_no"><?php _e( 'No', 'seobox' ); ?></label>
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
                    $current_value = get_option('_tw_cardtype_default_value'); 
                    if( ! $current_value )
                    {
                        $current_value = 'website';
                    }
                    ?>
                    <select name="_tw_cardtype_default_value">
                        <option value="summary" <?php selected( $current_value, 'summary' ); ?>>Summary</option>
                        <option value="summary_large_image" <?php selected( $current_value, 'summary_large_image' ); ?>>Summary large image</option>
                        <option value="app" <?php selected( $current_value, 'app' ); ?>>App</option>
                        <option value="player" <?php selected( $current_value, 'player' ); ?>>Player</option>
                    </select>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: Card Type / -->

<!-- / Section: Card authow handle \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170"  colspan="2">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Twitter card author handle', 'seobox' ); ?></h4>
            </td>
            <td valign="top">
                &nbsp;
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
                    $current_value = get_option('_tw_cardauthor_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_tw_cardauthor_active_yes" name="_tw_cardauthor_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_tw_cardauthor_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_tw_cardauthor_active_no" name="_tw_cardauthor_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_tw_cardauthor_active_no"><?php _e( 'No', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Default value', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="text" name="_tw_cardauthor_default" placeholder="<?php _e( 'Twitter card author default value', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_tw_cardauthor_default') ); ?>"/>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: Card authow handle / -->

<!-- / Section: Card Title \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Twitter card title', 'seobox' ); ?></h4>
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
                    $current_value = get_option('_tw_cardtitle_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_tw_cardtitle_active_yes" name="_tw_cardtitle_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_tw_cardtitle_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_tw_cardtitle_active_no" name="_tw_cardtitle_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_tw_cardtitle_active_no"><?php _e( 'No', 'seobox' ); ?></label>
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
                    $current_value = get_option('_tw_cardtitle_addition'); 
                    if( ! $current_value )
                    {
                        $current_value = 'sitename';
                    }
                    ?>
                    <input type="radio" id="_tw_cardtitle_addition_none" name="_tw_cardtitle_addition" value="none" <?php checked( $current_value, 'none' ); ?>/>
                    <label for="_tw_cardtitle_addition_none"><?php _e( 'None', 'seobox' ); ?></label>
                    <input type="radio" id="_tw_cardtitle_addition_sitename" name="_tw_cardtitle_addition" value="sitename" <?php checked( $current_value, 'sitename' ); ?>/>
                    <label for="_tw_cardtitle_addition_sitename"><?php _e( 'Sitename', 'seobox' ); ?></label>
                    <input type="radio" id="_tw_cardtitle_addition_custom" name="_tw_cardtitle_addition" value="custom" <?php checked( $current_value, 'custom' ); ?>/>
                    <label for="_tw_cardtitle_addition_custom"><?php _e( 'Custom', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Custom addition', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                <input type="text" name="_tw_cardtitle_custom_addition" placeholder="<?php _e( 'Open graph title custom addition', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_tw_cardtitle_custom_addition') ); ?>"/>
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
                    $current_value = get_option('_tw_cardtitle_addition_position'); 
                    if( ! $current_value )
                    {
                        $current_value = 'suffix';
                    }
                    ?>
                    <input type="radio" id="_tw_cardtitle_addition_position_prefix" name="_tw_cardtitle_addition_position" value="prefix" <?php checked( $current_value, 'prefix' ); ?>/>
                    <label for="_tw_cardtitle_addition_position_prefix"><?php _e( 'Prefix', 'seobox' ); ?></label>
                    <input type="radio" id="_tw_cardtitle_addition_position_suffix" name="_tw_cardtitle_addition_position" value="suffix" <?php checked( $current_value, 'suffix' ); ?>/>
                    <label for="_tw_cardtitle_addition_position_suffix"><?php _e( 'Suffix', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Default value', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="text" name="_tw_cardtitle_default" placeholder="<?php _e( 'Twitter card title default value', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_tw_cardtitle_default') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="number" min="1" max="300" name="_tw_cardtitle_max_lenght" placeholder="<?php _e( 'Twitter card title max length', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_tw_cardtitle_max_lenght') ); ?>"/>
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
                    $current_value = get_option('_tw_cardtitle_max_length_overflow'); 
                    if( ! $current_value )
                    {
                        $current_value = 'warn';
                    }
                    ?>
                    <input type="radio" id="_tw_cardtitle_max_length_overflow_trim" name="_tw_cardtitle_max_length_overflow" value="trim" <?php checked( $current_value, 'trim' ); ?>/>
                    <label for="_tw_cardtitle_max_length_overflow_trim"><?php _e( 'Trim', 'seobox' ); ?></label>
                    <input type="radio" id="_tw_cardtitle_max_length_overflow_warn" name="_tw_cardtitle_max_length_overflow" value="warn" <?php checked( $current_value, 'warn' ); ?>/>
                    <label for="_tw_cardtitle_max_length_overflow_warn"><?php _e( 'Warn', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: Card Title / -->

<!-- / Section: Card Description \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170" colspan="2">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Twitter card description', 'seobox' ); ?></h4>
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
                    $current_value = get_option('_tw_carddescription_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_tw_carddescription_active_yes" name="_tw_carddescription_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_tw_carddescription_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_tw_carddescription_active_no" name="_tw_carddescription_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_tw_carddescription_active_no"><?php _e( 'No', 'seobox' ); ?></label>
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
                    $current_value = get_option('_tw_carddescription_default_value'); 
                    if( ! $current_value )
                    {
                        $current_value = 'excerpt';
                    }
                    ?>
                    <input type="radio" id="_tw_carddescription_default_value_none" name="_tw_carddescription_default_value" value="none" <?php checked( $current_value, 'none' ); ?>/>
                    <label for="_tw_carddescription_default_value_none">None</label>
                    <input type="radio" id="_tw_carddescription_default_value_exerpt"  name="_tw_carddescription_default_value" value="excerpt" <?php checked( $current_value, 'excerpt' ); ?>/>
                    <label for="_tw_carddescription_default_value_exerpt">Post excerpt</label>
                    <input type="radio" id="_tw_carddescription_default_value_custom"  name="_tw_carddescription_default_value" value="custom" <?php checked( $current_value, 'custom' ); ?>/>
                    <label for="_tw_carddescription_default_value_custom">Custom</label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Custom default value', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="text" name="_tw_carddescription_default_value_custom" placeholder="<?php _e( 'Custom default card description value', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_tw_carddescription_default_value_custom') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="number" min="1" max="300" name="_tw_carddescription_max_length" placeholder="<?php _e( 'Card description max length', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_tw_carddescription_max_length') ); ?>"/>
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
                    $current_value = get_option('_tw_carddescription_max_length_overflow'); 
                    if( ! $current_value )
                    {
                        $current_value = 'warn';
                    }
                    ?>
                    <input type="radio" id="_tw_carddescription_max_length_overflow_trim" name="_tw_carddescription_max_length_overflow" value="trim" <?php checked( $current_value, 'trim' ); ?>/>
                    <label for="_tw_carddescription_max_length_overflow_trim"><?php _e( 'Trim', 'seobox' ); ?></label>
                    <input type="radio" id="_tw_carddescription_max_length_overflow_warn" name="_tw_carddescription_max_length_overflow" value="warn" <?php checked( $current_value, 'warn' ); ?>/>
                    <label for="_tw_carddescription_max_length_overflow_warn"><?php _e( 'Warn', 'seobox' ); ?></label>
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
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Card image', 'seobox' ); ?></h4>
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
                    $current_value = get_option('_tw_cardimage_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_tw_cardimage_active_yes" name="_tw_cardimage_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_tw_cardimage_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_tw_cardimage_active_no" name="_tw_cardimage_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_tw_cardimage_active_no"><?php _e( 'No', 'seobox' ); ?></label>
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
                    $current_value = get_option('_tw_cardimage_default_value'); 
                    if( ! $current_value )
                    {
                        $current_value = 'featuredimage';
                    }
                    ?>
                    <input type="radio" id="_tw_cardimage_default_value_none" name="_tw_cardimage_default_value" value="none" <?php checked( $current_value, 'none' ); ?>/>
                    <label for="_tw_cardimage_default_value_none">None</label>
                    <input type="radio" id="_tw_cardimage_default_value_featuredimage"  name="_tw_cardimage_default_value" value="featuredimage" <?php checked( $current_value, 'featuredimage' ); ?>/>
                    <label for="_tw_cardimage_default_value_featuredimage">Featured image</label>
                    <input type="radio" id="_tw_cardimage_default_value_custom"  name="_tw_cardimage_default_value" value="custom" <?php checked( $current_value, 'custom' ); ?>/>
                    <label for="_tw_cardimage_default_value_custom">Custom</label>
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

                        <input type="hidden" class="seobox-image-upload-field" value="" name="_tw_cardimage_custom_default_value" />
                    
                    </div>
                    
                    <button class="seobox-image-upload-select button button-large"><?php esc_attr_e( 'Select image', 'seobox' ); ?></button>

                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: OG Image / -->