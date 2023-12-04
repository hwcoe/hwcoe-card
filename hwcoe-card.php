<?php
/*
Plugin Name: HWCOE Cards  
Description: Card shortcode and ACF InnerBlock
Version: 1.0.0
License: GPL  
Author: Herbert Wertheim College of Engineering  
Author URI: http://www.eng.ufl.edu  
*/

/* Enqueue assets */
add_action( 'wp_enqueue_scripts', 'hwcoe_card_styles' );
function hwcoe_card_styles() {
	wp_enqueue_style( 'hwcoe-card-style', plugins_url( 'styles.css', __FILE__ )	);
}

require_once( plugin_dir_path( __FILE__ ) . 'card-shortcode.php' );
require_once( plugin_dir_path( __FILE__ ) . 'card-block.php' );