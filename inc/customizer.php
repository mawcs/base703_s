<?php
/**
 * base703_s Theme Customizer.
 *
 * @package base703_s
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function base703_s_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->add_setting( 'logo' ); // Add setting for logo uploader

	// Add control for logo uploader (actual uploader)
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
			'label'    => __( 'Upload Logo (replaces text, 125x125 pixels recommended)', 'base703_s' ),
			'section'  => 'title_tagline',
			'settings' => 'logo',
	) ) );
}
add_action( 'customize_register', 'base703_s_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function base703_s_customize_preview_js() {
	wp_enqueue_script( 'base703_s_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'base703_s_customize_preview_js' );



?>