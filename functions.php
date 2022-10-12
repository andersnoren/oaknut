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
		'name'  	=> 'acorn-button-shadow',
		'label' 	=> esc_html__( 'Drop Shadow', 'acorn' ),
	) );

	// Button: Shape: Angle
	register_block_style( 'core/button', array(
		'name'  	=> 'acorn-button-shape-angle',
		'label' 	=> esc_html__( 'Shape: Angle', 'acorn' ),
	) );

	// Button: Shape: Bevel
	register_block_style( 'core/button', array(
		'name'  	=> 'acorn-button-shape-bevel',
		'label' 	=> esc_html__( 'Shape: Bevel', 'acorn' ),
	) );

	// Button: Shape: Chevron Left
	register_block_style( 'core/button', array(
		'name'  	=> 'acorn-button-shape-chevron-left',
		'label' 	=> esc_html__( 'Shape: Chevron Left', 'acorn' ),
	) );

	// Button: Shape: Chevron Right
	register_block_style( 'core/button', array(
		'name'  	=> 'acorn-button-shape-chevron-right',
		'label' 	=> esc_html__( 'Shape: Chevron Right', 'acorn' ),
	) );

	// Button: Shape: Pointed
	register_block_style( 'core/button', array(
		'name'  	=> 'acorn-button-shape-pointed',
		'label' 	=> esc_html__( 'Shape: Pointed', 'acorn' ),
	) );

	// Button: Shape: Rabbet
	register_block_style( 'core/button', array(
		'name'  	=> 'acorn-button-shape-rabbet',
		'label' 	=> esc_html__( 'Shape: Rabbet', 'acorn' ),
	) );

	// Button: Shape: Ribbon
	register_block_style( 'core/button', array(
		'name'  	=> 'acorn-button-shape-ribbon',
		'label' 	=> esc_html__( 'Shape: Ribbon', 'acorn' ),
	) );

	
}
add_action( 'init', 'acorn_register_block_styles' );
