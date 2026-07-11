<?php
/**
 * Theme setup and WordPress feature support.
 *
 * @package KySportsFoundation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Configures theme defaults and WordPress support.
 */
function kysports_foundation_setup() {
	load_theme_textdomain( 'kysports-foundation', KYSPORTS_FOUNDATION_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-line-height' );
	add_theme_support( 'custom-spacing' );
	add_theme_support( 'appearance-tools' );
	add_theme_support( 'custom-logo', array(
		'height'               => 96,
		'width'                => 320,
		'flex-height'          => true,
		'flex-width'           => true,
		'unlink-homepage-logo' => true,
	) );
	add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style', 'navigation-widgets' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'kysports-foundation' ),
			'footer'  => __( 'Footer Navigation', 'kysports-foundation' ),
		)
	);

	add_editor_style( 'assets/css/main.css' );
}
add_action( 'after_setup_theme', 'kysports_foundation_setup' );
