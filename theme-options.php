<?php  

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'sample_options', 'sample_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'sampletheme' ), __( 'Theme Options', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}


/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'sampletheme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'sampletheme' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'sample_options' ); ?>
			<?php $options = get_option( 'sample_theme_options' ); ?>

			<table class="form-table">

				
				<?php
				/**
				 * Text below navigation items
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Copyright statement in footer', 'sampletheme' ); ?></th>
					<td>
						<input id="sample_theme_options[copyright-statement]" class="regular-text" type="text" name="sample_theme_options[copyright-statement]" value="<?php esc_attr_e( $options['copyright-statement'] ); ?>" />
						<label class="description" for="sample_theme_options[copyright-statement]"><?php _e( '', 'sampletheme' ); ?></label>
					</td>
				</tr>
				

				
				
	
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'sampletheme' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Accepts an array, returns an array.
 */
 
function theme_options_validate( $input ) {
	return $input;
}