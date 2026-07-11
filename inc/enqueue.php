<?php
/**
 * Front-end asset loading.
 *
 * @package KySportsFoundation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueues theme styles and scripts.
 */
function kysports_foundation_enqueue_assets() {
	$main_css = KYSPORTS_FOUNDATION_DIR . '/assets/css/main.css';
	$app_js   = KYSPORTS_FOUNDATION_DIR . '/assets/js/app.js';

	wp_enqueue_style(
		'kysports-foundation-main',
		KYSPORTS_FOUNDATION_URI . '/assets/css/main.css',
		array(),
		file_exists( $main_css ) ? (string) filemtime( $main_css ) : KYSPORTS_FOUNDATION_VERSION
	);

	wp_enqueue_script(
		'kysports-foundation-app',
		KYSPORTS_FOUNDATION_URI . '/assets/js/app.js',
		array(),
		file_exists( $app_js ) ? (string) filemtime( $app_js ) : KYSPORTS_FOUNDATION_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'kysports_foundation_enqueue_assets' );
