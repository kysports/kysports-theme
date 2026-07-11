<?php
/**
 * Theme Customizer settings.
 *
 * @package KySportsFoundation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registers theme settings in the WordPress Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
 */
function kysports_foundation_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'kysports_foundation_donations',
		array(
			'priority' => 160,
			'title'    => __( 'KySports Donation', 'kysports-foundation' ),
		)
	);

	$wp_customize->add_setting(
		'kysports_donation_url',
		array(
			'default'           => KYSPORTS_FOUNDATION_DONATION_URL,
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'kysports_donation_url',
		array(
			'label'       => __( 'Donation URL', 'kysports-foundation' ),
			'section'     => 'kysports_foundation_donations',
			'settings'    => 'kysports_donation_url',
			'type'        => 'url',
			'description' => __( 'Add the secure donation page URL used by KySports.', 'kysports-foundation' ),
		)
	);
}
add_action( 'customize_register', 'kysports_foundation_customize_register' );
