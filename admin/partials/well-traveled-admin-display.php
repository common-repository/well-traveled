<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       www.welltraveled.io
 * @since      1.0.0
 *
 * @package    Well_Traveled
 * @subpackage Well_Traveled/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="cleanup_options" action="options.php">

        <?php
        //Grab all options
        $options = get_option($this->plugin_name);

        // Cleanup
        $unique_id = $options['unique_id'];
        $i_agree = $options['i_agree'];
    ?>


    <?php
        settings_fields($this->plugin_name);
      do_settings_sections($this->plugin_name);

      ?>

        <!-- add unique id to tag -->
        <fieldset>
            <legend class="screen-reader-text"><span><?php _e('Well Traveled Unique User Id', $this->plugin_name); ?></span></legend>
                    <fieldset>
                        <p>Input your unique user ID here. If you don't know what this is please email <a href="mailto:support@welltraveled.io?subject=Missing ID">support@welltraveled.io</a></p>
                        <legend class="screen-reader-text"><span><?php _e('Input Your User ID', $this->plugin_name); ?></span></legend>
                        <input required placeholder="WT-12341234" type="text" class="regular-text" id="<?php echo $this->plugin_name; ?>-unique_id" name="<?php echo $this->plugin_name; ?>[unique_id]" value="<?php if(!empty($unique_id)) echo $unique_id; ?>"/>
                    </fieldset>

<br />
                    <fieldset>
            <legend class="screen-reader-text"><span><?php _e('I agree for Well Traveled to collect my data', $this->plugin_name); ?></span></legend>
            <label for="<?php echo $this->plugin_name; ?>-i_agree">
                <input type="checkbox" id="<?php echo $this->plugin_name;?>-i_agree" name="<?php echo $this->plugin_name; ?>[i_agree]" value="1" <?php checked($i_agree, 1); ?> />
                <span><?php esc_attr_e('I agree for Well Traveled to collect my data', $this->plugin_name); ?></span>
            </label>
        </fieldset>

        </fieldset>

        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>
