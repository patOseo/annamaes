<?php

// Create custom Gutenberg block category for ACF Blocks
function annamaes_block_category( $categories, $post ) {
    array_unshift( $categories, array(
		'slug'	=> 'annamaes-blocks',
		'title' => 'Annamaes Blocks'
	) );

	return $categories;
}
add_filter( 'block_categories_all', 'annamaes_block_category', 1, 2);


/**
 * Registers custom ACF blocks.
 */
add_action( 'init', 'annamaes_register_acf_blocks' );
function annamaes_register_acf_blocks() {
	register_block_type( __DIR__ . '/../blocks/home-slider' );
	register_block_type( __DIR__ . '/../blocks/pdf-menu' );
	register_block_type( __DIR__ . '/../blocks/page-header' );
	register_block_type( __DIR__ . '/../blocks/menus' );
}