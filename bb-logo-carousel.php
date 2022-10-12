<?php
/**
 * Plugin Name: BB Logo Carousel
 * Plugin URI: https://github.com/jacobkdavis/bb-logo-carousel
 * Description: Custom beaver builder module for a logo / brand carousel
 * Version: 1.0.1
 * Author: Jacob Davis
 * Author URI: http://jacobkdavis.com
 * GitHub Plugin URI: jacobkdavis/bb-logo-carousel
 */
define( 'BB_LOGO_CAROUSEL_DIR', plugin_dir_path( __FILE__ ) );
define( 'BB_LOGO_CAROUSEL_URL', plugins_url( '/', __FILE__ ) );

function bb_logo_carousel_load_module() {
	if ( class_exists( 'FLBuilder' ) ) {
			include('logo-carousel/logo-carousel.php');
	}
}
add_action( 'init', 'bb_logo_carousel_load_module' );
