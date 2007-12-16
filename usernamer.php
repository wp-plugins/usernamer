<?
/*
Plugin Name: UserNamer
Version: 1.0
Plugin URI: mailto:maxi-cx75@gmail.com
Description: Allows you to rename users - only for advanced administrators!
Author: maXi
Author URI: http://www.allejaja.yoyo.pl
*/



load_plugin_textdomain(USERNAMER_DOMAIN, 'wp-content/plugins/usernamer');

add_action( 'admin_menu', 'usernamer_add_menu_option' );

function usernamer_add_menu_option() {
	add_submenu_page( 'users.php', __('Rename user', USERNAMER_DOMAIN), __('Rename user', USERNAMER_DOMAIN), 'edit_users', 'users.php?page=usernamer/form.php' );
}

?>
