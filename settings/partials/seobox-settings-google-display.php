

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4><?php _e( 'Browser title', 'seobox' ); ?></h4>
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
                <input type="text" name="_g_browser_title_custom_addition" placeholder="<?php _e( 'Browser title custom addition', 'seobox' ); ?>" value="<?php echo get_option('_g_browser_title_custom_addition'); ?>"/>
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
                    <input type="text" name="_g_browser_title_default" placeholder="<?php _e( 'Browser title default value', 'seobox' ); ?>" value="<?php echo get_option('_g_browser_title_default'); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title"><?php _e( 'Max lenght', 'seobox' ); ?>:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="text" name="_g_browser_title_max_lenght" placeholder="<?php _e( 'Browser title max length', 'seobox' ); ?>" value="<?php echo get_option('_g_browser_title_max_lenght'); ?>"/>
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



<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4>Keywords</h4>
            </td>
            <td valign="top">
                &nbsp;
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
                    <input type="text" name="default_value" placeholder="Browser title default valeu"/>
                </div>
            </td>
        </tr>
    </tbody>
</table>



<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4>Description</h4>
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
                    <label>Post excerpt</label>
                    <input type="radio" name="addition" value="custom"/>
                    <label>Custom</label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title">Custom default value:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                <input type="text" name="custom_addition" placeholder="Browser title custom addition"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title">Max lenght:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="text" name="max_lenght" placeholder="Browser title max lenght"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title">Max length overflow:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="radio" name="Max_lenght_overflow" value="trim"/>
                    <label>Trim</label>
                    <input type="radio" name="addition" value="warn"/>
                    <label>Warn</label>
                </div>
            </td>
        </tr>
    </tbody>
</table>



<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4>Robots</h4>
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
                    <label>Index / Follow</label>
                    <input type="radio" name="addition" value="sitename"/>
                    <label>Noindex / Follow</label>
                    <input type="radio" name="addition" value="custom"/>
                    <label>Noindex / Nofollow</label>
                    <input type="radio" name="addition" value="custom"/>
                    <label>index / Nofollow</label>
                </div>
            </td>
        </tr>
    </tbody>
</table>



<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4>Cannonical link</h4>
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