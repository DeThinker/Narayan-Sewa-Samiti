<?php

function gutener_charity_ngo_kirki_fields(){

	/**
	* If kirki is not installed do not run the kirki fields
	*/

	if ( !class_exists( 'Kirki' ) ) {
		return;
	}

	// Change primary color

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Primary Color', 'gutener-charity-ngo' ),
		'type'         => 'color',
		'settings'     => 'site_primary_color',
		'section'      => 'colors',
		'default'      => '#ffd012',
		'priority'     => '50',
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Button Background Color', 'gutener-charity-ngo' ),
		'type'         => 'color',
		'settings'     => 'notification_bar_button_background_color',
		'section'      => 'notification_bar_options',
		'default'      => '#ffd012',
		'active_callback' => array(
			array(
				'setting'  => 'disable_notification_bar',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Button Text Color', 'gutener-charity-ngo' ),
		'type'         => 'color',
		'settings'     => 'notification_bar_button_text_color',
		'section'      => 'notification_bar_options',
		'default'      => '#ffffff',
		'active_callback' => array(
			array(
				'setting'  => 'disable_notification_bar',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );
	
	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Category Color', 'gutener-charity-ngo' ),
		'type'         => 'color',
		'settings'     => 'blog_post_category_color',
		'section'      => 'blog_page_options',
		'default'      => '#ffd012',
	) );

	// Change header height to 320px

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Height (in px)', 'gutener-charity-ngo' ),
		'description' => esc_html__( 'These options will only apply to Desktop. Please click on below Desktop Icon to see changes.
		', 'gutener-charity-ngo' ),
		'type'        => 'slider',
		'settings'    => 'header_image_height',
		'section'     => 'header_options',
		'transport'   => 'postMessage',
		'default'     => 180,
		'choices'     => array(
			'min'  => 0,
			'max'  => 500,
			'step' => 5,
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'    => esc_html__( 'Disable Hamburger Widget Menu', 'gutener-charity-ngo' ),
		'type'     => 'checkbox',
		'settings' => 'disable_hamburger_menu_icon',
		'section'  => 'header_options',
		'default'  => false,
	) );

    // Change highlight posts columns to 4

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Columns', 'gutener-charity-ngo' ),
		'type'        => 'select',
		'settings'    => 'highlight_posts_columns',
		'section'     => 'highlight_posts_options',
		'default'     => 'four_columns',
		'placeholder' => esc_attr__( 'Select category', 'gutener-charity-ngo' ),
		'choices'  => array(
			'one_column'    => esc_html__( '1 Column', 'gutener-charity-ngo' ),
			'two_columns'   => esc_html__( '2 Columns', 'gutener-charity-ngo' ),
			'three_columns' => esc_html__( '3 Columns', 'gutener-charity-ngo' ),
			'four_columns'  => esc_html__( '4 Columns', 'gutener-charity-ngo' ),
		)
	) );

	// Change slider width layout to box

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Width Controls', 'gutener-charity-ngo' ),
		'type'        => 'select',
		'settings'    => 'slider_width_controls',
		'section'     => 'main_slider_options',
		'default'     => 'boxed',
		'choices'  => array(
			'boxed'  => esc_html__( 'Boxed', 'gutener-charity-ngo' ),
			'full'   => esc_html__( 'Full', 'gutener-charity-ngo' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'main_slider_controls',
				'operator' => '==',
				'value'    => 'slider',
			),
		),
	) );

	// Change Archive Post Layouts to list

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Archive Post Layouts', 'gutener-charity-ngo' ),
		'description' => esc_html__( 'List / Grid / Single', 'gutener-charity-ngo' ),
		'type'        => 'radio-image',
		'settings'    => 'archive_post_layout',
		'section'     => 'global_layout_options',
		'default'     => 'list',
		'choices'  => array(
			'grid'   => get_template_directory_uri() . '/assets/images/grid-layout.png',
			'list'   => get_template_directory_uri() . '/assets/images/list-layout.png',
			'single' => get_template_directory_uri() . '/assets/images/single-layout.png',
		)
	) );

	// Change Footer Layout to footer two

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Footer Layouts', 'gutener-charity-ngo' ),
		'type'        => 'radio-image',
		'settings'    => 'footer_layout',
		'section'     => 'footer_options',
		'default'     => 'footer_two',
		'choices'  => array(
			'footer_one'   => get_template_directory_uri() . '/assets/images/footer-layout-1.png',
			'footer_two'   => get_template_directory_uri() . '/assets/images/footer-layout-2.png',
			'footer_three' => get_template_directory_uri() . '/assets/images/footer-layout-3.png',
		),
		'active_callback' => array(
			array(
				'setting'  => 'disable_bottom_footer',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );
}
add_action( 'init', 'gutener_charity_ngo_kirki_fields', 999, 1 );