
<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="seobox-metabox">

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

    <div class="sb-admin-tabs-container">

        <div id="tab-g" class="tab active">

            <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-admin-google-display.php' ); ?>

        </div>

        <div id="tab-fb" class="tab">

            <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-admin-facebook-display.php' ); ?>

        </div>

        <div id="tab-tw" class="tab">

            <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-admin-twitter-display.php' ); ?>

        </div>

        <div id="tab-sh" class="tab">

            <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-admin-schema-display.php' ); ?>

        </div>

    </div>

</div>