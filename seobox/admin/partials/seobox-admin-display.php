
<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="seobox-metabox">

    <?php wp_nonce_field( 'seobox_admin_save_metas', 'seobox_admin_nonce' ); ?>

    <ul class="seobox-admin-tabs">
        <li class="active" data-tab="tab-g">
            <span class="fab fa-google"></span> <a>Google</a>
        </li>
        <li data-tab="tab-fb">
            <span class="fab fa-facebook"></span> <a>Facebook</a>
        </li>
        <li data-tab="tab-tw">
            <span class="fab fa-twitter"></span> <a>Twitter</a>
        </li>
        <li data-tab="tab-sh">
            <span class="fas fa-network-wired"></span> <a>Schema</a>
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