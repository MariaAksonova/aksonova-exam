<?php
/**
 * aksonova-exam Theme Customizer
 *
 * @package aksonova-exam
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function aksonova_exam_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->add_setting('phone', array( 'default'=> '0000000'));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone', array(
        'label'      => __( 'Phone number', '_' ),
        'section'    => 'title_tagline',
        'settings'   => 'phone',
    )));
    $wp_customize->add_setting('address', array( 'default'=> ''));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'address', array(
        'label'      => __( 'Address', '_' ),
        'section'    => 'title_tagline',
        'settings'   => 'address',
    )));
}
add_action( 'customize_register', 'aksonova_exam_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function aksonova_exam_customize_preview_js() {
	wp_enqueue_script( 'aksonova_exam_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'aksonova_exam_customize_preview_js' );
