
<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="seobox-settings">

    <h2><?php _e( 'Seobox settings', 'seobox' ); ?></h2>

    <div class="container left">

        <form action="options.php" method="post">

            <?php
            settings_fields( 'seobox-settings' );
            do_settings_sections( 'seobox-settings' );
            ?>

            <ul class="seobox-admin-tabs">
                <li class="active" data-tab="tab-g">
                    <a>Google</a>
                </li>
                <li data-tab="tab-fb">
                    <a>Facebook</a>
                </li>
                <li data-tab="tab-tw">
                    <a>Twitter</a>
                </li>
                <li data-tab="tab-sh">
                    <a>Schema</a>
                </li>
            </ul>

            <div class="sb-settings-tabs-container">

                <div id="tab-g" class="tab active">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-settings-google-display.php' ); ?>

                </div>

                <div id="tab-fb" class="tab">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-settings-facebook-display.php' ); ?>

                </div>

                <div id="tab-tw" class="tab">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-settings-twitter-display.php' ); ?>

                </div>

                <div id="tab-sh" class="tab">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-settings-schema-display.php' ); ?>

                </div>

                <div class="submit">

                    <?php submit_button(); ?>

                </div>

            </div>

        </form>

    </div>

    <div class="container right">

        <h2><?php _e( 'Seobox news/meta', 'seobox' ); ?></h2>

    </div>

</div>

<table>
  <!-- <tr>
    <th>setting-name-1</th>
    <td>
      <input type="text" name="seobox-setting-name-1" value="<?php echo esc_attr( get_option('seobox-setting-name-1') ); ?>" />
    </td>
  </tr> -->
</table>
