<?php

add_action( 'init', 'register_acf_blocks' );

function register_acf_blocks() {
	//Registers each block within the blocks folder
	foreach ( glob( get_stylesheet_directory() . '/blocks/*/' ) as $path ) {
        register_block_type( $path . 'block.json' );
    }
}

// Create custom category
add_filter( 'block_categories_all', 'block_categories', 10, 2 );
function block_categories( $categories, $post )
{
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'thefix',
				'title' => __( 'thefix Custom Blocks', 'thefix-master' ),
			),
		)
	);
}

// Allow blocks
add_filter( 'allowed_block_types_all', 'allowed_block_types' );
function allowed_block_types( $allowed_blocks ) {

	return array(
		// 'acf/accordion',
		// 'acf/banner',
		'acf/content',
		'acf/cta',
		'acf/guests',
		// 'acf/form',
		'acf/news',
		'acf/news-featured',
		// 'acf/featured-programmes',
		// 'acf/featured-events',
		// 'acf/featured-resources',
		// 'acf/events',
		// 'acf/programmes',
		// 'acf/resources',
		'acf/video',

		'core/columns',
		'core/paragraph',
		'core/heading',
		'core/buttons',
		'core/button',
		'core/list',
		'core/image',
		'core/gallery',
		'core/separator',
		// 'core/embed',
		'core/spacer',
		'core/shortcode',
		// 'core/youtube',
		'core/html',
	);

}
