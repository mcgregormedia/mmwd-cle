<?php
/*
Plugin Name: MMWD Custom Login Error
Plugin URI: https://mcgregormedia.co.uk/projects/mmwd-custom-login-error/
Description: Hide whether it's the username or password that is wrong on a failed login.
Version: 1.4.0
Author: McGregor Media Web Design
Author URI: https://mcgregormedia.co.uk
Requires at least: 4.2
Tested up to: 5.1
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/






function mmwd_custom_login_error_settings(){

	add_settings_field(
		'mmwd-cle',
		'Login error message',
		'mmwd_custom_login_error_message',
		'general',
		'default'
	);

	register_setting( 'general', 'mmwd-cle' );

}
add_action( 'admin_init', 'mmwd_custom_login_error_settings' );





function mmwd_custom_login_error_message(){
	
	echo '<input name="mmwd-cle" id="mmwd-cle" type="text" value="' . get_option( 'mmwd-cle' ) . '" class="widefat">';
	
}





/**
 * Custom login errors
 */
function mmwd_custom_login_error_output(){
	
	$mmwd_custom_login_error_output = ( get_option( 'mmwd-cle' ) && get_option( 'mmwd-cle' ) != '' ) ? esc_html( get_option( 'mmwd-cle' ) ) : 'Login error: username and password combination was not recognised.';
	
  return $mmwd_custom_login_error_output;
  
}
add_filter( 'login_errors', 'mmwd_custom_login_error_output' );