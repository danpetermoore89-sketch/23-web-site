<?php
/**
 * Theme setup for the 23 Web child theme.
 *
 * @package TwentyThreeWeb
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register translations, editor styles, and the branded custom-logo size.
 *
 * @return void
 */
function twentythree_web_setup() {
	load_child_theme_textdomain( 'twentythree-web', get_stylesheet_directory() . '/languages' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 96,
			'width'       => 384,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'twentythree_web_setup', 20 );

/**
 * Register the child theme's page-pattern category.
 *
 * @return void
 */
function twentythree_web_register_pattern_categories() {
	register_block_pattern_category(
		'twentythree-web-pages',
		array(
			'label' => __( '23 Web pages', 'twentythree-web' ),
		)
	);
}
add_action( 'init', 'twentythree_web_register_pattern_categories' );
