<?php

/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function oaknut_setup() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'oaknut_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function oaknut_styles() {
	wp_enqueue_style( 'oaknut-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'oaknut' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'oaknut_styles' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK PATTERN CATEGORIES
	Register theme specific block pattern categories. The patterns themselves are stored in /patterns/.
--------------------------------------------------------------------------------------------------- */

function oaknut_register_block_patterns() {
	register_block_pattern_category( 'oaknut', array(
		'label'		=> esc_html__( 'Oaknut Patterns', 'oaknut' ),
	) );
}
add_action( 'init', 'oaknut_register_block_patterns' );


/*	-----------------------------------------------------------------------------------------------
	BLOCK STYLES
	Register theme specific block styles.
--------------------------------------------------------------------------------------------------- */

function oaknut_register_block_styles() {

	/* SHARED BLOCK STYLES */

	// These shape block styles are used by multiple blocks.
	$button_social_blocks = array( 
		'core/button',
		'core/social-links'
	);

	$button_social_block_styles = array(
		array(
			'name'  	=> 'oaknut-drop-shadow',
			'label' 	=> esc_html__( 'Drop Shadow', 'oaknut' ),
		),
		array(
			'name'  	=> 'oaknut-shape-angle',
			'label' 	=> esc_html__( 'Angle Shape', 'oaknut' ),
		),
		array(
			'name'  	=> 'oaknut-shape-bevel',
			'label' 	=> esc_html__( 'Bevel Shape', 'oaknut' ),
		),
		array(
			'name'  	=> 'oaknut-shape-rabbet',
			'label' 	=> esc_html__( 'Rabbet Shape', 'oaknut' ),
		),
	);

	foreach ( $button_social_blocks as $block_name ) {
		foreach ( $button_social_block_styles as $block_style_settings ) {
			register_block_style( $block_name, $block_style_settings );
		}
	}

	/* BLOCK: BUTTON */

	register_block_style( 'core/button', array(
		'name'  	=> 'oaknut-shape-chevron-left',
		'label' 	=> esc_html__( 'Chevron Left Shape', 'oaknut' ),
	) );

	register_block_style( 'core/button', array(
		'name'  	=> 'oaknut-shape-chevron-right',
		'label' 	=> esc_html__( 'Chevron Right Shape', 'oaknut' ),
	) );

	register_block_style( 'core/button', array(
		'name'  	=> 'oaknut-shape-pointed',
		'label' 	=> esc_html__( 'Pointed Shape', 'oaknut' ),
	) );

	register_block_style( 'core/button', array(
		'name'  	=> 'oaknut-shape-ribbon',
		'label' 	=> esc_html__( 'Ribbon Shape', 'oaknut' ),
	) );

	/* BLOCK: COVER */

	register_block_style( 'core/cover', array(
		'name'  	=> 'oaknut-space-between',
		'label' 	=> esc_html__( 'Space Between', 'oaknut' ),
	) );

	/* BLOCK: SOCIAL LINKS */

	register_block_style( 'core/social-links', array(
		'name'  	=> 'oaknut-shape-rounded',
		'label' 	=> esc_html__( 'Rounded Shape', 'oaknut' ),
	) );
	
}
add_action( 'init', 'oaknut_register_block_styles' );
