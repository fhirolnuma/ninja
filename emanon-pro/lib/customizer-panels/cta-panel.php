<?php
/**
* Theme Emanon Pro Customizer Cta Panel
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Cta Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_cta_settings', array(
	'priority' => 60,
	'capability' => 'edit_theme_options',
	'title' => __( 'CTA settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Display Cta Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_display_options', array (
			'title' => __( 'Display cta option', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_cta_settings',
		) );

			// Display CTA single
			$wp_customize->add_setting( 'display_cta_single', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_single', array(
				'label'	 => __( 'Display single cta', 'emanon' ),
				'section' => 'emanon_cta_display_options',
				'settings' => 'display_cta_single',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Display CTA page
			$wp_customize->add_setting( 'display_cta_page', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_potential', array(
				'label'	 => __( 'Display page cta', 'emanon' ),
				'section' => 'emanon_cta_display_options',
				'settings' => 'display_cta_page',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Display cta footer section front page
			$wp_customize->add_setting( 'display_cta_footer_section_frontpage', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_footer_section_frontpage', array(
				'label'	 => __( 'Display footer cta on front page', 'emanon' ),
				'section' => 'emanon_cta_display_options',
				'settings' => 'display_cta_footer_section_frontpage',
				'type' => 'checkbox',
				'priority' => 3,
			) );

			// Display cta footer section page & single
			$wp_customize->add_setting( 'display_cta_footer_section_page_single', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_footer_section_page_single', array(
				'label'	 => __( 'Display footer cta on page & single', 'emanon' ),
				'section' => 'emanon_cta_display_options',
				'settings' => 'display_cta_footer_section_page_single',
				'type' => 'checkbox',
				'priority' => 4,
			) );

			// Display cta footer section archive
			$wp_customize->add_setting( 'display_cta_footer_section_archive', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_footer_section_archive', array(
				'label'	 => __( 'Display footer cta on archive', 'emanon' ),
				'section' => 'emanon_cta_display_options',
				'settings' => 'display_cta_footer_section_archive',
				'type' => 'checkbox',
				'priority' => 5,
			) );

			// Display cta popup front page
			$wp_customize->add_setting( 'display_cta_popup_frontpage', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_popup_frontpage', array(
				'label'	 => __( 'Display popup cta on front page', 'emanon' ),
				'section' => 'emanon_cta_display_options',
				'settings' => 'display_cta_popup_frontpage',
				'type' => 'checkbox',
				'priority' => 6,
			) );

			// Display cta popup single
			$wp_customize->add_setting( 'display_cta_popup_single', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_popup_single', array(
				'label'	 => __( 'Display popup cta on single', 'emanon' ),
				'section' => 'emanon_cta_display_options',
				'settings' => 'display_cta_popup_single',
				'type' => 'checkbox',
				'priority' => 7,
			) );

			// Display cta popup page
			$wp_customize->add_setting( 'display_cta_popup_page', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_popup_page', array(
				'label'	 => __( 'Display popup cta on page', 'emanon' ),
				'section' => 'emanon_cta_display_options',
				'settings' => 'display_cta_popup_page',
				'type' => 'checkbox',
				'priority' => 8,
			) );

			// Display cta popup archive
			$wp_customize->add_setting( 'display_cta_popup_archive', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_popup_archive', array(
				'label'	 => __( 'Display popup cta on archive', 'emanon' ),
				'section' => 'emanon_cta_display_options',
				'settings' => 'display_cta_popup_archive',
				'type' => 'checkbox',
				'priority' => 9,
			) );

			// Display cta popup mobile
			$wp_customize->add_setting( 'display_cta_popup_mobile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_popup_mobile', array(
				'label'	 => __( 'Display popup cta on smartphone & tablet', 'emanon' ),
				'section' => 'emanon_cta_display_options',
				'settings' => 'display_cta_popup_mobile',
				'type' => 'checkbox',
				'priority' => 10,
			) );

		/*------------------------------------------------------------------------------------
		/* Calls to Action For Common Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_common_options', array (
			'title' => __( 'Calls to action for common option', 'emanon' ),
			'priority' => 2,
			'panel' => 'emanon_cta_settings',
		) );

			// CTA layout type
			$wp_customize->add_setting( 'cta_common_layout_type', array(
				'default' => 'cta_post_left',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_cta_post_layout_type',
			) );
			$wp_customize->add_control( 'cta_common_layout_type', array(
				'label' => __( 'CTA layout type', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_layout_type',
				'type' => 'radio',
				'choices' => array(
					'cta_post_left' => __( 'CTA left layout', 'emanon' ),
					'cta_post_center' => __( 'CTA center layout', 'emanon' ),
					'cta_post_right' => __( 'CTA right layout', 'emanon' ),
					),
				'priority' => 1,
			) );

			// CTA common image
			$wp_customize->add_setting( 'cta_common_image', array(
				'default' => '',
				'sanitize_callback' => 'emanon_customize_sanitize_image_url',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cta_common_image', array (
				'label' => __( 'CTA image', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_image',
				'priority' => 2,
			) ) );

			// CTA common title
			$wp_customize->add_setting( 'cta_common_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_common_title', array(
				'label' => __( 'CTA title', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_title',
				'type' => 'text',
				'priority' => 3,
			) );

			// CTA common text
			$wp_customize->add_setting( 'cta_common_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'cta_common_text', array(
				'label' => __( 'CTA text', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_text',
				'priority' => 4,
			) ) );

			// CTA common btn url
			$wp_customize->add_setting( 'cta_common_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_url',
			) );
			$wp_customize->add_control( 'cta_common_btn_url', array(
				'label' => __( 'CTA button url', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_btn_url',
				'type' => 'url',
				'priority' => 5,
			) );

			// CTA common btn text
			$wp_customize->add_setting( 'cta_common_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_common_btn_text', array(
				'label' => __( 'CTA button text', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_btn_text',
				'type' => 'text',
				'priority' => 6,
			) );

			// CTA contact form7
			$wp_customize->add_setting( 'cta_common_contactform7', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_common_contactform7', array(
				'label' => __( 'CTA Contact Form7', 'emanon' ),
				'description' => __( 'Input short code example [contact-form-7 id="XXXX" title="XXXXX"]', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_contactform7',
				'type' => 'text',
				'priority' => 7,
			) );

			// CTA common background color
			$wp_customize->add_setting( 'cta_common_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_common_background_color', array(
				'label' => __( 'CTA background color', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_background_color',
				'priority' => 8,
			) ) );

			// CTA common title color
			$wp_customize->add_setting( 'cta_common_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_common_title_color', array(
				'label' => __( 'CTA title color', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_title_color',
				'priority' => 9,
			) ) );

			// CTA common text color
			$wp_customize->add_setting( 'cta_common_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_common_text_color', array(
				'label' => __( 'CTA text color', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_text_color',
				'priority' => 10,
			) ) );

			// CTA common button background color
			$wp_customize->add_setting( 'cta_common_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_common_btn_background_color', array(
				'label' => __( 'CTA button background color', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_btn_background_color',
				'priority' => 11,
			) ) );

			// CTA common button text color
			$wp_customize->add_setting( 'cta_common_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_common_btn_text_color', array(
				'label' => __( 'CTA button text color', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_btn_text_color',
				'priority' => 12,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Calls to Action for Potential Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_potential_options', array (
			'title' => __( 'Calls to action for potential option', 'emanon' ),
			'priority' => 3,
			'panel' => 'emanon_cta_settings',
		) );

			// CTA layout type
			$wp_customize->add_setting( 'cta_potential_layout_type', array(
				'default' => 'cta_post_left',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_cta_post_layout_type',
			) );
			$wp_customize->add_control( 'cta_potential_layout_type', array(
				'label' => __( 'CTA layout type', 'emanon' ),
				'section' => 'emanon_cta_potential_options',
				'settings' => 'cta_potential_layout_type',
				'type' => 'radio',
				'choices' => array(
					'cta_post_left' => __( 'CTA left layout', 'emanon' ),
					'cta_post_center' => __( 'CTA center layout', 'emanon' ),
					'cta_post_right' => __( 'CTA right layout', 'emanon' ),
					),
				'priority' => 1,
			) );

			// CTA potential image
			$wp_customize->add_setting( 'cta_potential_image', array(
				'default' => '',
				'sanitize_callback' => 'emanon_customize_sanitize_image_url',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cta_potential_image', array (
				'label' => __( 'CTA image', 'emanon' ),
				'section' => 'emanon_cta_potential_options',
				'settings' => 'cta_potential_image',
				'priority' => 2,
			) ) );

			// CTA potential title
			$wp_customize->add_setting( 'cta_potential_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_potential_title', array(
				'label' => __( 'CTA title', 'emanon' ),
				'section' => 'emanon_cta_potential_options',
				'settings' => 'cta_potential_title',
				'type' => 'text',
				'priority' => 3,
			) );

			// CTA potential text
			$wp_customize->add_setting( 'cta_potential_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'cta_potential_text', array(
				'label' => __( 'CTA text', 'emanon' ),
				'section' => 'emanon_cta_potential_options',
				'settings' => 'cta_potential_text',
				'priority' => 4,
			) ) );

			// CTA potential btn url
			$wp_customize->add_setting( 'cta_potential_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_url',
			) );
			$wp_customize->add_control( 'cta_potential_btn_url', array(
				'label' => __( 'CTA button url', 'emanon' ),
				'section' => 'emanon_cta_potential_options',
				'settings' => 'cta_potential_btn_url',
				'type' => 'url',
				'priority' => 5,
			) );

			// CTA potential btn text
			$wp_customize->add_setting( 'cta_potential_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_potential_btn_text', array(
				'label' => __( 'CTA button text', 'emanon' ),
				'section' => 'emanon_cta_potential_options',
				'settings' => 'cta_potential_btn_text',
				'type' => 'text',
				'priority' => 6,
			) );

			// CTA contact form7
			$wp_customize->add_setting( 'cta_potential_contactform7', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_potential_contactform7', array(
				'label' => __( 'CTA Contact Form7', 'emanon' ),
				'description' => __( 'Input short code example [contact-form-7 id="XXXX" title="XXXXX"]', 'emanon' ),
				'section' => 'emanon_cta_potential_options',
				'settings' => 'cta_potential_contactform7',
				'type' => 'text',
				'priority' => 7,
			) );

			// CTA potential background color
			$wp_customize->add_setting( 'cta_a_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_a_background_color', array(
				'label' => __( 'CTA background color', 'emanon' ),
				'section' => 'emanon_cta_potential_options',
				'settings' => 'cta_a_background_color',
				'priority' => 8,
			) ) );

			// CTA potential title color
			$wp_customize->add_setting( 'cta_a_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_a_title_color', array(
				'label' => __( 'CTA title color', 'emanon' ),
				'section' => 'emanon_cta_potential_options',
				'settings' => 'cta_a_title_color',
				'priority' => 9,
			) ) );

			// CTA potential text color
			$wp_customize->add_setting( 'cta_a_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_a_text_color', array(
				'label' => __( 'CTA text color', 'emanon' ),
				'section' => 'emanon_cta_potential_options',
				'settings' => 'cta_a_text_color',
				'priority' => 10,
			) ) );

			// CTA potential button background color
			$wp_customize->add_setting( 'cta_a_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_a_btn_background_color', array(
				'label' => __( 'CTA button background color', 'emanon' ),
				'section' => 'emanon_cta_potential_options',
				'settings' => 'cta_a_btn_background_color',
				'priority' => 11,
			) ) );

			// CTA potential button text color
			$wp_customize->add_setting( 'cta_a_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_a_btn_text_color', array(
				'label' => __( 'CTA button text color', 'emanon' ),
				'section' => 'emanon_cta_potential_options',
				'settings' => 'cta_a_btn_text_color',
				'priority' => 12,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Calls to Action for Eventually Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_eventually_options', array (
			'title' => __( 'Calls to action for eventually option', 'emanon' ),
			'priority' => 4,
			'panel' => 'emanon_cta_settings',
		) );

			// CTA layout type
			$wp_customize->add_setting( 'cta_eventually_layout_type', array(
				'default' => 'cta_post_left',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_cta_post_layout_type',
			) );
			$wp_customize->add_control( 'cta_eventually_layout_type', array(
				'label' => __( 'CTA layout type', 'emanon' ),
				'section' => 'emanon_cta_eventually_options',
				'settings' => 'cta_eventually_layout_type',
				'type' => 'radio',
				'choices' => array(
					'cta_post_left' => __( 'CTA left layout', 'emanon' ),
					'cta_post_center' => __( 'CTA center layout', 'emanon' ),
					'cta_post_right' => __( 'CTA right layout', 'emanon' ),
					),
				'priority' => 1,
			) );

			// CTA eventually image
			$wp_customize->add_setting( 'cta_eventually_image', array(
				'default' => '',
				'sanitize_callback' => 'emanon_customize_sanitize_image_url',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cta_eventually_image', array (
				'label' => __( 'CTA image', 'emanon' ),
				'section' => 'emanon_cta_eventually_options',
				'settings' => 'cta_eventually_image',
				'priority' => 2,
			) ) );

			// CTA eventually title
			$wp_customize->add_setting( 'cta_eventually_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_eventually_title', array(
				'label' => __( 'CTA title', 'emanon' ),
				'section' => 'emanon_cta_eventually_options',
				'settings' => 'cta_eventually_title',
				'type' => 'text',
				'priority' => 3,
			) );

			// CTA eventually text
			$wp_customize->add_setting( 'cta_eventually_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'cta_eventually_text', array(
				'label' => __( 'CTA text', 'emanon' ),
				'section' => 'emanon_cta_eventually_options',
				'settings' => 'cta_eventually_text',
				'priority' => 4,
			) ) );

			// CTA eventually btn url
			$wp_customize->add_setting( 'cta_eventually_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_url',
			) );
			$wp_customize->add_control( 'cta_eventually_btn_url', array(
				'label' => __( 'CTA button url', 'emanon' ),
				'section' => 'emanon_cta_eventually_options',
				'settings' => 'cta_eventually_btn_url',
				'type' => 'url',
				'priority' => 5,
			) );

			// CTA eventually btn text
			$wp_customize->add_setting( 'cta_eventually_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_eventually_btn_text', array(
				'label' => __( 'CTA button text', 'emanon' ),
				'section' => 'emanon_cta_eventually_options',
				'settings' => 'cta_eventually_btn_text',
				'type' => 'text',
				'priority' => 6,
			) );

			// CTA contact form7
			$wp_customize->add_setting( 'cta_eventually_contactform7', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_eventually_contactform7', array(
				'label' => __( 'CTA Contact Form7', 'emanon' ),
				'description' => __( 'Input short code example [contact-form-7 id="XXXX" title="XXXXX"]', 'emanon' ),
				'section' => 'emanon_cta_eventually_options',
				'settings' => 'cta_eventually_contactform7',
				'type' => 'text',
				'priority' => 7,
			) );

			// CTA eventually background color
			$wp_customize->add_setting( 'cta_b_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_b_background_color', array(
				'label' => __( 'CTA background color', 'emanon' ),
				'section' => 'emanon_cta_eventually_options',
				'settings' => 'cta_b_background_color',
				'priority' => 8,
			) ) );

			// CTA eventually title color
			$wp_customize->add_setting( 'cta_b_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_b_title_color', array(
				'label' => __( 'CTA title color', 'emanon' ),
				'section' => 'emanon_cta_eventually_options',
				'settings' => 'cta_b_title_color',
				'priority' => 9,
			) ) );

			// CTA eventually text color
			$wp_customize->add_setting( 'cta_b_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_b_text_color', array(
				'label' => __( 'CTA text color', 'emanon' ),
				'section' => 'emanon_cta_eventually_options',
				'settings' => 'cta_b_text_color',
				'priority' => 10,
			) ) );

			// CTA eventually button background color
			$wp_customize->add_setting( 'cta_b_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_b_btn_background_color', array(
				'label' => __( 'CTA button background color', 'emanon' ),
				'section' => 'emanon_cta_eventually_options',
				'settings' => 'cta_b_btn_background_color',
				'priority' => 11,
			) ) );

			// CTA eventually button text color
			$wp_customize->add_setting( 'cta_b_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_b_btn_text_color', array(
				'label' => __( 'CTA button text color', 'emanon' ),
				'section' => 'emanon_cta_eventually_options',
				'settings' => 'cta_b_btn_text_color',
				'priority' => 12,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Calls to Action for Compare Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_compare_options', array (
			'title' => __( 'Calls to action for compare option', 'emanon' ),
			'priority' => 5,
			'panel' => 'emanon_cta_settings',
		) );

			// CTA layout type
			$wp_customize->add_setting( 'cta_compare_layout_type', array(
				'default' => 'cta_post_left',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_cta_post_layout_type',
			) );
			$wp_customize->add_control( 'cta_compare_layout_type', array(
				'label' => __( 'CTA layout type', 'emanon' ),
				'section' => 'emanon_cta_compare_options',
				'settings' => 'cta_compare_layout_type',
				'type' => 'radio',
				'choices' => array(
					'cta_post_left' => __( 'CTA left layout', 'emanon' ),
					'cta_post_center' => __( 'CTA center layout', 'emanon' ),
					'cta_post_right' => __( 'CTA right layout', 'emanon' ),
					),
				'priority' => 1,
			) );

			// CTA compare image
			$wp_customize->add_setting( 'cta_compare_image', array(
				'default' => '',
				'sanitize_callback' => 'emanon_customize_sanitize_image_url',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cta_compare_image', array (
				'label' => __( 'CTA image', 'emanon' ),
				'section' => 'emanon_cta_compare_options',
				'settings' => 'cta_compare_image',
				'priority' => 2,
			) ) );

			// CTA compare title
			$wp_customize->add_setting( 'cta_compare_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_compare_title', array(
				'label' => __( 'CTA title', 'emanon' ),
				'section' => 'emanon_cta_compare_options',
				'settings' => 'cta_compare_title',
				'type' => 'text',
				'priority' => 3,
			) );

			// CTA compare text
			$wp_customize->add_setting( 'cta_compare_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'cta_compare_text', array(
				'label' => __( 'CTA text', 'emanon' ),
				'section' => 'emanon_cta_compare_options',
				'settings' => 'cta_compare_text',
				'priority' => 4,
			) ) );

			// CTA compare btn url
			$wp_customize->add_setting( 'cta_compare_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_url',
			) );
			$wp_customize->add_control( 'cta_compare_btn_url', array(
				'label' => __( 'CTA button url', 'emanon' ),
				'section' => 'emanon_cta_compare_options',
				'settings' => 'cta_compare_btn_url',
				'type' => 'url',
				'priority' => 5,
			) );

			// CTA compare btn text
			$wp_customize->add_setting( 'cta_compare_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_compare_btn_text', array(
				'label' => __( 'CTA button text', 'emanon' ),
				'section' => 'emanon_cta_compare_options',
				'settings' => 'cta_compare_btn_text',
				'type' => 'text',
				'priority' => 6,
			) );

			// CTA contact form7
			$wp_customize->add_setting( 'cta_compare_contactform7', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_compare_contactform7', array(
				'label' => __( 'CTA Contact Form7', 'emanon' ),
				'description' => __( 'Input short code example [contact-form-7 id="XXXX" title="XXXXX"]', 'emanon' ),
				'section' => 'emanon_cta_compare_options',
				'settings' => 'cta_compare_contactform7',
				'type' => 'text',
				'priority' => 7,
			) );

			// CTA compare background color
			$wp_customize->add_setting( 'cta_c_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_c_background_color', array(
				'label' => __( 'CTA background color', 'emanon' ),
				'section' => 'emanon_cta_compare_options',
				'settings' => 'cta_c_background_color',
				'priority' => 8,
			) ) );

			// CTA compare title color
			$wp_customize->add_setting( 'cta_c_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_c_title_color', array(
				'label' => __( 'CTA title color', 'emanon' ),
				'section' => 'emanon_cta_compare_options',
				'settings' => 'cta_c_title_color',
				'priority' => 9,
			) ) );

			// CTA compare text color
			$wp_customize->add_setting( 'cta_c_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_c_text_color', array(
				'label' => __( 'CTA text color', 'emanon' ),
				'section' => 'emanon_cta_compare_options',
				'settings' => 'cta_c_text_color',
				'priority' => 10,
			) ) );

			// CTA compare button background color
			$wp_customize->add_setting( 'cta_c_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_c_btn_background_color', array(
				'label' => __( 'CTA button background color', 'emanon' ),
				'section' => 'emanon_cta_compare_options',
				'settings' => 'cta_c_btn_background_color',
				'priority' => 11,
			) ) );

			// CTA compare button text color
			$wp_customize->add_setting( 'cta_c_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_c_btn_text_color', array(
				'label' => __( 'CTA button text color', 'emanon' ),
				'section' => 'emanon_cta_compare_options',
				'settings' => 'cta_c_btn_text_color',
				'priority' => 12,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Calls to Action for Prospect Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_prospect_options', array (
			'title' => __( 'Calls to action for prospect option', 'emanon' ),
			'priority' => 6,
			'panel' => 'emanon_cta_settings',
		) );

			// CTA layout type
			$wp_customize->add_setting( 'cta_prospect_layout_type', array(
				'default' => 'cta_post_left',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_cta_post_layout_type',
			) );
			$wp_customize->add_control( 'cta_prospect_layout_type', array(
				'label' => __( 'CTA layout type', 'emanon' ),
				'section' => 'emanon_cta_prospect_options',
				'settings' => 'cta_prospect_layout_type',
				'type' => 'radio',
				'choices' => array(
					'cta_post_left' => __( 'CTA left layout', 'emanon' ),
					'cta_post_center' => __( 'CTA center layout', 'emanon' ),
					'cta_post_right' => __( 'CTA right layout', 'emanon' ),
					),
				'priority' => 1,
			) );

			// CTA prospect image
			$wp_customize->add_setting( 'cta_prospect_image', array(
				'default' => '',
				'sanitize_callback' => 'emanon_customize_sanitize_image_url',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cta_prospect_image', array (
				'label' => __( 'CTA image', 'emanon' ),
				'section' => 'emanon_cta_prospect_options',
				'settings' => 'cta_prospect_image',
				'priority' => 2,
			) ) );

			// CTA prospect title
			$wp_customize->add_setting( 'cta_prospect_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_prospect_title', array(
				'label' => __( 'CTA title', 'emanon' ),
				'section' => 'emanon_cta_prospect_options',
				'settings' => 'cta_prospect_title',
				'type' => 'text',
				'priority' => 3,
			) );

			// CTA prospect text
			$wp_customize->add_setting( 'cta_prospect_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'cta_prospect_text', array(
				'label' => __( 'CTA text', 'emanon' ),
				'section' => 'emanon_cta_prospect_options',
				'settings' => 'cta_prospect_text',
				'priority' => 4,
			) ) );

			// CTA prospect btn url
			$wp_customize->add_setting( 'cta_prospect_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_url',
			) );
			$wp_customize->add_control( 'cta_prospect_btn_url', array(
				'label' => __( 'CTA button url', 'emanon' ),
				'section' => 'emanon_cta_prospect_options',
				'settings' => 'cta_prospect_btn_url',
				'type' => 'url',
				'priority' => 5,
			) );

			// CTA prospect btn text
			$wp_customize->add_setting( 'cta_prospect_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_prospect_btn_text', array(
				'label' => __( 'CTA button text', 'emanon' ),
				'section' => 'emanon_cta_prospect_options',
				'settings' => 'cta_prospect_btn_text',
				'type' => 'text',
				'priority' => 6,
			) );

			// CTA contact form7
			$wp_customize->add_setting( 'cta_prospect_contactform7', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_prospect_contactform7', array(
				'label' => __( 'CTA Contact Form7', 'emanon' ),
				'description' => __( 'Input short code example [contact-form-7 id="XXXX" title="XXXXX"]', 'emanon' ),
				'section' => 'emanon_cta_prospect_options',
				'settings' => 'cta_prospect_contactform7',
				'type' => 'text',
				'priority' => 7,
			) );

			// CTA prospect background color
			$wp_customize->add_setting( 'cta_d_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_d_background_color', array(
				'label' => __( 'CTA background color', 'emanon' ),
				'section' => 'emanon_cta_prospect_options',
				'settings' => 'cta_d_background_color',
				'priority' => 8,
			) ) );

			// CTA prospect title color
			$wp_customize->add_setting( 'cta_d_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_d_title_color', array(
				'label' => __( 'CTA title color', 'emanon' ),
				'section' => 'emanon_cta_prospect_options',
				'settings' => 'cta_d_title_color',
				'priority' => 9,
			) ) );

			// CTA prospect text color
			$wp_customize->add_setting( 'cta_d_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_d_text_color', array(
				'label' => __( 'CTA text color', 'emanon' ),
				'section' => 'emanon_cta_prospect_options',
				'settings' => 'cta_d_text_color',
				'priority' => 10,
			) ) );

			// CTA prospect button background color
			$wp_customize->add_setting( 'cta_d_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_d_btn_background_color', array(
				'label' => __( 'CTA button background color', 'emanon' ),
				'section' => 'emanon_cta_prospect_options',
				'settings' => 'cta_d_btn_background_color',
				'priority' => 11,
			) ) );

			// CTA prospect button text color
			$wp_customize->add_setting( 'cta_d_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_d_btn_text_color', array(
				'label' => __( 'CTA button text color', 'emanon' ),
				'section' => 'emanon_cta_prospect_options',
				'settings' => 'cta_d_btn_text_color',
				'priority' => 12,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Cta Footer Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_footer_section', array (
			'title' => __( 'CTA footer section settings', 'emanon' ),
			'priority' => 7,
			'panel' => 'emanon_cta_settings',
		) );

			// Cta footer title
			$wp_customize->add_setting( 'cta_footer_title', array(
				'default' => get_bloginfo( 'name' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_footer_title', array(
				'label' => __( 'CTA title(logo alt)', 'emanon' ),
				'section' => 'emanon_cta_footer_section',
				'settings' => 'cta_footer_title',
				'type' => 'text',
				'priority' => 1,
			) );

			// Cta footer title url
			$wp_customize->add_setting( 'cta_footer_title_url', array(
				'default' => home_url( '/' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_url',
			) );
			$wp_customize->add_control( 'cta_footer_title_url', array(
				'label' => __( 'Footer title url(logo url)', 'emanon' ),
				'section' => 'emanon_cta_footer_section',
				'settings' => 'cta_footer_title_url',
				'type' => 'url',
				'priority' => 2,
			) );

			// Footer logo
			$wp_customize->add_setting( 'footer_logo', array (
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_image_url',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array (
				'label' => __( 'Display footer logo', 'emanon' ),
				'section' => 'emanon_cta_footer_section',
				'settings' => 'footer_logo',
				'priority'=> 3,
			) ) );

			// Footer logo height
			$wp_customize->add_setting( 'footer_logo_height', array(
				'default' => 46,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'footer_logo_height', array(
				'label' => __( 'Footer logo height (default 46px)', 'emanon' ),
				'section' => 'emanon_cta_footer_section',
				'settings' => 'footer_logo_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'max' => 60,
					'step' => 1,
				),
				'priority' => 4,
			) );

			// Cta footer tell
			$wp_customize->add_setting( 'cta_footer_tell', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_footer_tell', array(
				'label' => __( 'CTA tell', 'emanon' ),
				'section' => 'emanon_cta_footer_section',
				'settings' => 'cta_footer_tell',
				'type' => 'text',
				'priority' => 5,
			) );

			// Cta footer text
			$wp_customize->add_setting( 'cta_footer_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_footer_text', array(
				'label' => __( 'CTA text', 'emanon' ),
				'section' => 'emanon_cta_footer_section',
				'settings' => 'cta_footer_text',
				'type' => 'text',
				'priority' => 6,
			) );

			// Cta footer btn url
			$wp_customize->add_setting( 'cta_footer_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_url',
			) );
			$wp_customize->add_control( 'cta_footer_btn_url', array(
				'label' => __( 'CTA button url', 'emanon' ),
				'section' => 'emanon_cta_footer_section',
				'settings' => 'cta_footer_btn_url',
				'type' => 'text',
				'priority' => 7,
			) );

			// Cta footer btn text
			$wp_customize->add_setting( 'cta_footer_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_footer_btn_text', array(
				'label' => __( 'CTA button text', 'emanon' ),
				'section' => 'emanon_cta_footer_section',
				'settings' => 'cta_footer_btn_text',
				'type' => 'text',
				'priority' => 8,
			) );

			// Background color
			$wp_customize->add_setting( 'cta_footer_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_footer_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_cta_footer_section',
				'settings' => 'cta_footer_background_color',
				'priority' => 9,
			) ) );

			// Text color
			$wp_customize->add_setting( 'cta_footer_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_footer_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_cta_footer_section',
				'settings' => 'cta_footer_text_color',
				'priority' => 10,
			) ) );

			// Button background color
			$wp_customize->add_setting( 'cta_footer_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_footer_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				 'section' => 'emanon_cta_footer_section',
				'settings' => 'cta_footer_btn_background_color',
				'priority' => 11,
			) ) );

			// Button text color
			$wp_customize->add_setting( 'cta_footer_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_footer_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_cta_footer_section',
				'settings' => 'cta_footer_btn_text_color',
				'priority' => 12,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Calls to Action Popup
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_popup_options', array (
			'title' => __( 'Calls to action popup option', 'emanon' ),
			'priority' => 8,
			'panel' => 'emanon_cta_settings',
		) );

			// CTA layout type
			$wp_customize->add_setting( 'cta_popup_layout_type', array(
				'default' => 'cta_popup_left',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_cta_popup_layout_type',
			) );
			$wp_customize->add_control( 'cta_popup_layout_type', array(
				'label' => __( 'CTA layout type', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_layout_type',
				'type' => 'radio',
				'choices' => array(
					'cta_popup_left' => __( 'CTA left layout', 'emanon' ),
					'cta_popup_center' => __( 'CTA center layout', 'emanon' ),
					'cta_popup_right' => __( 'CTA right layout', 'emanon' ),
					),
				'priority' => 1,
			) );

			// CTA popup image
			$wp_customize->add_setting( 'cta_popup_image', array(
				'default' => '',
				'sanitize_callback' => 'emanon_customize_sanitize_image_url',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cta_popup_image', array (
				'label' => __( 'CTA image', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_image',
				'priority' => 2,
			) ) );

			// CTA popup title
			$wp_customize->add_setting( 'cta_popup_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_popup_title', array(
				'label' => __( 'CTA title (Max：18)', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_title',
				'type' => 'text',
				'priority' => 3,
			) );

			// CTA popup text
			$wp_customize->add_setting( 'cta_popup_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'cta_popup_text', array(
				'label' => __( 'CTA text', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_text',
				'priority' => 4,
			) ) );

			// CTA popup btn url
			$wp_customize->add_setting( 'cta_popup_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_url',
			) );
			$wp_customize->add_control( 'cta_popup_btn_url', array(
				'label' => __( 'CTA button url', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_btn_url',
				'type' => 'url',
				'priority' => 5,
			) );

			// CTA popup btn text
			$wp_customize->add_setting( 'cta_popup_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_popup_btn_text', array(
				'label' => __( 'CTA button text', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_btn_text',
				'type' => 'text',
				'priority' => 6,
			) );

			// CTA contact form7
			$wp_customize->add_setting( 'cta_popup_contactform7', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_popup_contactform7', array(
				'label' => __( 'CTA Contact Form7', 'emanon' ),
				'description' => __( 'Input short code example [contact-form-7 id="XXXX" title="XXXXX"]', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_contactform7',
				'type' => 'text',
				'priority' => 7,
			) );

			// CTA popup background color
			$wp_customize->add_setting( 'cta_popup_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_popup_background_color', array(
				'label' => __( 'CTA background color', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_background_color',
				'priority' => 8,
			) ) );

			// CTA popup title header color
			$wp_customize->add_setting( 'cta_popup_title_header_color', array(
				'default' => '#b5b5b5',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_popup_title_header_color', array(
				'label' => __( 'CTA title header color', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_title_header_color',
				'priority' => 9,
			) ) );

			// CTA popup title color
			$wp_customize->add_setting( 'cta_popup_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_popup_title_color', array(
				'label' => __( 'CTA title color', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_title_color',
				'priority' => 10,
			) ) );

			// CTA popup text color
			$wp_customize->add_setting( 'cta_popup_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_popup_text_color', array(
				'label' => __( 'CTA text color', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_text_color',
				'priority' => 11,
			) ) );

			// CTA popup button background color
			$wp_customize->add_setting( 'cta_popup_btn_background_color', array(
				'default' => '#37db9b',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_popup_btn_background_color', array(
				'label' => __( 'CTA button background color', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_btn_background_color',
				'priority' => 12,
			) ) );

			// CTA popup button text color
			$wp_customize->add_setting( 'cta_popup_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_popup_btn_text_color', array(
				'label' => __( 'CTA button text color', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_btn_text_color',
				'priority' => 13,
			) ) );

			// Fontawesome Icon for mobile
			$wp_customize->add_setting( 'cta_popup_mobile_icon', array(
				'default' => 'fa fa-envelope-o',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_popup_mobile_icon', array (
				'label' => __( 'PopUp mobile icon', 'emanon' ),
				'description' => sprintf('%1$s <a href=" http://fontawesome.io/icons/" target="_blank">%2$s</a>.',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_mobile_icon',
				'type' => 'text',
				'priority' => 14,
			) );

			// CTA popup icon background color for mobile
			$wp_customize->add_setting( 'cta_popup_icon_mobile_background_color', array(
				'default' => '#37db9b',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_popup_icon_mobile_background_color', array(
				'label' => __( 'PopUp mobile icon background color', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_icon_mobile_background_color',
				'priority' => 15,
			) ) );

			// CTA popup icon text color for mobile
			$wp_customize->add_setting( 'cta_popup_icon_mobile_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_popup_icon_mobile_text_color', array(
				'label' => __( 'PopUp mobile icon text color', 'emanon' ),
				'section' => 'emanon_cta_popup_options',
				'settings' => 'cta_popup_icon_mobile_text_color',
				'priority' => 16,
			) ) );