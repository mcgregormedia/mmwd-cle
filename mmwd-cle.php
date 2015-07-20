<?php
/*
Plugin Name: MMWD Custom Login Error
Plugin URI: https://mcgregormedia.co.uk/projects
Description: Change the standard WordPress login error so it doesn't reveal whetther it's the username or password that hasn't been recognised. Upload this plugin folder to the wp-content/mu-plugins directory. Create this directory in FTP with file permissions 755 if it doesn't already exist.
Version: 1.0.0
Author: McGregor Media Web Design
Author URI: https://mcgregormedia.co.uk
Requires at least: 4.2
Tested up to: 4.2.2
Copyright: © 2015 McGregor Media Web Design
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/



/**
 * Custom login errors
 */
function mmwd_custom_login_error(){
  return 'Login error: your username or password was not recognised.';
}
add_filter( 'login_errors', 'mmwd_custom_login_error' );