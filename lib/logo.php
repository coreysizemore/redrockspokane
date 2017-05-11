<?php
	
	/*
		Logo support into wordpress dashboard
	*/


	function themeslug_theme_customizer( $wp_customize ) {
	
		$wp_customize->add_section( 'themeslug_logo_section' , array(
		    'title'       => __( 'Logo Primary', 'themeslug' ),
		    'priority'    => 30,
		    'description' => 'Upload a primary logo here. Leave blank for text logo.',
		) );
		
		$wp_customize->add_setting( 'themeslug_logo' );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
		    'label'    => __( 'Logo Primary', 'themeslug' ),
		    'section'  => 'themeslug_logo_section',
		    'settings' => 'themeslug_logo',
		) ) );
		
	}
	
	add_action( 'customize_register', 'themeslug_theme_customizer' );
	
	function themeslug_theme_customizer_2( $wp_customize2 ) {
		
		$wp_customize2->add_section( 'themeslug_logo_section_2' , array(
		    'title'       => __( 'Logo Alternate', 'themeslug2' ),
		    'priority'    => 30,
		    'description' => 'Upload an alternate logo to replace default logo if the logo color doesnt work on page scroll. Leave blank for text logo.',
		) );
		
		$wp_customize2->add_setting( 'themeslug_logo_2' );
		
		$wp_customize2->add_control( new WP_Customize_Image_Control( $wp_customize2, 'themeslug_logo_2', array(
		    'label'    => __( 'Logo Alternate', 'themeslug2' ),
		    'section'  => 'themeslug_logo_section_2',
		    'settings' => 'themeslug_logo_2',
		) ) );
		
	}
	
	add_action( 'customize_register', 'themeslug_theme_customizer_2' );
	
	function themeslug_theme_customizer_3( $wp_customize3 ) {
		
		$wp_customize3->add_section( 'themeslug_logo_section_3' , array(
		    'title'       => __( 'Logo Home Page', 'themeslug3' ),
		    'priority'    => 30,
		    'description' => 'Upload the logo you want to use for the home page here. Leave blank for text logo.',
		) );
		
		$wp_customize3->add_setting( 'themeslug_logo_3' );
		
		$wp_customize3->add_control( new WP_Customize_Image_Control( $wp_customize3, 'themeslug_logo_3', array(
		    'label'    => __( 'Logo Home Page', 'themeslug3' ),
		    'section'  => 'themeslug_logo_section_3',
		    'settings' => 'themeslug_logo_3',
		) ) );
		
	}
	
	add_action( 'customize_register', 'themeslug_theme_customizer_3' );
	
	function themeslug_theme_customizer_4( $wp_customize4 ) {
		
		$wp_customize4->add_section( 'themeslug_logo_section_4' , array(
		    'title'       => __( 'Logo Footer', 'themeslug4' ),
		    'priority'    => 30,
		    'description' => 'Upload the logo you want to use for the alternative footer here. Leave blank for text logo.',
		) );
		
		$wp_customize4->add_setting( 'themeslug_logo_4' );
		
		$wp_customize4->add_control( new WP_Customize_Image_Control( $wp_customize4, 'themeslug_logo_4', array(
		    'label'    => __( 'Logo Home Page', 'themeslug4' ),
		    'section'  => 'themeslug_logo_section_4',
		    'settings' => 'themeslug_logo_4',
		) ) );
		
	}
	
	add_action( 'customize_register', 'themeslug_theme_customizer_4' );
	

?>