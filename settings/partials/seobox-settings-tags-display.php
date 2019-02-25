<!-- / Section: Google analytics  \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170" colspan="2">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Google analytics', 'seobox' ); ?></h4>
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
                    $current_value = get_option('_tag_analytics_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_tag_analytics_active_yes" name="_tag_analytics_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_tag_analytics_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_tag_analytics_active_no" name="_tag_analytics_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_tag_analytics_active_no"><?php _e( 'No', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Tracking code id', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                
                    <input type="text" name="_tag_analytics_value" placeholder="<?php _e( 'Google analytics tracking code id', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_tag_analytics_value') ); ?>"/>

                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: Google analytics / -->

<!-- / Section: Google search console  \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170" colspan="2">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Google search console', 'seobox' ); ?></h4>
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
                    $current_value = get_option('_tag_console_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_tag_console_active_yes" name="_tag_console_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_tag_console_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="_tag_console_active_no" name="_tag_console_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_tag_console_active_no"><?php _e( 'No', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Site verification id', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                
                    <input type="text" name="_tag_console_value" placeholder="<?php _e( 'Google search console site verification id', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_tag_console_value') ); ?>"/>

                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: Google search console / -->

<!-- / Section: Google tag manager  \ -->

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170" colspan="2">
                <h4><a class="fas fa-info-circle" href="" target="_blank"></a> <?php _e( 'Google tag manager', 'seobox' ); ?></h4>
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
                    $current_value = get_option('_tag_manager_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="'_tag_manager_active_yes" name="'_tag_manager_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="'_tag_manager_active_yes"><?php _e( 'Yes', 'seobox' ); ?></label>
                    <input type="radio" id="'_tag_manager_active_no" name="'_tag_manager_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="'_tag_manager_active_no"><?php _e( 'No', 'seobox' ); ?></label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Tag manager id', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                
                    <input type="text" name="_tag_manager_value" placeholder="<?php _e( 'Google tag manager id', 'seobox' ); ?>" value="<?php echo esc_attr( get_option('_tag_manager_value') ); ?>"/>

                </div>
            </td>
        </tr>
    </tbody>
</table>

<!-- \ Section: Google tag manager / -->