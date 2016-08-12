<?php
/*
Plugin Name: MMWD Custom Login Error
Plugin URI: https://mcgregormedia.co.uk/projects/mmwd-custom-login-error/
Description: Change the standard WordPress login error so it doesn't reveal whether it's the username or password that hasn't been recognised.
Version: 1.0.1
Author: McGregor Media Web Design
Author URI: https://mcgregormedia.co.uk
Requires at least: 4.2
Tested up to: 4.6
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/



/**
 * Custom login errors
 */
function mmwd_custom_login_error(){
  return 'Login error: username and password combination was not recognised.';
}
add_filter( 'login_errors', 'mmwd_custom_login_error' );