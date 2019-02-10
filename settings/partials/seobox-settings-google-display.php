

<table width="100%" class="seobox-settings-section">
    <thead>
        <tr>
            <td valign="top" width="170">
                <h4>Browser title</h4>
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
                    <?php
                    $current_value = get_option('_g_browser_title_active'); 
                    if( ! $current_value )
                    {
                        $current_value = 'yes';
                    }
                    ?>
                    <input type="radio" id="_g_browser_title_active_yes" name="_g_browser_title_active" value="yes" <?php checked( $current_value, 'yes' ); ?>/>
                    <label for="_g_browser_title_active_yes">Yes</label>
                    <input type="radio" id="_g_browser_title_active_no" name="_g_browser_title_active" value="no" <?php checked( $current_value, 'no' ); ?>/>
                    <label for="_g_browser_title_active_no">No</label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title">Addition:</label>
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
                    <label for="_g_browser_title_addition_none">None</label>
                    <input type="radio" id="_g_browser_title_addition_sitename" name="_g_browser_title_addition" value="sitename" <?php checked( $current_value, 'sitename' ); ?>/>
                    <label for="_g_browser_title_addition_sitename">Sitename</label>
                    <input type="radio" id="_g_browser_title_addition_custom" name="_g_browser_title_addition" value="custom" <?php checked( $current_value, 'custom' ); ?>/>
                    <label for="_g_browser_title_addition_custom">Custom</label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title">Custom addition:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                <input type="text" name="_g_browser_title_custom_addition" placeholder="Browser title custom addition" value="<?php echo get_option('_g_browser_title_custom_addition'); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title">Position:</label>
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
                    <label for="_g_browser_title_addition_position_prefix">Prefix</label>
                    <input type="radio" id="_g_browser_title_addition_position_suffix" name="_g_browser_title_addition_position" value="suffix" <?php checked( $current_value, 'suffix' ); ?>/>
                    <label for="_g_browser_title_addition_position_suffix">Suffix</label>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title">Default value:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="text" name="_g_browser_title_default" placeholder="Browser title default valeu" value="<?php echo get_option('_g_browser_title_default'); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title">Max lenght:</label>
            </td>
            <td valign="top">
                <div class="form-wrapper llar">
                    <input type="text" name="_g_browser_title_max_lenght" placeholder="Browser title max lenght" value="<?php echo get_option('_g_browser_title_max_lenght'); ?>"/>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td valign="top">
                <label class="title">Max length overflow:</label>
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
                    <label for="_g_browser_title_max_length_overflow_trim">Trim</label>
                    <input type="radio" id="_g_browser_title_max_length_overflow_warn" name="_g_browser_title_max_length_overflow" value="warn" <?php checked( $current_value, 'warn' ); ?>/>
                    <label for="_g_browser_title_max_length_overflow_warn">Warn</label>
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