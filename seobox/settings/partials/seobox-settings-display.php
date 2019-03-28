

<h2>&nbsp;</h2>

<div class="seobox-settings">

    <div class="container left">

        <form action="options.php" method="post">

            <?php
            if( ! isset( $_GET['tab'] ) || $_GET['tab'] == 'google' )
            {
                settings_fields( 'seobox-settings-google' );
                do_settings_sections( 'seobox-settings-google' );
            }
            else if( isset( $_GET['tab'] ) && $_GET['tab'] == 'facebook' )
            {
                settings_fields( 'seobox-settings-facebook' );
                do_settings_sections( 'seobox-settings-facebook' );
            }
            else if( isset( $_GET['tab'] ) && $_GET['tab'] == 'twitter' )
            {
                settings_fields( 'seobox-settings-twitter' );
                do_settings_sections( 'seobox-settings-twitter' );
            }
            else if( isset( $_GET['tab'] ) && $_GET['tab'] == 'schema' )
            {
                settings_fields( 'seobox-settings-schema' );
                do_settings_sections( 'seobox-settings-schema' );
            }
            else if( isset( $_GET['tab'] ) && $_GET['tab'] == 'tags' )
            {
                settings_fields( 'seobox-settings-tags' );
                do_settings_sections( 'seobox-settings-tags' );
            }
            else if( isset( $_GET['tab'] ) && $_GET['tab'] == 'seobox' )
            {
                settings_fields( 'seobox-settings-seobox' );
                do_settings_sections( 'seobox-settings-seobox' );
            }
            ?>

            <ul class="seobox-settings-tabs">
                <li class="<?php if( ! isset( $_GET['tab'] ) || $_GET['tab'] == 'google' ) { echo 'active'; } ?>">
                    <span class="fab fa-google"></span> <a href="<?php echo admin_url( 'options-general.php?page=Seobox&tab=google' ); ?>">Google</a>
                </li>
                <li class="<?php if( isset( $_GET['tab'] ) && $_GET['tab'] == 'facebook' ) { echo 'active'; } ?>">
                    <span class="fab fa-facebook"></span> <a href="<?php echo admin_url( 'options-general.php?page=Seobox&tab=facebook' ); ?>">Facebook</a>
                </li>
                <li class="<?php if( isset( $_GET['tab'] ) && $_GET['tab'] == 'twitter' ) { echo 'active'; } ?>">
                    <span class="fab fa-twitter"></span> <a href="<?php echo admin_url( 'options-general.php?page=Seobox&tab=twitter' ); ?>">Twitter</a>
                </li>
                <li class="<?php if( isset( $_GET['tab'] ) && $_GET['tab'] == 'schema' ) { echo 'active'; } ?>">
                    <span class="fas fa-network-wired"></span> <a href="<?php echo admin_url( 'options-general.php?page=Seobox&tab=schema' ); ?>">Schema</a>
                </li>
                <li class="<?php if( isset( $_GET['tab'] ) && $_GET['tab'] == 'tags' ) { echo 'active'; } ?>">
                    <span class="fas fa-tag"></span> <a href="<?php echo admin_url( 'options-general.php?page=Seobox&tab=tags' ); ?>">Tags</a>
                </li>
                <li class="<?php if( isset( $_GET['tab'] ) && $_GET['tab'] == 'seobox' ) { echo 'active'; } ?>">
                    <span class="fas fa-cog"></span> <a href="<?php echo admin_url( 'options-general.php?page=Seobox&tab=seobox' ); ?>">Seobox</a>
                </li>
            </ul>

            <div class="sb-settings-tabs-container">

                <?php 
                if( ! isset( $_GET['tab'] ) || $_GET['tab'] == 'google' )
                {
                ?>
                <div class="tab active">
                    
                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-settings-google-display.php' ); ?>

                </div>
                <?php
                }
                ?>

                <?php 
                if( isset( $_GET['tab'] ) && $_GET['tab'] == 'facebook' )
                {
                ?>
                <div class="tab active">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-settings-facebook-display.php' ); ?>

                </div>
                <?php
                }
                ?>

                <?php 
                if( isset( $_GET['tab'] ) && $_GET['tab'] == 'twitter' )
                {
                ?>
                <div class="tab active">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-settings-twitter-display.php' ); ?>

                </div>
                <?php
                }
                ?>

                <?php 
                if( isset( $_GET['tab'] ) && $_GET['tab'] == 'schema' )
                {
                ?>
                <div class="tab active">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-settings-schema-display.php' ); ?>

                </div>
                <?php
                }
                ?>

                <?php 
                if( isset( $_GET['tab'] ) && $_GET['tab'] == 'tags' )
                {
                ?>
                <div class="tab active">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-settings-tags-display.php' ); ?>

                </div>
                <?php
                }
                ?>

                <?php 
                if( isset( $_GET['tab'] ) && $_GET['tab'] == 'seobox' )
                {
                ?>
                <div class="tab active">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/seobox-settings-seobox-display.php' ); ?>

                </div>
                <?php
                }
                ?>
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
