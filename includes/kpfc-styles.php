<?php

// Load This CSS on the WordPress Frontend
function kpfc_frontend_style()
{
	wp_register_style( 'kpfc-frontend', KPFC_URL . 'assets/css/kpfc-frontend.css' );
	
	wp_enqueue_style( 'kpfc-frontend' );
}
add_action( 'wp_enqueue_scripts', 'kpfc_frontend_style' );



// Load This CSS on Our Plugin Setting Page
function kpfc_admin_style( $hook )
{	
	// Define KPFC_SLUG as a PHP Constant
	define ( 'KPFC_SLUG', $hook );
	
	wp_register_style( 'kpfc-admin', KPFC_URL . 'assets/css/kpfc-backend.css');
	
	if( 'settings_page_kpfc' == KPFC_SLUG )
		wp_enqueue_style( 'kpfc-admin' );
}
add_action( 'admin_enqueue_scripts', 'kpfc_admin_style' );