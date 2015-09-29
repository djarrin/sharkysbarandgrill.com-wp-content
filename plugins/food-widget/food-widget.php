<?php

/*
 *	Plugin Name: sharkysbarandgrill.com food widget
 *	Description: This plugin will allow for a shortcode to be put on the page that will essentially display the contents of the food page.
 *	Version: 1.0
 *	Author: David Jarrin
 *	Author URI: www.davidjarrin.com
 *	License: GPL2
 *
*/

function food_widget() {

	/*
	 * 	Use the add_options_page function
	 * 	add_options_page( $page_title, $menu_title, $capability, $menu-slug, $function ) 
	 *
	*/

	add_options_page(
		'food widget',
		'food page widget',
		'manage_options',
		'food-widget',
		'food_widgets_options_page'
	);

}

add_action( 'admin_menu', 'food_widget' );

function food_widgets_options_page() {

	if( !current_user_can( 'manage_options' ) ) {

		wp_die( 'You do not have permissions to access the food widget page.' );

	}

	echo '<p>Welcome to our plugin page!</p>';


}

?>