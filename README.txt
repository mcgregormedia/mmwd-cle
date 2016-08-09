=== MMWD Custom Login Error ===
Contributors: mcgregormedia
Requires at least: 4.2
Tested up to: 4.6
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Change the standard WordPress login error so it doesn\'t reveal whether it\'s the username or password that hasn\'t been recognised.

== Description ==
Change the standard WordPress login error so it doesn\'t reveal whether it\'s the username or password that hasn\'t been recognised.

== Installation ==
Upload the mmwd-cle folder to the wp-content/plugins directory then activate the plugin in Plugins > Installed Plugins.

For maximum security, upload this plugin to the wp-content/mu-plugins directory instead. This will ensure the plugin cannot be deactivated unless it is deleted from the mu-plugins directory. Using FTP, create a mu-plugins directory with file permissions 755 in the wp-content directory if it doesn\'t already exist. Upload the mmw-cle plugin directory to wp-content/mu-plugins, then move mmwd-cle.php out of the mmwd-cle directory and into the directory folder. The plugin will be automatically activated.

== Changelog ==
1.0.1 09-08-2016
UPDATED: Tested up to WordPress 4.6
UPDATED: Login error message
REMOVED: ReadMe.md
ADDED: ReadMe.txt

1.0.0 17-07-2015
Initial release