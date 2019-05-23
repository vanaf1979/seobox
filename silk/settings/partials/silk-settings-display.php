

<h2>&nbsp;</h2>

<div class="silk-settings">

    <div class="container left">

        <form action="options.php" method="post">

            <?php
            if( ! isset( $_GET['tab'] ) || $_GET['tab'] == 'google' )
            {
                settings_fields( 'silk-settings-google' );
                do_settings_sections( 'silk-settings-google' );
            }
            else if( isset( $_GET['tab'] ) && $_GET['tab'] == 'facebook' )
            {
                settings_fields( 'silk-settings-facebook' );
                do_settings_sections( 'silk-settings-facebook' );
            }
            else if( isset( $_GET['tab'] ) && $_GET['tab'] == 'twitter' )
            {
                settings_fields( 'silk-settings-twitter' );
                do_settings_sections( 'silk-settings-twitter' );
            }
            else if( isset( $_GET['tab'] ) && $_GET['tab'] == 'schema' )
            {
                settings_fields( 'silk-settings-schema' );
                do_settings_sections( 'silk-settings-schema' );
            }
            else if( isset( $_GET['tab'] ) && $_GET['tab'] == 'tags' )
            {
                settings_fields( 'silk-settings-tags' );
                do_settings_sections( 'silk-settings-tags' );
            }
            else if( isset( $_GET['tab'] ) && $_GET['tab'] == 'silk' )
            {
                settings_fields( 'silk-settings-silk' );
                do_settings_sections( 'silk-settings-silk' );
            }
            ?>

            <ul class="silk-settings-tabs">
                <li class="<?php if( ! isset( $_GET['tab'] ) || $_GET['tab'] == 'google' ) { echo 'active'; } ?>">
                    <span class="fab fa-google"></span> <a href="<?php echo admin_url( 'options-general.php?page=Silk&tab=google' ); ?>">Google</a>
                </li>
                <li class="<?php if( isset( $_GET['tab'] ) && $_GET['tab'] == 'facebook' ) { echo 'active'; } ?>">
                    <span class="fab fa-facebook"></span> <a href="<?php echo admin_url( 'options-general.php?page=Silk&tab=facebook' ); ?>">Facebook</a>
                </li>
                <li class="<?php if( isset( $_GET['tab'] ) && $_GET['tab'] == 'twitter' ) { echo 'active'; } ?>">
                    <span class="fab fa-twitter"></span> <a href="<?php echo admin_url( 'options-general.php?page=Silk&tab=twitter' ); ?>">Twitter</a>
                </li>
                <li class="<?php if( isset( $_GET['tab'] ) && $_GET['tab'] == 'schema' ) { echo 'active'; } ?>">
                    <span class="fas fa-network-wired"></span> <a href="<?php echo admin_url( 'options-general.php?page=Silk&tab=schema' ); ?>">Schema</a>
                </li>
                <li class="<?php if( isset( $_GET['tab'] ) && $_GET['tab'] == 'tags' ) { echo 'active'; } ?>">
                    <span class="fas fa-tag"></span> <a href="<?php echo admin_url( 'options-general.php?page=Silk&tab=tags' ); ?>">Tags</a>
                </li>
                <li class="<?php if( isset( $_GET['tab'] ) && $_GET['tab'] == 'silk' ) { echo 'active'; } ?>">
                    <span class="fas fa-cog"></span> <a href="<?php echo admin_url( 'options-general.php?page=Silk&tab=silk' ); ?>">Silk</a>
                </li>
            </ul>

            <div class="sb-settings-tabs-container">

                <?php 
                if( ! isset( $_GET['tab'] ) || $_GET['tab'] == 'google' )
                {
                ?>
                <div class="tab active">
                    
                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/silk-settings-google-display.php' ); ?>

                </div>
                <?php
                }
                ?>

                <?php 
                if( isset( $_GET['tab'] ) && $_GET['tab'] == 'facebook' )
                {
                ?>
                <div class="tab active">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/silk-settings-facebook-display.php' ); ?>

                </div>
                <?php
                }
                ?>

                <?php 
                if( isset( $_GET['tab'] ) && $_GET['tab'] == 'twitter' )
                {
                ?>
                <div class="tab active">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/silk-settings-twitter-display.php' ); ?>

                </div>
                <?php
                }
                ?>

                <?php 
                if( isset( $_GET['tab'] ) && $_GET['tab'] == 'schema' )
                {
                ?>
                <div class="tab active">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/silk-settings-schema-display.php' ); ?>

                </div>
                <?php
                }
                ?>

                <?php 
                if( isset( $_GET['tab'] ) && $_GET['tab'] == 'tags' )
                {
                ?>
                <div class="tab active">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/silk-settings-tags-display.php' ); ?>

                </div>
                <?php
                }
                ?>

                <?php 
                if( isset( $_GET['tab'] ) && $_GET['tab'] == 'seobox' )
                {
                ?>
                <div class="tab active">

                    <?php require_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/silk-settings-seobox-display.php' ); ?>

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

        <h2><?php _e( 'Silk news/meta', 'silk' ); ?></h2>

    </div>

</div>
