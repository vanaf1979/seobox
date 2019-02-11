

<!-- / Section: Browser title \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Browser title', 'seobox' ); ?></h4>
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
                    $current_value = get_option('_g_browser_title_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_g_browser_title_active_yes" name="_g_browser_title_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_g_browser_title_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_g_browser_title_active_no" name="_g_browser_title_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_g_browser_title_active_no"><?php _e( 'No', 'seobox' ); ?></label>
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
                    $current_value = get_option('_g_browser_title_addition'); 
                    if( ! $current_value )
                    {
                        $current_value = 'sitename';
                    }
                    ?>
                    <input type="radio" id="_g_browser_title_addition_none" name="_g_browser_title_addition" value="none" <?php checked( $current_value, 'none' ); ?>/>
                    <label for="_g_browser_title_addition_none"><?php _e( 'None', 'seobox' ); ?></label>
                    <input type="radio" id="_g_browser_title_addition_sitename" name="_g_browser_title_addition" value="sitename" <?php checked( $current_value, 'sitename' ); ?>/>
                    <label for="_g_browser_title_addition_sitename"><?php _e( 'Sitename', 'seobox' ); ?></label>
                    <input type="radio" id="_g_browser_title_addition_custom" name="_g_browser_title_addition" value="custom" <?php checked( $current_value, 'custom' ); ?>/>
                    <label for="_g_browser_title_addition_custom"><?php _e( 'Custom', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Custom addition', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                <input type="text" name="_g_browser_title_custom_addition" placeholder="<?php _e( 'Browser title custom addition', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_g_browser_title_custom_addition') ); ?>"/>
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
                    $current_value = get_option('_g_browser_title_addition_position'); 
                    if( ! $current_value )
                    {
                        $current_value = 'suffix';
                    }
                    ?>
                    <input type="radio" id="_g_browser_title_addition_position_prefix" name="_g_browser_title_addition_position" value="prefix" <?php checked( $current_value, 'prefix' ); ?>/>
                    <label for="_g_browser_title_addition_position_prefix"><?php _e( 'Prefix', 'seobox' ); ?></label>
                    <input type="radio" id="_g_browser_title_addition_position_suffix" name="_g_browser_title_addition_position" value="suffix" <?php checked( $current_value, 'suffix' ); ?>/>
                    <label for="_g_browser_title_addition_position_suffix"><?php _e( 'Suffix', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Default value', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="text" name="_g_browser_title_default" placeholder="<?php _e( 'Browser title default value', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_g_browser_title_default') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="number" min="1" max="300" name="_g_browser_title_max_lenght" placeholder="<?php _e( 'Browser title max length', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_g_browser_title_max_lenght') ); ?>"/>
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
                    $current_value = get_option('_g_browser_title_max_length_overflow'); 
                    if( ! $current_value )
                    {
                        $current_value = 'warn';
                    }
                    ?>
                    <input type="radio" id="_g_browser_title_max_length_overflow_trim" name="_g_browser_title_max_length_overflow" value="trim" <?php checked( $current_value, 'trim' ); ?>/>
                    <label for="_g_browser_title_max_length_overflow_trim"><?php _e( 'Trim', 'seobox' ); ?></label>
                    <input type="radio" id="_g_browser_title_max_length_overflow_warn" name="_g_browser_title_max_length_overflow" value="warn" <?php checked( $current_value, 'warn' ); ?>/>
                    <label for="_g_browser_title_max_length_overflow_warn"><?php _e( 'Warn', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: Browser title / -->

<!-- / Section: Keywords \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Keywords', 'seobox' ); ?></h4>
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
                    $current_value = get_option('_g_keywords_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_g_keywords_active_yes" name="_g_keywords_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_g_keywords_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_g_keywords_active_no" name="_g_keywords_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_g_keywords_active_no"><?php _e( 'No', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Default value', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                <input type="text" name="_g_keywords_default_value" placeholder="<?php _e( 'Keywords default value', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_g_keywords_default_value') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="number" min="1" max="300" name="_g_keywords_max_lenght" placeholder="<?php _e( 'Keywords max length', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_g_keywords_max_lenght') ); ?>"/>
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
                    $current_value = get_option('_g_keywords_max_length_overflow'); 
                    if( ! $current_value )
                    {
                        $current_value = 'warn';
                    }
                    ?>
                    <input type="radio" id="_g_keywords_max_length_overflow_trim" name="_g_keywords_max_length_overflow" value="trim" <?php checked( $current_value, 'trim' ); ?>/>
                    <label for="_g_keywords_max_length_overflow_trim"><?php _e( 'Trim', 'seobox' ); ?></label>
                    <input type="radio" id="_g_keywords_max_length_overflow_warn" name="_g_keywords_max_length_overflow" value="warn" <?php checked( $current_value, 'warn' ); ?>/>
                    <label for="_g_keywords_max_length_overflow_warn"><?php _e( 'Warn', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: Keywords / -->

<!-- / Section: Description \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> Description</h4>
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
                    $current_value = get_option('_g_description_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_g_description_active_active_yes" name="_g_description_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_g_description_active_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_g_description_active_active_no" name="_g_description_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_g_description_active_active_no"><?php _e( 'No', 'seobox' ); ?></label>
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
                    $current_value = get_option('_g_description_default_value'); 
                    if( ! $current_value )
                    {
                        $current_value = 'excerpt';
                    }
                    ?>
                    <input type="radio" id="_g_description_default_value_none" name="_g_description_default_value" value="none" <?php checked( $current_value, 'none' ); ?>/>
                    <label for="_g_description_default_value_none">None</label>
                    <input type="radio" id="_g_description_default_value_exerpt"  name="_g_description_default_value" value="excerpt" <?php checked( $current_value, 'excerpt' ); ?>/>
                    <label for="_g_description_default_value_exerpt">Post excerpt</label>
                    <input type="radio" id="_g_description_default_value_custom"  name="_g_description_default_value" value="custom" <?php checked( $current_value, 'custom' ); ?>/>
                    <label for="_g_description_default_value_custom">Custom</label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Custom default value', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="text" name="_g_description_default_value_custom" placeholder="<?php _e( 'Custom default description value', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_g_description_default_value_custom') ); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="number" min="1" max="300" name="_g_description_max_length" placeholder="<?php _e( 'Description max length', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_g_description_max_length') ); ?>"/>
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
                    $current_value = get_option('_g_description_max_length_overflow'); 
                    if( ! $current_value )
                    {
                        $current_value = 'warn';
                    }
                    ?>
                    <input type="radio" id="_g_description_max_length_overflow_trim" name="_g_description_max_length_overflow" value="trim" <?php checked( $current_value, 'trim' ); ?>/>
                    <label for="_g_description_max_length_overflow_trim"><?php _e( 'Trim', 'seobox' ); ?></label>
                    <input type="radio" id="_g_description_max_length_overflow_warn" name="_g_description_max_length_overflow" value="warn" <?php checked( $current_value, 'warn' ); ?>/>
                    <label for="_g_description_max_length_overflow_warn"><?php _e( 'Warn', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: Description / -->

<!-- / Section: Robots \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> Robots</h4>
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
                    $current_value = get_option('_g_robots_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_g_robots_active_yes" name="_g_robots_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_g_robots_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_g_robots_active_no" name="_g_robots_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_g_robotsactive_active_no"><?php _e( 'No', 'seobox' ); ?></label>
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
                    $current_value = get_option('_g_robots_default_value'); 
                    if( ! $current_value )
                    {
                        $current_value = 'index-follow';
                    }
                    ?>
                    <input type="radio" id="_g_robots_default_value_index_follow" name="_g_robots_default_value" value="index-follow" <?php checked( $current_value, 'index-follow' ); ?>/>
                    <label for="_g_robots_default_value_index_follow">Index / Follow</label>
                    <input type="radio" id="_g_robots_default_value_noindex_follow" name="_g_robots_default_value" value="noindex-follow" <?php checked( $current_value, 'noindex-follow' ); ?>/>
                    <label for="_g_robots_default_value_noindex_follow">Noindex / Follow</label>
                    <input type="radio" id="_g_robots_default_value_noindex_nofollow" name="_g_robots_default_value" value="noindex-nofollow" <?php checked( $current_value, 'noindex-nofollow' ); ?>/>
                    <label for="_g_robots_default_value_noindex_nofollow">Noindex / Nofollow</label>
                    <input type="radio" id="_g_robots_default_value_index_nofollow" name="_g_robots_default_value" value="index-nofollow" <?php checked( $current_value, 'index-nofollow' ); ?>/>
                    <label for="_g_robots_default_value_index_nofollow">Index / Nofollow</label>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: Robots / -->

<!-- / Section: Cannonical \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> Cannonical link</h4>
            </td>
            <td valign="top">
                <!-- <div class="form-wrapper active">
                    <input type="checkbox" name="" />
                    <label>Show in post edit screens?</label>
                </div> -->
            </td>
        </tr>
    </thead>
    <tbody>
        <tr class="row">
            <td valign="top">
                <label class="title">Active:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="radio" name="addition" value="noen"/>
                    <label>Yes</label>
                    <input type="radio" name="addition" value="sitename"/>
                    <label>No</label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title">Default value:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="radio" name="addition" value="noen"/>
                    <label>None</label>
                    <input type="radio" name="addition" value="sitename"/>
                    <label>Permalink</label>
                    <input type="radio" name="addition" value="custom"/>
                    <label>Custom</label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title">Custom link:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                <input type="text" name="custom_addition" placeholder="Browser title custom addition"/>
                </div>
            </td>
        </tr>
    
    </tbody>
</table>

<!-- \ Section: Cannonical / -->