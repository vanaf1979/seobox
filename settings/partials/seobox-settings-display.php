
<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="seobox-steings">

    <div class="container left">

        <form action="options.php" method="post">

            <?php
            settings_fields( 'seobox-settings' );
            do_settings_sections( 'seobox-settings' );
            ?>

            <h2><?php _e( 'Seobox settings', 'seobox' ); ?></h2>

            <ul class="seobox-settings-tabs">
                <li>
                    <a data-tab="tab-g">Google</a>
                </li>
                <li>
                    <a data-tab="tab-fb">Facebook</a>
                </li>
                <li>
                    <a data-tab="tab-tw">Twitter</a>
                </li>
                <li>
                    <a data-tab="tab-sh">Schema</a>
                </li>
            </ul>

            <div class="sb-settings-tabs-container">

                <div id="tab-g">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-settings-google-display.php' ); ?>

                </div>

                <div id="ttab-fb">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-settings-facebook-display.php' ); ?>

                </div>

                <div id="ttab-tw">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-settings-twitter-display.php' ); ?>

                </div>

                <div id="tab-sh">

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
