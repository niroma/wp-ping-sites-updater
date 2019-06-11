<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @author    Niroma
 */
	if( current_user_can( 'manage_options' ) ) {
	$this->get_ping_list();
?>
<div class="wrap">
    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
	<form name="wp_ping_sites_updater_settings" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
		<table class="form-table">	
			<tr valign="top">
				<th scope="row">
					<label for="<?php echo $this->plugin_name; ?>-url">
						<span><?php esc_attr_e('Ping List Url', $this->plugin_text_domain); ?></span>
					</label>
				</th>
				<td>								
					<input type="url" id="<?php echo $this->plugin_name; ?>-url" name="<?php echo $this->plugin_name; ?>-url" class="regular-text" value ="<?php echo stripslashes( get_option( $this->plugin_name.'-url' ) ); ?>" />
					<p  id="<?php echo $this->plugin_name; ?>-url-description" class="description">Ping List in txt format.<br /> Leave empty to reset to default</p>	
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
				</th>
				<td>
					<input type="hidden" name="action" value="wp_ping_sites_updater_form_response">
					<?php wp_nonce_field( $this->plugin_name.'submit-list-form' ); ?>
					<input class="button button-primary" type="submit" id="<?php echo $this->plugin_name; ?>-submit" name="<?php echo $this->plugin_name; ?>-submit" value="<?php esc_attr_e('Save Settings', $this->plugin_text_domain); ?>"/>
				</td>
			</tr>
		</table>
    </form>
</div>
<?php } else { ?>
	<p><?php __("You are not authorized to perform this operation.", $this->plugin_text_domain); ?></p>
<?php  } ?>