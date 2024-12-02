<?php

// Default from codex
add_action( 'wp_enqueue_scripts', 'grand_sunrise_enqueue_styles' );

function grand_sunrise_enqueue_styles() {
	wp_enqueue_style( 
		'grand-sunrise-parent-style', 
		get_parent_theme_file_uri( 'style.css' )
	);
}

require_once get_theme_file_path( 'inc/theme.php' );
