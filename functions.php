<?php
/**
 * KySports Foundation theme bootstrap.
 *
 * @package KySportsFoundation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'KYSPORTS_FOUNDATION_VERSION', '0.1.0' );
define( 'KYSPORTS_FOUNDATION_DIR', get_template_directory() );
define( 'KYSPORTS_FOUNDATION_URI', get_template_directory_uri() );

require_once KYSPORTS_FOUNDATION_DIR . '/inc/setup.php';
require_once KYSPORTS_FOUNDATION_DIR . '/inc/enqueue.php';
