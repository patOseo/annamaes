<?php

// Enqueue all Google fonts

add_action( 'wp_enqueue_scripts', 'load_google_fonts' );
function load_google_fonts() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700', array(), '2.10.14' );
}