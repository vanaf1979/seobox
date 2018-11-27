
<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="seobox-metabox">

    <h4><?php _e( 'Seobox wordpress seo plugin', 'seobox' ); ?></h4>

    <ul class="seobox-admin-tabs">
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

    <div class="sb-admin-tabs-container">

        <div id="tab-g">

            <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-admin-google-display.php' ); ?>

        </div>

        <div id="ttab-fb">

            <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-admin-facebook-display.php' ); ?>

        </div>

        <div id="ttab-tw">

            <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-admin-twitter-display.php' ); ?>

        </div>

        <div id="tab-sh">

            <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-admin-schema-display.php' ); ?>

        </div>

    </div>

</div>