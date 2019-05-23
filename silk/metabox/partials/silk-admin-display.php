
<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="silk-metabox">

    <?php wp_nonce_field( 'silk_admin_save_metas', 'silk_admin_nonce' ); ?>

    <!-- TODO: Addapt to new WordPress core markup -->
    <!-- <nav class="nav-tab-wrapper wp-clearfix" aria-label="Secondary menu">
        <a href="about.php" class="nav-tab nav-tab-active">What’s New</a>
        <a href="credits.php" class="nav-tab">Credits</a>
        <a href="freedoms.php" class="nav-tab">Freedoms</a>
        <a href="freedoms.php?privacy-notice" class="nav-tab">Privacy</a>
    </nav> -->

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

    <div class="silk-admin-tabs-container">

        <div id="tab-g" class="tab active">

            <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/silk-admin-google-display.php' ); ?>

        </div>

        <div id="tab-fb" class="tab">

            <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/silk-admin-facebook-display.php' ); ?>

        </div>

        <div id="tab-tw" class="tab">

            <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/silk-admin-twitter-display.php' ); ?>

        </div>

        <div id="tab-sh" class="tab">

            <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/silk-admin-schema-display.php' ); ?>

        </div>

    </div>

</div>