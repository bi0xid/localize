<?php if( $flash ) { ?>
    <div id="message" class="updated fade">
        <p><strong><?php echo $flash; ?></strong></p>
    </div>
<?php } ?>
<div id="icon-tools" class="icon32"><br /></div>
<div class="wrap">
    <h2><?php _e( 'Localize WordPress','localize' ); ?></h2>
    <div id="poststuff" class="metabox-holder">
        <div class="postbox">
            <h3 class="hndle" ><?php _e( 'Introduction','localize' )?></h3>
            <div class="inside">
                <p><?php _e( 'This plugin will help you enable localization for your language on this WordPress installation.','localize' ); ?></p>
                <p><?php _e( 'All you need to do is select the language code from the list below, and the version you want to use.','localize' ); ?></p>
                <p>
                    <?php _e( 'The <strong>stable version</strong> will load the file from already published translations.','localize' ); ?>
                    <u>
                        <?php _e( "For an optimized setup you need to manually update your WordPress installation using new locale!",'localize' )?>
                    </u>
                </p>
                <p>
                    <a class="button" href="<?php echo get_admin_url( null, 'update-core.php' ); ?>"><?php _e( 'Visit Updates Page','localize' )?> &rarr;</a>
                </p>
                <p>
                    <?php _e( 'The <strong>development version</strong> will try to download the file directly from ','localize' ); ?>
                    <a href="http://translate.wordpress.org/">GlotPress (translate.wordpress.org)</a>.
                </p>
            </div>
        </div>
        
        <div class="postbox">
            <h3 class="hndle" ><?php _e( 'Options','localize' )?></h3>
            <div class="inside">
                <p><?php _e( "Please select your language and it's version:",'localize' ); ?></p>
                <form action="" method="post">
                    <?php wp_nonce_field( 'localize', 'localize_nonce' ); ?>
                    <p class="form-field">
                        <label for="lang"><?php _e( 'Localization Code','localize' )?></label>
                        <input id="lang" name="lang" type="text" style="width: 100px;" value="<?php echo $lang ?>"/>
                        <?php _e( 'The localization code is composed of two letters language code, an underscore and two letters country code.','localize' ); ?>
                        <br />
                        <?php _e( 'Follow these links to find out your localization code: ','localize' ); ?>
                        <a href="http://www.gnu.org/software/hello/manual/gettext/Usual-Language-Codes.html">
                            <?php _e( 'Language Codes List','localize' ); ?>
                        </a>,
                        <a href="http://www.gnu.org/software/hello/manual/gettext/Country-Codes.html">
                            <?php _e( 'Country Codes List','localize' ); ?>
                        </a>.
                    </p>
                    <p class="form-field">
                        <label for="lang_version"><?php _e( 'Localization Version','localize' ); ?></label>
                        <select id="lang_version" name="lang_version">
                            <option value="stable" <?php selected( $lang_version == 'stable' ); ?>><?php _e( 'Stable','localize' )?></option>
                            <option value="dev" <?php selected( $lang_version == 'dev' ); ?>><?php _e( 'Development','localize' )?></option>
                        </select>
                    </p>
                    <p>
                        <input type="submit" class="button-primary" value="<?php _e( 'Submit','localize' )?>"/>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>