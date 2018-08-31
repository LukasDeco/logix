<?php
/**
 * Logix Theme Customizer
 *
 * @package Logix
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * Lukas: Adding additional settings for theme customization
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function logix_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	$wp_customize->add_section( 'logix_logo_section' , array(
    'title'       => __( 'Logo', 'logix' ),
    'priority'    => 30,
    'description' => 'Upload a logo to be displayed on the left-hand side of the header.',
	) );
	
	$wp_customize->add_setting( 'logix_logo' );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logix_logo', array(
    'label'    => __( 'Logo', 'logix' ),
    'section'  => 'logix_logo_section',
    'settings' => 'logix_logo',
	
) ) );

	$wp_customize->add_section( 'logix_contact_info_section' , array(
    'title'       => __( 'Contact Info', 'logix' ),
    'priority'    => 30,
    'description' => 'Enter the contact info that will be displayed and used on the site.',
	) );
	
	$wp_customize->add_setting( 'email_icon' );
	$wp_customize->add_setting( 'phone_icon' );
	$wp_customize->add_setting( 'street_address' );
	$wp_customize->add_setting( 'city_state_zip' );
	
	$wp_customize->add_control( 'email_icon', array(
    'label'    => __( 'Email to be displayed and used on the whole website', 'logix' ),
    'section'  => 'logix_contact_info_section',
    'settings' => 'email_icon',
	) );
	
	$wp_customize->add_control( 'phone_icon', array(
    'label'    => __( 'Phone number to be displayed and used on the whole website', 'logix' ),
    'section'  => 'logix_contact_info_section',
    'settings' => 'phone_icon',
	) );
	
	$wp_customize->add_control( 'street_address', array(
    'label'    => __( 'Street address for your HQ', 'logix' ),
    'section'  => 'logix_contact_info_section',
    'settings' => 'street_address',
	) );
	
	$wp_customize->add_control( 'city_state_zip', array(
    'label'    => __( 'City, State, and Zip in the address for your HQ', 'logix' ),
    'section'  => 'logix_contact_info_section',
    'settings' => 'city_state_zip',
	) );
	
	$wp_customize->add_section( 'logix_front_page_section' , array(
    'title'       => __( 'Home Page', 'logix' ),
    'priority'    => 30,
    'description' => 'Change Content on the Home Page',
	) );
	
	$wp_customize->add_setting( 'home_hero_image' );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_hero_image', array(
    'label'    => __( 'Hero Image', 'logix' ),
    'section'  => 'logix_front_page_section',
    'settings' => 'home_hero_image',

	) ) );

	
	
	$wp_customize->add_setting( 'main_headline' );
	
	$wp_customize->add_control( 'main_headline', array(
    'label'    => __( 'Main Headline', 'logix' ),
    'section'  => 'logix_front_page_section',
    'settings' => 'main_headline',
	) );
	
	$wp_customize->add_setting( 'sub_headline' );
	
	$wp_customize->add_control( 'sub_headline', array(
    'label'    => __( 'Sub Headline', 'logix' ),
    'section'  => 'logix_front_page_section',
    'settings' => 'sub_headline',
	) );
	
	


	
}
add_action( 'customize_register', 'logix_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function logix_customize_preview_js() {
	wp_enqueue_script( 'logix_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'logix_customize_preview_js' );
