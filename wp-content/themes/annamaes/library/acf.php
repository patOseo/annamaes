<?php

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Global Options');
	acf_add_options_page(array(
		'page_title' => 'Food Menus',
		'icon_url' => 'dashicons-text-page'
	));
}
