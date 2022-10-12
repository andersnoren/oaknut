<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function acorn_setup() {

	add_theme_support( 'wp-block-styles' );

	add_editor_style( 'style.css' );

}
add_action( 'after_setup_theme', 'acorn_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function acorn_styles() {

	wp_enqueue_style( 'acorn-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'acorn' )->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'acorn_styles' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK STYLES
	Register theme specific block styles.
--------------------------------------------------------------------------------------------------- */

function acorn_register_block_styles() {

	// Button: Shadow
	register_block_style( 'core/button', array(
		'name'  	=> 'acorn-shadow',
		'label' 	=> esc_html__( 'Drop Shadow', 'poe' ),
	) );
	
}
add_action( 'init', 'acorn_register_block_styles' );
