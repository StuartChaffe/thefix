<?php

add_action( 'init', 'register_acf_blocks' );

function register_acf_blocks() {
	//Registers each block within the blocks folder
	foreach ( glob( get_stylesheet_directory() . '/blocks/*/' ) as $path ) {
        register_block_type( $path . 'block.json' );
    }
}
