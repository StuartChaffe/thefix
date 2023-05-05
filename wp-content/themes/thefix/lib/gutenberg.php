<?php


/**
 * Add custom styles and colour palette
 */
function origin_gutenberg_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-style.css' );

	add_theme_support( 'disable-custom-colors' );
	add_theme_support( 'disable-custom-gradients' );

	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Primary', 'origin-colors' ),
			'slug'  => 'primary',
			'color'	=> '#A744FC',
		),
		array(
			'name'  => __( 'White', 'origin-colors' ),
			'slug'  => 'white',
			'color'	=> '#fff',
		),
		array(
			'name'  => __( 'Black', 'origin-colors' ),
			'slug'  => 'black',
			'color'	=> '#000',
		),
	) );
}
add_action( 'after_setup_theme', 'origin_gutenberg_setup' );



/**
 * Remove Gutenberg styling - Uncomment this add_action if you want to remove styles
 */
function origin_deregister_styles() {
	if ( !is_admin() ) {
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'wc-block-style' );
	}
}
// add_action( 'wp_enqueue_scripts', 'origin_deregister_styles', 100);
