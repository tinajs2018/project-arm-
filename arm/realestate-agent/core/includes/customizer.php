<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'realestate_agent_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'realestate-agent' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'realestate-agent' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
		'partial_refresh'    => [
		'realestate_agent_display_header_title' => [
			'selector'        => '.logo a',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'realestate-agent' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
		'partial_refresh'    => [
		'realestate_agent_display_header_text' => [
			'selector'        => '.logo-content span',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	//FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'realestate_agent_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'realestate-agent' ),
	) );

	Kirki::add_section( 'realestate_agent_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'realestate-agent' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_all_headings_typography',
		'section'     => 'realestate_agent_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'realestate_agent_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'realestate-agent' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'realestate-agent' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'realestate-agent' ),
		'section'     => 'realestate_agent_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_body_content_typography',
		'section'     => 'realestate_agent_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'realestate_agent_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'realestate-agent' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'realestate-agent' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'realestate-agent' ),
		'section'     => 'realestate_agent_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'realestate_agent_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'realestate-agent' ),
	) );

	// Additional Settings

	Kirki::add_section( 'realestate_agent_addtional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'realestate-agent' ),
	    'description'    => esc_html__( 'Scroll To Top', 'realestate-agent' ),
	    'panel'          => 'realestate_agent_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'realestate_agent_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'realestate-agent' ),
		'section'     => 'realestate_agent_addtional_settings',
		'default'     => '1',
		'priority'    => 10,
		'partial_refresh'    => [
		'realestate_agent_scroll_enable_setting' => [
			'selector'        => '.scroll-up a',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'realestate_agent_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'realestate-agent' ),
		'section'     => 'realestate_agent_addtional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'realestate-agent' ),
			'Center' => esc_html__( 'Center', 'realestate-agent' ),
			'Right'  => esc_html__( 'Right', 'realestate-agent' ),
		],
	]
	);

		Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'realestate_agent_scroll_top_icon',
		'label'    => esc_html__( 'Select Appropriate Scroll Top Icon', 'realestate-agent' ),
		'section'  => 'realestate_agent_addtional_settings',
		'default'  => 'dashicons dashicons-arrow-up-alt',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_realestate_agent',
		'label'       => esc_html__( 'Menus Text Transform', 'realestate-agent' ),
		'section'     => 'realestate_agent_addtional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'realestate-agent' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'realestate-agent' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'realestate-agent' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'realestate-agent' ),

		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'realestate_agent_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'realestate-agent' ),
		'section'     => 'realestate_agent_addtional_settings',
		'default' => 'None',
		'placeholder' => esc_html__( 'Choose an option', 'realestate-agent' ),
		'choices'     => [
			'None' => __('None','realestate-agent'),
            'Zoominn' => __('Zoom Inn','realestate-agent'),
            
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'realestate_agent_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'realestate-agent' ),
		'section'     => 'realestate_agent_addtional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'realestate_agent_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'realestate-agent' ),
		'section'     => 'realestate_agent_addtional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'realestate_agent_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'realestate-agent' ),
		'section'     => 'realestate_agent_addtional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'realestate-agent' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','realestate-agent'),
            'Right Sidebar' => __('Right Sidebar','realestate-agent'),
            'One Column' => __('One Column','realestate-agent')
		],
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'realestate_agent_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'realestate-agent' ),
		'description'    => esc_html__( 'Shop Page', 'realestate-agent' ),
		'panel'          => 'realestate_agent_panel_id',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'realestate_agent_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'realestate-agent' ),
		'section'     => 'realestate_agent_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'realestate_agent_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'realestate-agent' ),
		'section'     => 'realestate_agent_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'realestate_agent_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'realestate-agent' ),
		'section'     => 'realestate_agent_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
	[
		'settings' => 'realestate_agent_per_columns',
		'label'    => esc_html__( 'Product Per Row', 'realestate-agent' ),
		'section'  => 'realestate_agent_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'realestate_agent_product_per_page',
		'label'    => esc_html__( 'Product Per Page', 'realestate-agent' ),
		'section'  => 'realestate_agent_woocommerce_settings',
		'default'  => 9,
		'choices'  => [
			'min'  => 1,
			'max'  => 15,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'realestate-agent' ),
		'section'  => 'realestate_agent_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'realestate-agent' ),
		'section'  => 'realestate_agent_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'realestate_agent_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'realestate-agent' ),
		'section'     => 'realestate_agent_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'realestate-agent' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','realestate-agent'),
            'Right Sidebar' => __('Right Sidebar','realestate-agent')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'realestate_agent_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'realestate-agent' ),
		'section'     => 'realestate_agent_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'realestate-agent' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','realestate-agent'),
            'Right Sidebar' => __('Right Sidebar','realestate-agent')
		],
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'realestate_agent_woocommerce_pagination_position',
		'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'realestate-agent' ),
		'section'     => 'realestate_agent_woocommerce_settings',
		'default'     => 'Center',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'realestate-agent' ),
			'Center' => esc_html__( 'Center', 'realestate-agent' ),
			'Right'  => esc_html__( 'Right', 'realestate-agent' ),
		],
	]
	);
}

	// POST SECTION

	Kirki::add_section( 'realestate_agent_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'realestate-agent' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'realestate-agent' ),
	    'panel'          => 'realestate_agent_panel_id',
	    'priority'       => 160,
	) );

		new \Kirki\Field\Sortable(
	[
		'settings' => 'realestate_agent_archive_element_sortable',
		'label'    => __( 'Archive Post Page element Reordering', 'realestate-agent' ),
		'section'  => 'realestate_agent_section_post',
		'default'  => [ 'option1', 'option2', 'option3' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Meta', 'realestate-agent' ),
			'option2' => esc_html__( 'Post Title', 'realestate-agent' ),
			'option3' => esc_html__( 'Post Content', 'realestate-agent' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_excerpt_post_heading',
		'section'     => 'realestate_agent_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text.', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'realestate_agent_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'realestate-agent' ),
		'section'     => 'realestate_agent_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'realestate_agent_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'realestate-agent' ),
		'section'     => 'realestate_agent_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'realestate_agent_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'realestate-agent' ),
		'section'     => 'realestate_agent_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'realestate-agent' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','realestate-agent'),
            'Right Sidebar' => __('Right Sidebar','realestate-agent')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'realestate_agent_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'realestate-agent' ),
		'section'     => 'realestate_agent_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'realestate-agent' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','realestate-agent'),
            'Right Sidebar' => __('Right Sidebar','realestate-agent')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'realestate_agent_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'realestate-agent' ),
		'section'     => 'realestate_agent_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'realestate-agent' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','realestate-agent'),
            'Right Sidebar' => __('Right Sidebar','realestate-agent')
		],
	] );

	Kirki::add_field( 'realestate_agent_config', [
		'type'        => 'select',
		'settings'    => 'realestate_agent_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'realestate-agent' ),
		'section'     => 'realestate_agent_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'realestate-agent' ),
				'2' => __( '2 Column', 'realestate-agent' ),
				'3' => __( '3 Column', 'realestate-agent' ),
				'4' => __( '4 Column', 'realestate-agent' ),
			],
	] );

	// HEADER SECTION

	Kirki::add_section( 'realestate_agent_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'realestate-agent' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'realestate-agent' ),
	    'panel'          => 'realestate_agent_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_email_address_heading',
		'section'     => 'realestate_agent_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'realestate_agent_header_email_address',
		'section'  => 'realestate_agent_section_header',
		'default'  => '',
		'priority' => 10,
		'partial_refresh'    => [
		'realestate_agent_header_email_address' => [
			'selector'        => '.top-header span',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_phone_number_heading',
		'section'     => 'realestate_agent_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'realestate_agent_header_phone_number',
		'section'  => 'realestate_agent_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_enable_search',
		'section'     => 'realestate_agent_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_search_box_enable',
		'section'     => 'realestate_agent_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
		'partial_refresh'    => [
		'realestate_agent_search_box_enable' => [
			'selector'        => '.header-search a',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_header_property_btn_heading',
		'section'     => 'realestate_agent_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Property Button', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'realestate-agent' ),
		'settings' => 'realestate_agent_header_property_btn_text',
		'section'  => 'realestate_agent_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'       => esc_html__( 'Link', 'realestate-agent' ),
		'settings' => 'realestate_agent_header_property_btn_link',
		'section'  => 'realestate_agent_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_enable_socail_link',
		'section'     => 'realestate_agent_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'realestate_agent_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'realestate-agent' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'realestate-agent' ),
		'settings'     => 'realestate_agent_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'realestate-agent' ),
				'description' => esc_html__( 'Add the social media text ex: fab fa-facebook-f.', 'realestate-agent' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'realestate-agent' ),
				'description' => esc_html__( 'Add the social icon url here.', 'realestate-agent' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
		'partial_refresh'    => [
		'realestate_agent_social_links_settings' => [
			'selector'        => '.social-links a i',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],

	] );

	// SLIDER SECTION

	Kirki::add_section( 'realestate_agent_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'realestate-agent' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'realestate-agent' ),
        'panel'          => 'realestate_agent_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_enable_heading',
		'section'     => 'realestate_agent_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_slide_title_enable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
		'partial_refresh'    => [
		'realestate_agent_slide_title_enable_disable' => [
			'selector'        => '.blog_box h3',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_slide_text_enable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_slide_button_enable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_slider_heading',
		'section'     => 'realestate_agent_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'realestate_agent_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'realestate_agent_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'realestate-agent' ),
		'priority'    => 10,
		'choices'     => realestate_agent_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_slider_text_heading_4',
		'section'     => 'realestate_agent_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Slider Text', 'realestate-agent' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'realestate_agent_excerpt_number',
		'label'       => esc_html__( 'Number of text to show', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => 20,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'realestate_agent_enable_heading_22',
	'section'     => 'realestate_agent_blog_slide_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content Alignment', 'realestate-agent' ) . '</h3>',
	'priority'    => 10,
] );


	new \Kirki\Field\Select(
	[
		'settings'    => 'realestate_agent_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => 'RIGHT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'realestate-agent' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'realestate-agent' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'realestate-agent' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'realestate-agent' ),

		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'realestate_agent_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => '0.6',
		'placeholder' => esc_html__( 'Choose an option', 'realestate-agent' ),
		'choices'     => [
			'0' => esc_html__( '0', 'realestate-agent' ),
			'0.1' => esc_html__( '0.1', 'realestate-agent' ),
			'0.2' => esc_html__( '0.2', 'realestate-agent' ),
			'0.3' => esc_html__( '0.3', 'realestate-agent' ),
			'0.4' => esc_html__( '0.4', 'realestate-agent' ),
			'0.5' => esc_html__( '0.5', 'realestate-agent' ),
			'0.6' => esc_html__( '0.6', 'realestate-agent' ),
			'0.7' => esc_html__( '0.7', 'realestate-agent' ),
			'0.8' => esc_html__( '0.8', 'realestate-agent' ),
			'0.9' => esc_html__( '0.9', 'realestate-agent' ),
			'1.0' => esc_html__( '1.0', 'realestate-agent' ),
			

		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_overlay_option',
		'label'       => esc_html__( 'Enable / Disable Slider Overlay', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );


	// PROPERTIES SECTION

	Kirki::add_section( 'realestate_agent_popular_section', array(
        'title'          => esc_html__( 'Properties Settings', 'realestate-agent' ),
        'description'    => esc_html__( 'You have to select category to show properties.', 'realestate-agent' ),
        'panel'          => 'realestate_agent_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_about_enable_heading',
		'section'     => 'realestate_agent_popular_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Properties', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_your_properties_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'realestate-agent' ),
		'section'     => 'realestate_agent_popular_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_properties_heading',
		'section'     => 'realestate_agent_popular_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Properties Section', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
		'partial_refresh'    => [
		'realestate_agent_properties_heading' => [
			'selector'        => '.properties h3',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Section Title', 'realestate-agent' ),
		'settings' => 'realestate_agent_section_title',
		'section'  => 'realestate_agent_popular_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Section Text', 'realestate-agent' ),
		'settings' => 'realestate_agent_section_text',
		'section'  => 'realestate_agent_popular_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Section Button Text', 'realestate-agent' ),
		'settings' => 'realestate_agent_section_btn_text',
		'section'  => 'realestate_agent_popular_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'       => esc_html__( 'Section Button Link', 'realestate-agent' ),
		'settings' => 'realestate_agent_section_btn_link',
		'section'  => 'realestate_agent_popular_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'realestate_agent_your_properties_number',
		'label'       => esc_html__( 'Number of properties to show', 'realestate-agent' ),
		'section'     => 'realestate_agent_popular_section',
		'default'     => '',
		'choices'     => [
			'min'  => 0,
			'max'  => 10,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'realestate_agent_your_properties_category',
		'label'       => esc_html__( 'Select the category to show properties', 'realestate-agent' ),
		'section'     => 'realestate_agent_popular_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'realestate-agent' ),
		'priority'    => 10,
		'choices'     => realestate_agent_get_categories_select(),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'realestate_agent_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'realestate-agent' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'realestate-agent' ),
        'panel'          => 'realestate_agent_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_footer_text_heading',
		'section'     => 'realestate_agent_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'realestate_agent_footer_text',
		'section'  => 'realestate_agent_footer_section',
		'default'  => '',
		'priority' => 10,
		'partial_refresh'    => [
		'realestate_agent_footer_text' => [
			'selector'        => '.copy-text p',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_footer_enable_heading',
		'section'     => 'realestate_agent_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'realestate-agent' ),
		'section'     => 'realestate_agent_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'realestate_agent_footer_text_heading_2',
	'section'     => 'realestate_agent_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'realestate-agent' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'realestate_agent_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'realestate-agent' ),
		'section'     => 'realestate_agent_footer_section',
		'default'     => 'CENTER-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'realestate-agent' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'realestate-agent' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'realestate-agent' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'realestate-agent' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'realestate_agent_footer_text_heading_1',
	'section'     => 'realestate_agent_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'realestate-agent' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'realestate_agent_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'realestate-agent' ),
		'section'     => 'realestate_agent_footer_section',
		'default'     => '',
	] );
}
