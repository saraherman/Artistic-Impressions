<?php
/* Creates the Theme Options Page */

function main_theme_options_do_page() {
    wp_enqueue_style( 'style-name', get_template_directory_uri().'/autocracy/admin.css' );
    wp_enqueue_style( 'style-font', 'http://fonts.googleapis.com/css?family=Rokkitt' );
    ?>
    <div class="wrap">
        <?php
        screen_icon();
        echo "<h2>" . get_current_theme() . __(' Theme Manager', 'sampletheme') . "</h2>";
        ?>
        <?php if (false !== $_REQUEST['settings-updated']) : ?>
        <div class="updated fade"><p><strong><?php _e('Options saved', 'sampletheme'); ?></strong></p></div>
    <?php endif; ?>

    <form method="post" action="options.php">
        <?php
        settings_fields('main_options');
        $optionname= 'main_theme_options';
        $mainoptions = get_option($optionname);
        ?>
        <div class="module-fullwidth">
            <h2>Homepage Content</h2>
            <div class="col-wrap">
                <div class="col">
                    <label>Blurb 1 Title</label>
                    <?php autoc_def_textfield($optionname, 'Blurb1Title'); ?>
                    <?php echo autoc_get_postdata('Blurb1Title'); ?>
                    <label>Blurb 1 Link</label>
                    <?php autoc_def_textfield($optionname, 'Blurb1Link'); ?>
                    <label>Blurb 1 Image</label>
                    <?php autoc_def_textfield($optionname, 'Blurb1Img'); ?>
                </div>
                <div class="col">
                    <label>Blurb 2 Title</label>
                    <?php autoc_def_textfield($optionname, 'Blurb2Title'); ?>
                    <label>Blurb 2 Link</label>
                    <?php autoc_def_textfield($optionname, 'Blurb2Link'); ?>
                    <label>Blurb 2 Image</label>
                    <?php autoc_def_textfield($optionname, 'Blurb2Img'); ?>
                </div>
                <div class="col">
                    <label>Blurb 3 Title</label>
                    <?php autoc_def_textfield($optionname, 'Blurb3Title'); ?>
                    <label>Blurb 3 Link</label>
                    <?php autoc_def_textfield($optionname, 'Blurb3Link'); ?>
                    <label>Blurb 3 Image</label>
                    <?php autoc_def_textfield($optionname, 'Blurb3Img'); ?>
                </div>
            </div>
            <label>Content Title</label>
            <?php autoc_def_textfield($optionname, 'ContentTitle'); ?>
            <label>Content</label>
            <?php autoc_def_textarea($optionname, 'Content'); ?>
        </div>
        <h2>Contact Information</h2>
        <label>Address</label>
        <?php autoc_def_textfield($optionname, 'address'); ?>
        <label>Phone</label>
        <?php autoc_def_textfield($optionname, 'phone'); ?>
        <label>Fax</label>
        <?php autoc_def_textfield($optionname, 'fax'); ?>
        <label>Contact Email</label>
        <?php autoc_def_textfield($optionname, 'email'); ?>
        <label>Store Hrs</label>
        <?php autoc_def_textfield($optionname, 'hrs'); ?>
        <label>Map Code</label>
        <?php autoc_def_textarea($optionname, 'map'); ?>

        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Options', 'sampletheme'); ?>" />
        </p>
    </form>

</div>
<?php
}

function main_theme_options_validate($input) {
    global $select_options, $radio_options;
    // Our checkbox value is either 0 or 1
    if (!isset($input['option1']))
        $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    // Say our text option must be safe text with no HTML tags
    $input['sometext'] = wp_filter_nohtml_kses($input['sometext']);
    // Our select option must actually be in our array of select options
    // Say our textarea option must be safe text with the allowed tags for posts
    $input['sometextarea'] = wp_filter_post_kses($input['sometextarea']);
    return $input;
}
?>