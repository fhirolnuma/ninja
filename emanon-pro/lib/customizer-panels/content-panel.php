<?php
/**
* Theme Emanon Pro Customizer Content Panel
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Content Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_content_settings', array(
	'priority' => 40,
	'capability' => 'edit_theme_options',
	'title' => __( 'Content settings', 'emanon' ),
	) );

	 /*------------------------------------------------------------------------------------
		/* Breadcrumb Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_breadcrumb_options', array (
			'title' => __( 'Breadcrumb options', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_content_settings',
		) );

			// Display the breadcrumb in single post
			$wp_customize->add_setting( 'display_single_breadcrumb', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_single_breadcrumb', array(
				'label' => __( 'Display the breadcrumb in single post', 'emanon' ),
				'section' => 'emanon_breadcrumb_options',
				'settings' => 'display_single_breadcrumb',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Display the breadcrumb in archive
			$wp_customize->add_setting( 'display_archive_breadcrumb', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_archive_breadcrumb', array(
				'label' => __( 'Display the breadcrumb in archive', 'emanon' ),
				'section' => 'emanon_breadcrumb_options',
				'settings' => 'display_archive_breadcrumb',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Display the breadcrumb in page
			$wp_customize->add_setting( 'display_page_breadcrumb', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_page_breadcrumb', array(
				'label' => __( 'Display the breadcrumb in page', 'emanon' ),
				'section' => 'emanon_breadcrumb_options',
				'settings' => 'display_page_breadcrumb',
				'type' => 'checkbox',
				'priority' => 3,
			) );

		/*------------------------------------------------------------------------------------
		/* Post Tag Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_post_tag_options', array (
			'title' => __( 'Post tag options', 'emanon' ),
			 'description' => __( 'Display setting of the post page.', 'emanon' ),
			'priority' => 2,
			'panel' => 'emanon_content_settings',
		) );

			// Display date
			$wp_customize->add_setting( 'display_entry_date', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_entry_date', array(
				'label' =>__( 'Display date', 'emanon' ),
				'section' => 'emanon_post_tag_options',
				'settings' => 'display_entry_date',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Display updade date
			$wp_customize->add_setting( 'display_update_date', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_update_date', array(
				'label' =>__( 'Display updade date', 'emanon' ),
				'section' => 'emanon_post_tag_options',
				'settings' => 'display_update_date',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Display category
			$wp_customize->add_setting( 'display_category', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_category', array(
				'label' => __( 'Display category', 'emanon' ),
				'section' => 'emanon_post_tag_options',
				'settings' => 'display_category',
				'type' => 'checkbox',
				'priority' => 3,
			) );

			// Display tag
			$wp_customize->add_setting( 'display_tag', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_tag', array(
				'label' => __( 'Display tag', 'emanon' ),
				'section' => 'emanon_post_tag_options',
				'settings' => 'display_tag',
				'type'	=> 'checkbox',
				'priority' => 4,
			) );

			// Display comments number
			$wp_customize->add_setting( 'display_comments_number', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_comments_number', array(
				'label' => __( 'Display comments number', 'emanon' ),
				'section' => 'emanon_post_tag_options',
				'settings' => 'display_comments_number',
				'type' => 'checkbox',
				'priority' => 5,
			) );

			// Display author
			$wp_customize->add_setting( 'display_author', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_author', array(
				'label' => __( 'Display author', 'emanon' ),
				'section' => 'emanon_post_tag_options',
				'settings' => 'display_author',
				'type' => 'checkbox',
				'priority' => 6,
			) );

		/*------------------------------------------------------------------------------------
		/* Featured Image (Post) Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_featured_image_options', array (
			'title' => __( 'Featured imag (post) options', 'emanon' ),
			 'description' => __( 'Featured Image setting of the post page.', 'emanon' ),
			'priority' => 3,
			'panel' => 'emanon_content_settings',
		) );

			// Featured image layout
			$wp_customize->add_setting( 'featured_image_layout', array(
				'default' => 'wide',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_featured_image_layout_type',
			) );
			$wp_customize->add_control( 'featured_image_layout', array(
				'label' => __( 'Featured imag (post) type', 'emanon' ),
				'section' => 'emanon_featured_image_options',
				'settings' => 'featured_image_layout',
				'type' => 'radio',
				'choices' => array(
					'wide' => __( 'Wide size', 'emanon' ),
					'normal' => __( 'Normal size', 'emanon' ),
					'no_display' => __( 'No featured image', 'emanon' ),
					),
				'priority' => 1,
			) );

			// Display caption
			$wp_customize->add_setting( 'display_thumbnail_caption', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_thumbnail_caption', array(
				'label' => __( 'Display thumbnail caption', 'emanon' ),
				'description' => __( 'Display caption of eye catch image of post page.', 'emanon' ),
				'section' => 'emanon_featured_image_options',
				'settings' => 'display_thumbnail_caption',
				'type' => 'checkbox',
				'priority' => 2,
			) );

		/*------------------------------------------------------------------------------------
		/* SNS Share Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_sns_share_options', array (
			'title' => __( 'SNS share options', 'emanon' ),
			'priority' => 4,
			'panel' => 'emanon_content_settings',
		) );

			// SNS share top position
			$wp_customize->add_setting( 'display_top_sns_share', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_top_sns_share', array(
				'label'	 => __( 'SNS share top position', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_top_sns_share',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// SNS share bottom position
			$wp_customize->add_setting( 'display_bottom_sns_share', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_bottom_sns_share', array(
				'label'	 => __( 'SNS share bottom position', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_bottom_sns_share',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// SNS layout type
			$wp_customize->add_setting( 'sns_layout_type', array(
				'default' => 'no_count',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_sns_layout_type',
			) );
			$wp_customize->add_control( 'sns_layout_type', array(
				'label' => __( 'Layout type', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'sns_layout_type',
				'type' => 'radio',
				'choices' => array(
					'no_count' => __( 'No count', 'emanon' ),
					'count' => __( 'Count (Install SNS Count Cache)', 'emanon' ),
					),
				'priority' => 3,
			) );

			// Display twitter btn
			$wp_customize->add_setting( 'display_twitter_btn', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_twitter_btn', array(
				'label' => __( 'Display twitter btn', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_twitter_btn',
				'type' => 'checkbox',
				'priority' => 4,
			) );

			// Display facebook btn
			$wp_customize->add_setting( 'display_facebook_btn', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_facebook_btn', array(
				'label'	 => __( 'Display facebook btn', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_facebook_btn',
				'type' => 'checkbox',
				'priority' => 5,
			) );

			// Display Hatena btn
			$wp_customize->add_setting( 'display_hatena_btn', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_hatena_btn', array(
				'label' => __( 'Display hatena btn', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_hatena_btn',
				'type' => 'checkbox',
				'priority' => 6,
			) );

			// Display google+ btn
			$wp_customize->add_setting( 'display_google_plus_btn', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_google_plus_btn', array(
				'label' => __( 'Display google+ btn', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_google_plus_btn',
				'type'	=> 'checkbox',
				'priority' => 7,
			) );

			// Display pocket btn
			$wp_customize->add_setting( 'display_pocket_btn', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			));
			$wp_customize->add_control( 'display_pocket_btn', array(
				'label' => __( 'Display pocket btn', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_pocket_btn',
				'type' => 'checkbox',
				'priority' => 8,
			));

		/*------------------------------------------------------------------------------------
		/* h Tag Style Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_h_style_options', array (
			'title' => __( 'H tag style options', 'emanon' ),
			'priority' => 5,
			'panel' => 'emanon_content_settings',
		) );

			// H2 type
			$wp_customize->add_setting( 'h2_style', array(
				'default' => 'border-left-background',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_h_style',
			) );
			$wp_customize->add_control( 'h2_style', array(
				'label' => __( 'H2 tag style', 'emanon' ),
				'section' => 'emanon_h_style_options',
				'settings' => 'h2_style',
				'type' => 'radio',
				'choices' => array(
					'none' => __( 'None', 'emanon' ),
					'background' => __( 'Background color', 'emanon' ),
					'balloon' => __( 'Balloon', 'emanon' ),
					'border-left' => __( 'Border left', 'emanon' ),
					'border-left-background' => __( 'Border left background', 'emanon' ),
					'border-left-bottom' => __( 'Border left bottom', 'emanon' ),
					'border-bottom' => __( 'Border bottom', 'emanon' ),
					'border-bottom-two' => __( 'Border bottom two', 'emanon' ),
					'border-left-background-stripe' => __( 'Border left background stripe', 'emanon' ),
					'border-top-bottom-stripe' => __( 'Border top bottom stripe', 'emanon' ),
					),
				'priority' => 1,
			) );

			// H3 type
			$wp_customize->add_setting( 'h3_style', array(
				'default' => 'border-bottom',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_h_style',
			) );
			$wp_customize->add_control( 'h3_style', array(
				'label' => __( 'H3 tag style', 'emanon' ),
				'section' => 'emanon_h_style_options',
				'settings' => 'h3_style',
				'type' => 'radio',
				'choices' => array(
					'none' => __( 'None', 'emanon' ),
					'background' => __( 'Background color', 'emanon' ),
					'balloon' => __( 'Balloon', 'emanon' ),
					'border-left' => __( 'Border left', 'emanon' ),
					'border-left-background' => __( 'Border left background', 'emanon' ),
					'border-left-bottom' => __( 'Border left bottom', 'emanon' ),
					'border-bottom' => __( 'Border bottom', 'emanon' ),
					'border-bottom-two' => __( 'Border bottom two', 'emanon' ),
					'border-left-background-stripe' => __( 'Border left background stripe', 'emanon' ),
					'border-top-bottom-stripe' => __( 'Border top bottom stripe', 'emanon' ),
					),
				'priority' => 2,
			) );

			// H4 type
			$wp_customize->add_setting( 'h4_style', array(
				'default' => 'none',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_h_style',
			) );
			$wp_customize->add_control( 'h4_style', array(
				'label' => __( 'H4 tag style', 'emanon' ),
				'section' => 'emanon_h_style_options',
				'settings' => 'h4_style',
				'type' => 'radio',
				'choices' => array(
					'none' => __( 'None', 'emanon' ),
					'background' => __( 'Background color', 'emanon' ),
					'balloon' => __( 'Balloon', 'emanon' ),
					'border-left' => __( 'Border left', 'emanon' ),
					'border-left-background' => __( 'Border left background', 'emanon' ),
					'border-left-bottom' => __( 'Border left bottom', 'emanon' ),
					'border-bottom' => __( 'Border bottom', 'emanon' ),
					'border-bottom-two' => __( 'Border bottom two', 'emanon' ),
					'border-left-background-stripe' => __( 'Border left background stripe', 'emanon' ),
					'border-top-bottom-stripe' => __( 'Border top bottom stripe', 'emanon' ),
					),
				'priority' => 3,
			) );

			// Sidebar h type
			$wp_customize->add_setting( 'sidebar_h_style', array(
				'default' => 'border-bottom-two',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_h_style',
			) );
			$wp_customize->add_control( 'sidebar_h_style', array(
				'label' => __( 'Sidebar h type', 'emanon' ),
				'section' => 'emanon_h_style_options',
				'settings' => 'sidebar_h_style',
				'type' => 'radio',
				'choices' => array(
					'none' => __( 'None', 'emanon' ),
					'background' => __( 'Background color', 'emanon' ),
					'balloon' => __( 'Balloon', 'emanon' ),
					'border-left' => __( 'Border left', 'emanon' ),
					'border-left-background' => __( 'Border left background', 'emanon' ),
					'border-left-bottom' => __( 'Border left bottom', 'emanon' ),
					'border-bottom' => __( 'Border bottom', 'emanon' ),
					'border-bottom-two' => __( 'Border bottom two', 'emanon' ),
					'border-left-background-stripe' => __( 'Border left background stripe', 'emanon' ),
					'border-top-bottom-stripe' => __( 'Border top bottom stripe', 'emanon' ),
					),
				'priority' => 4,
			) );

		/*------------------------------------------------------------------------------------
		/* SNS Follow Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_sns_follow_options', array (
			'title' => __( 'SNS follow options', 'emanon' ),
			'priority' => 6,
			'panel' => 'emanon_content_settings',
		) );

			// Display facebook like btn
			$wp_customize->add_setting( 'display_fb_like_btn', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_fb_like_btn', array(
				'label' => __( 'Display facebook like btn', 'emanon' ),
				'description' => __( 'Display facebook like btn on the bottom of the post page. Facebook application id ( General > Facebook OPG ) and Facebook page set of url ( General > SNS follow url ) is required.', 'emanon' ),
				'section' => 'emanon_sns_follow_options',
				'settings' => 'display_fb_like_btn',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Facebook like btn title
			$wp_customize->add_setting( 'fb_like_btn_title', array(
				'default' => __( 'If you like this article, press click button', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'fb_like_btn_title', array(
				'label' => __( 'Facebook like btn title', 'emanon' ),
				'section' => 'emanon_sns_follow_options',
				'settings' => 'fb_like_btn_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Facebook like background color
			$wp_customize->add_setting( 'fb_like_background_color', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fb_like_background_color', array(
				'label' => __( 'Facebook like background color', 'emanon' ),
				'section' => 'emanon_sns_follow_options',
				'settings' => 'fb_like_background_color',
				'priority' => 3,
			) ) );

			// Facebook like background color opacity
			$wp_customize->add_setting( 'fb_like_image_opacity', array(
				'default' => 0.25,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_rangeslider'
			) );
			$wp_customize->add_control( 'fb_like_image_opacity', array(
				'label' => __( 'Facebook like background color opacity', 'emanon' ),
				'section' => 'emanon_sns_follow_options',
				'settings' => 'fb_like_image_opacity',
				'type' => 'range',
					'input_attrs' => array(
					'min' => 0,
					'max' => 1,
					'step' => 0.05,
					),
				'priority' => 4,
			) );

			// Facebook like image
			$wp_customize->add_setting( 'fb_like_image', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_image_url',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'fb_like_image', array (
				'label' => __( 'Facebook like image', 'emanon' ),
				'description' => __( 'Image size recommended width 1026px height 300px.If you do not set the image, the eye catch image of the posting page will be displayed.', 'emanon' ),
				'section' => 'emanon_sns_follow_options',
				'settings' => 'fb_like_image',
				'priority' => 5,
			) ) );

			// Display twitter follow btn
			$wp_customize->add_setting( 'display_content_twitter_follow', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_content_twitter_follow', array(
				'label' => __( 'Display twitter follow btn', 'emanon' ),
				'section' => 'emanon_sns_follow_options',
				'settings' => 'display_content_twitter_follow',
				'type' => 'checkbox',
				'priority' => 6,
			) );

			// Twitter follow title
			$wp_customize->add_setting( 'twitter_follow_title', array(
				'default' => __( 'Follow me on twitter', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'twitter_follow_title', array(
				'label' => __( 'SNS follow title', 'emanon' ),
				'section' => 'emanon_sns_follow_options',
				'settings' => 'twitter_follow_title',
				'type' => 'text',
				'priority' => 7,
			) );

			// Display SNS follow btn
			$wp_customize->add_setting( 'display_content_sns_follow', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_content_sns_follow', array(
				'label' => __( 'Display sns follow btn', 'emanon' ),
				'section' => 'emanon_sns_follow_options',
				'settings' => 'display_content_sns_follow',
				'type' => 'checkbox',
				'priority' => 8,
			) );

			// SNS follow title
			$wp_customize->add_setting( 'sns_follow_title', array(
				'default' => __( 'Follow me on sns', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'sns_follow_title', array(
				'label' => __( 'SNS follow title', 'emanon' ),
				'section' => 'emanon_sns_follow_options',
				'settings' => 'sns_follow_title',
				'type' => 'text',
				'priority' => 9,
			) );

		/*------------------------------------------------------------------------------------
		/* Author Profile Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_author_profile_options', array (
			'title' => __( 'Author profile option', 'emanon' ),
			'priority' => 7,
			'panel' => 'emanon_content_settings',
		) );

			// Display author profile
			$wp_customize->add_setting( 'display_author_profile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_author_profile', array(
				'label'	 => __( 'Display author profile', 'emanon' ),
				'section' => 'emanon_author_profile_options',
				'settings' => 'display_author_profile',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Author profile title
			$wp_customize->add_setting( 'author_profile_title', array(
				'default' => __( 'About author', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'author_profile_title', array(
				'label' => __( 'Author profile title', 'emanon' ),
				'section' => 'emanon_author_profile_options',
				'settings' => 'author_profile_title',
				'type' => 'text',
				'priority' => 2,
			) );

		/*------------------------------------------------------------------------------------
		/* Related Post Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_related_post_options', array (
			'title' => __( 'Related post options', 'emanon' ),
			'priority' => 8,
			'panel' => 'emanon_content_settings',
		) );

			// Display prev link and next link
			$wp_customize->add_setting( 'display_pre_nex', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_pre_nex', array(
				'label' => __( 'Display prev link and next link', 'emanon' ),
				'section' => 'emanon_related_post_options',
				'settings' => 'display_pre_nex',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Display related post
			$wp_customize->add_setting( 'display_related_post', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_related_post', array(
				'label' => __( 'Display related Post', 'emanon' ),
				'section' => 'emanon_related_post_options',
				'settings' => 'display_related_post',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Display related post style
			$wp_customize->add_setting( 'related_post_pc_style', array(
				'default' => 'display_two_row',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_related_post_style',
			) );
			$wp_customize->add_control( 'related_post_pc_style', array(
				'label' => __( 'Layout type［PC］', 'emanon' ),
				'section' => 'emanon_related_post_options',
				'settings' => 'related_post_pc_style',
				'type' => 'radio',
				'choices' => array(
					'display_two_row' => __( 'Display two row', 'emanon' ),
					'display_three_row' => __( 'Display three row', 'emanon' ),
				),
				'priority' => 3,
			) );

			// Display related post sp style
			$wp_customize->add_setting( 'related_post_sp_style', array(
				'default' => 'display_related_list',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_related_post_sp_style',
			) );
			$wp_customize->add_control( 'related_post_sp_style', array(
				'label' => __( 'Layout type［SP］', 'emanon' ),
				'section' => 'emanon_related_post_options',
				'settings' => 'related_post_sp_style',
				'type' => 'radio',
				'choices' => array(
					'display_related_list' => __( 'Display related list', 'emanon' ),
					'display_related_card' => __( 'Display related card', 'emanon' ),
				),
				'priority' => 4,
			) );

			// Related post title
			$wp_customize->add_setting( 'emanon_related_post_title', array(
				'default' => __( 'Related Post', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'emanon_related_post_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_related_post_options',
				'settings' => 'emanon_related_post_title',
				'type' => 'text',
				'priority' => 5,
			) );

			// Maximum number of posts per related post
			$wp_customize->add_setting( 'related_post_max', array(
				'default' => 4,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'related_post_max', array(
				'label' => __( 'Maximum number of posts per related posts (default 4)', 'emanon' ),
				'section' => 'emanon_related_post_options',
				'settings' => 'related_post_max',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 1,
					'step' => 1,
				),
				'priority' => 6,
			) );

		/*------------------------------------------------------------------------------------
		/* Mobile Footer Buttons Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_mobile_footer_btn_options', array (
			'title' => __( 'Mobile footer buttons options', 'emanon' ),
			'priority' => 9,
			'panel' => 'emanon_content_settings',
		) );

			// Mobile footer btn style
			$wp_customize->add_setting( 'mobile_footer_btn_style', array(
				'default' => 'no_display',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_mobile_footer_btn_style',
			) );
			$wp_customize->add_control( 'mobile_footer_btn_style', array(
				'label' => __( 'Display mobile footer btn', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'mobile_footer_btn_style',
				'type' => 'radio',
				'choices' => array(
					'no_display' => __( 'No display', 'emanon' ),
					'display' => __( 'Display［Share button style］', 'emanon' ),
					'display_no_share_button' => __( 'Display［No share button style］', 'emanon' ),
				),
				'priority' => 1,
			) );

			// Display home btn
			$wp_customize->add_setting( 'display_home_btn_mobile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_home_btn_mobile', array(
				'label' => __( 'Display home btn on mobile', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_home_btn_mobile',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Fontawesome Icon [home icon]
			$wp_customize->add_setting( 'home_btn_icon_mobile', array(
				'default' => 'fa fa-home',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'home_btn_icon_mobile', array (
				'label' => __( 'Icon［Home］', 'emanon' ),
				'description' => sprintf('%1$s <a href="http://fontawesome.io/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'home_btn_icon_mobile',
				'type' => 'text',
				'priority' => 3,
			) );

			// Home btn text
			$wp_customize->add_setting( 'home_btn_text_mobile', array(
				'default' => __( 'Home', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'home_btn_text_mobile', array(
				'label' => __( 'Text［Home］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'home_btn_text_mobile',
				'type' => 'text',
				'priority' => 4,
			) );

			// Display tel btn
			$wp_customize->add_setting( 'display_tel_btn_mobile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_tel_btn_mobile', array(
				'label' => __( 'Display tel btn on mobile', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_tel_btn_mobile',
				'type' => 'checkbox',
				'priority' => 5,
			) );

			// Fontawesome Icon [tel icon]
			$wp_customize->add_setting( 'tel_btn_icon_mobile', array(
				'default' => 'fa fa-phone',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tel_btn_icon_mobile', array (
				'label' => __( 'Icon［Tel］', 'emanon' ),
				'description' => sprintf('%1$s <a href="http://fontawesome.io/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'tel_btn_icon_mobile',
				'type' => 'text',
				'priority' => 6,
			) );

			// Tel number btn text
			$wp_customize->add_setting( 'tel_btn_text_mobile', array(
				'default' => __( 'Tel', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tel_btn_text_mobile', array(
				'label' => __( 'Text［Tel］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'tel_btn_text_mobile',
				'type' => 'text',
				'priority' => 7,
			) );

			// Tel number text
			$wp_customize->add_setting( 'tel_number_text_mobile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tel_number_text_mobile', array(
				'label' => __( 'Tel number text', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'tel_number_text_mobile',
				'type' => 'text',
				'priority' => 8,
			) );

			// Display footer btn 1
			$wp_customize->add_setting( 'display_footer_btn_mobile_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_footer_btn_mobile_1', array(
				'label' => __( 'Display btn［Free 1］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_footer_btn_mobile_1',
				'type' => 'checkbox',
				'priority' => 9,
			) );

			// Fontawesome Icon 1
			$wp_customize->add_setting( 'footer_btn_icon_mobile_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'footer_btn_icon_mobile_1', array (
				'label' => __( 'Icon［Free 1］', 'emanon' ),
				'description' => sprintf('%1$s <a href="http://fontawesome.io/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'footer_btn_icon_mobile_1',
				'type' => 'text',
				'priority' => 10,
			) );

			// Btn text 1
			$wp_customize->add_setting( 'footer_btn_text_mobile_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'footer_btn_text_mobile_1', array(
				'label' => __( 'Text［Free 1］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'footer_btn_text_mobile_1',
				'type' => 'text',
				'priority' => 11,
			) );

			// Btn url 1
			$wp_customize->add_setting( 'footer_btn_url_mobile_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_url',
			) );
			$wp_customize->add_control( 'footer_btn_url_mobile_1', array(
				'label' => __( 'URL［Free 1］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'footer_btn_url_mobile_1',
				'type' => 'url',
				'priority' => 12,
			) );

			// Display footer btn 2
			$wp_customize->add_setting( 'display_footer_btn_mobile_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_footer_btn_mobile_2', array(
				'label' => __( 'Display btn［Free 2］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_footer_btn_mobile_2',
				'type' => 'checkbox',
				'priority' => 13,
			) );

			// Fontawesome Icon 2
			$wp_customize->add_setting( 'footer_btn_icon_mobile_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'footer_btn_icon_mobile_2', array (
				'label' => __( 'Icon［Free 2］', 'emanon' ),
				'description' => sprintf('%1$s <a href="http://fontawesome.io/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'footer_btn_icon_mobile_2',
				'type' => 'text',
				'priority' => 14,
			) );

			// Btn text 2
			$wp_customize->add_setting( 'footer_btn_text_mobile_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'footer_btn_text_mobile_2', array(
				'label' => __( 'Text［Free 2］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'footer_btn_text_mobile_2',
				'type' => 'text',
				'priority' => 15,
			) );

			// Btn url 2
			$wp_customize->add_setting( 'footer_btn_url_mobile_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_url',
			) );
			$wp_customize->add_control( 'footer_btn_url_mobile_2', array(
				'label' => __( 'URL［Free 2］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'footer_btn_url_mobile_2',
				'type' => 'url',
				'priority' => 16,
			) );

			// Display footer btn 3
			$wp_customize->add_setting( 'display_footer_btn_mobile_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_footer_btn_mobile_3', array(
				'label' => __( 'Display btn［Free 3］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_footer_btn_mobile_3',
				'type' => 'checkbox',
				'priority' => 17,
			) );

			// Fontawesome Icon 3
			$wp_customize->add_setting( 'footer_btn_icon_mobile_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'footer_btn_icon_mobile_3', array (
				'label' => __( 'Icon［Free 3］', 'emanon' ),
				'description' => sprintf('%1$s <a href="http://fontawesome.io/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'footer_btn_icon_mobile_3',
				'type' => 'text',
				'priority' => 18,
			) );

			// Btn text 3
			$wp_customize->add_setting( 'footer_btn_text_mobile_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'footer_btn_text_mobile_3', array(
				'label' => __( 'Text［Free 3］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'footer_btn_text_mobile_3',
				'type' => 'text',
				'priority' => 19,
			) );

			// Btn url 3
			$wp_customize->add_setting( 'footer_btn_url_mobile_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_url',
			) );
			$wp_customize->add_control( 'footer_btn_url_mobile_3', array(
				'label' => __( 'URL［Free 3］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'footer_btn_url_mobile_3',
				'type' => 'url',
				'priority' => 20,
			) );

			// Display follow btn
			$wp_customize->add_setting( 'display_follow_btn_mobile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_follow_btn_mobile', array(
				'label' => __( 'Display follow btn on mobile', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_follow_btn_mobile',
				'type' => 'checkbox',
				'priority' => 21,
			) );

			// Fontawesome Icon [follow icon]
			$wp_customize->add_setting( 'follow_btn_icon_mobile', array(
				'default' => 'fa fa-plus',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'follow_btn_icon_mobile', array (
				'label' => __( 'Icon［Follow］', 'emanon' ),
				'description' => sprintf('%1$s <a href="http://fontawesome.io/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'follow_btn_icon_mobile',
				'type' => 'text',
				'priority' => 22,
			) );

			// Follow Modal Window Title
			$wp_customize->add_setting( 'follow_modal_window_title', array(
				'default' => __( 'Follow me on sns', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'follow_modal_window_title', array(
				'label' => __( 'Modal Window Title［Follow］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'follow_modal_window_title',
				'type' => 'text',
				'priority' => 23,
			) );

			// Follow btn text
			$wp_customize->add_setting( 'follow_btn_text_mobile', array(
				'default' => __( 'Follow', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'follow_btn_text_mobile', array(
				'label' => __( 'Text［Follow］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'follow_btn_text_mobile',
				'type' => 'text',
				'priority' => 24,
			) );

			// Display share btn
			$wp_customize->add_setting( 'display_share_btn_mobile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_share_btn_mobile', array(
				'label' => __( 'Display share btn on mobile', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_share_btn_mobile',
				'type' => 'checkbox',
				'priority' => 25,
			) );

			// Fontawesome Icon [share icon]
			$wp_customize->add_setting( 'share_btn_icon_mobile', array(
				'default' => 'fa fa-share-alt',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'share_btn_icon_mobile', array (
				'label' => __( 'Icon［Share］', 'emanon' ),
				'description' => sprintf('%1$s <a href="http://fontawesome.io/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'share_btn_icon_mobile',
				'type' => 'text',
				'priority' => 26,
			) );

			// Share Modal Window Title
			$wp_customize->add_setting( 'share_modal_window_title', array(
				'default' => __( 'To share', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'share_modal_window_title', array(
				'label' => __( 'Modal Window Title［Share］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'share_modal_window_title',
				'type' => 'text',
				'priority' => 27,
			) );

			// Share text
			$wp_customize->add_setting( 'share_btn_text_mobile', array(
				'default' => __( 'Share ', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'share_btn_text_mobile', array(
				'label' => __( 'Text［Share］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'share_btn_text_mobile',
				'type' => 'text',
				'priority' => 28,
			) );

			// Display twitter btn on mobile
			$wp_customize->add_setting( 'display_twitter_btn_mobile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_twitter_btn_mobile', array(
				'label' => __( 'Display twitter btn on mobile', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_twitter_btn_mobile',
				'type' => 'checkbox',
				'priority' => 29,
			) );

			// Display facebook btn on mobile
			$wp_customize->add_setting( 'display_facebook_btn_mobile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_facebook_btn_mobile', array(
				'label'	 => __( 'Display facebook btn on mobile', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_facebook_btn_mobile',
				'type' => 'checkbox',
				'priority' => 30,
			) );

			// Display Hatena btn on mobile
			$wp_customize->add_setting( 'display_hatena_btn_mobile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_hatena_btn_mobile', array(
				'label' => __( 'Display hatena btn on mobile', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_hatena_btn_mobile',
				'type' => 'checkbox',
				'priority' => 31,
			) );

			// Display google+ btn on mobile
			$wp_customize->add_setting( 'display_google_plus_btn_mobile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_google_plus_btn_mobile', array(
				'label' => __( 'Display google+ btn on mobile', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_google_plus_btn_mobile',
				'type'	=> 'checkbox',
				'priority' => 32,
			) );

			// Display pocket btn on mobile
			$wp_customize->add_setting( 'display_pocket_btn_mobile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			));
			$wp_customize->add_control( 'display_pocket_btn_mobile', array(
				'label' => __( 'Display pocket btn on mobile', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_pocket_btn_mobile',
				'type' => 'checkbox',
				'priority' => 33,
			));

			// Display search btn
			$wp_customize->add_setting( 'display_search_btn_mobile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_search_btn_mobile', array(
				'label' => __( 'Display search btn on mobile', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_search_btn_mobile',
				'type' => 'checkbox',
				'priority' => 34,
			) );

			// Search Modal Window Title
			$wp_customize->add_setting( 'search_modal_window_title', array(
				'default' => __( 'Search this site', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_modal_window_title', array(
				'label' => __( 'Modal Window Title［Search］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'search_modal_window_title',
				'type' => 'text',
				'priority' => 35,
			) );

			// Fontawesome Icon [search icon]
			$wp_customize->add_setting( 'search_btn_icon_mobile', array(
				'default' => 'fa fa-search',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_btn_icon_mobile', array (
				'label' => __( 'Icon［Search］', 'emanon' ),
				'description' => sprintf('%1$s <a href="http://fontawesome.io/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'search_btn_icon_mobile',
				'type' => 'text',
				'priority' => 36,
			) );

			// Search btn text
			$wp_customize->add_setting( 'search_btn_text_mobile', array(
				'default' => __( 'Search ', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_btn_text_mobile', array(
				'label' => __( 'Text［Search］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'search_btn_text_mobile',
				'type' => 'text',
				'priority' => 37,
			) );

			// Display page top btn
			$wp_customize->add_setting( 'display_page_top_btn_mobile', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_page_top_btn_mobile', array(
				'label' => __( 'Display page top btn on mobile', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'display_page_top_btn_mobile',
				'type' => 'checkbox',
				'priority' => 38,
			) );

			// Fontawesome Icon [page top icon]
			$wp_customize->add_setting( 'page_top_btn_icon_mobile', array(
				'default' => 'fa fa-chevron-up',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'page_top_btn_icon_mobile', array (
				'label' => __( 'Icon［Top］', 'emanon' ),
				'description' => sprintf('%1$s <a href="http://fontawesome.io/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'page_top_btn_icon_mobile',
				'type' => 'text',
				'priority' => 39,
			) );

			// Page top btn text
			$wp_customize->add_setting( 'page_top_btn_text_mobile', array(
				'default' => __( 'Top', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'page_top_btn_text_mobile', array(
				'label' => __( 'Text［Top］', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'page_top_btn_text_mobile',
				'type' => 'text',
				'priority' => 40,
			) );

			// Btn icon color
			$wp_customize->add_setting( 'footer_mobile_btn_icon_color', array(
				'default' => '#323638',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_mobile_btn_icon_color', array(
				'label' => __( 'Icon color', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'footer_mobile_btn_icon_color',
				'priority' => 41,
			) ) );

			// Text color
			$wp_customize->add_setting( 'footer_mobile_btn_text_color', array(
				'default' => '#323638',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_mobile_btn_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'footer_mobile_btn_text_color',
				'priority' => 42,
			) ) );

			// Background color
			$wp_customize->add_setting( 'footer_mobile_btn_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_mobile_btn_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_mobile_footer_btn_options',
				'settings' => 'footer_mobile_btn_background_color',
				'priority' => 43,
			) ) );
