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
define( 'KYSPORTS_FOUNDATION_DONATION_URL', 'https://www.paypal.com/US/fundraiser/charity/5326689' );

require_once KYSPORTS_FOUNDATION_DIR . '/inc/setup.php';
require_once KYSPORTS_FOUNDATION_DIR . '/inc/enqueue.php';
require_once KYSPORTS_FOUNDATION_DIR . '/inc/customizer.php';
