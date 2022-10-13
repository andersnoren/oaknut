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
	BLOCK PATTERN CATEGORIES
	Register theme specific block pattern categories. The patterns themselves are stored in /patterns/.
--------------------------------------------------------------------------------------------------- */

function acorn_register_block_patterns() {

	register_block_pattern_category( 'acorn', array(
		'label'		=> esc_html__( 'Acorn Patterns', 'acorn' ),
	) );

}
add_action( 'init', 'acorn_register_block_patterns' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK STYLES
	Register theme specific block styles.
--------------------------------------------------------------------------------------------------- */

function acorn_register_block_styles() {

	/* SHARED BLOCK STYLES */

	// These shape block styles are used by multiple blocks.
	$button_social_blocks = array( 
		'core/button',
		'core/social-links'
	);

	$button_social_block_styles = array(
		array(
			'name'  	=> 'acorn-drop-shadow',
			'label' 	=> esc_html__( 'Drop Shadow', 'acorn' ),
		),
		array(
			'name'  	=> 'acorn-shape-angle',
			'label' 	=> esc_html__( 'Angle Shape', 'acorn' ),
		),
		array(
			'name'  	=> 'acorn-shape-bevel',
			'label' 	=> esc_html__( 'Bevel Shape', 'acorn' ),
		),
		array(
			'name'  	=> 'acorn-shape-rabbet',
			'label' 	=> esc_html__( 'Rabbet Shape', 'acorn' ),
		),
	);

	foreach ( $button_social_blocks as $block_name ) {
		foreach ( $button_social_block_styles as $block_style_settings ) {
			register_block_style( $block_name, $block_style_settings );
		}
	}

	/* BLOCK: BUTTON */

	register_block_style( 'core/button', array(
		'name'  	=> 'acorn-shape-chevron-left',
		'label' 	=> esc_html__( 'Chevron Left Shape', 'acorn' ),
	) );

	register_block_style( 'core/button', array(
		'name'  	=> 'acorn-shape-chevron-right',
		'label' 	=> esc_html__( 'Chevron Right Shape', 'acorn' ),
	) );

	register_block_style( 'core/button', array(
		'name'  	=> 'acorn-shape-pointed',
		'label' 	=> esc_html__( 'Pointed Shape', 'acorn' ),
	) );

	register_block_style( 'core/button', array(
		'name'  	=> 'acorn-shape-ribbon',
		'label' 	=> esc_html__( 'Ribbon Shape', 'acorn' ),
	) );

	/* BLOCK: COVER */

	register_block_style( 'core/cover', array(
		'name'  	=> 'acorn-space-between',
		'label' 	=> esc_html__( 'Space Between', 'acorn' ),
	) );

	/* BLOCK: SOCIAL LINKS */

	register_block_style( 'core/social-links', array(
		'name'  	=> 'acorn-shape-rounded',
		'label' 	=> esc_html__( 'Rounded Shape', 'acorn' ),
	) );
	
}
add_action( 'init', 'acorn_register_block_styles' );
