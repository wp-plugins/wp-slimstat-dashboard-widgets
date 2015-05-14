<?php
/*
Plugin Name: WP SlimStat Dashboard Widgets
Plugin URI: http://wordpress.org/plugins/wp-slimstat-dashboard-widgets/
Description: This plugin has been discontinued. Dashboard widgets are now available directly in Slimstat 4.0
Version: 3.2
Author: Camu
Author URI: http://slimstat.getused.to.it
*/

function wp_slimstat_dashboard_widgets_discontinued(){
	echo '<div class="updated slimstat-notice" style="padding:10px"><span>WP Slimstat Dashboard Widgets add-on has been discontinued. Its functionality is now available directly in Slimstat 4.0. Please uninstall the add-on to make this message disappear.</span></div>';
}
add_action('admin_notices', 'wp_slimstat_dashboard_widgets_discontinued', 10);