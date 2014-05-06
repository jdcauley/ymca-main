<?php
/**
 * Custom functions
 */

function ymca_branches() {
  register_post_type( 'branches',
		array(
			'labels' => array(
				'name' => __( 'YMCA Branches' ),
				'singular_name' => __( 'YMCA Branch Posts' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title','thumbnail', 'custom-fields'),
		'taxonomies' => array('category'),
		)
	);
}
add_action( 'init', 'ymca_branches' );


/* Customizer */

function ymca_main_customize_register($wp_customize){

    $wp_customize->add_section('ymca_logo_settings', array(
        'title'    => __('Site Logo', 'ymca_main'),
        'priority' => 120,
    ));

    $wp_customize->add_section('ymca_social_settings', array(
        'title'    => __('Social Links', 'ymca_main'),
        'priority' => 120,
    ));

    //  =============================
    //  = Site Logo                 =
    //  =============================
    $wp_customize->add_setting( 'ymca_main_logo' );

    $wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize,
        'ymca_main_logo',
          array(
            'label' => 'Logo Upload',
            'section' => 'ymca_logo_settings',
            'settings' => 'ymca_main_logo'
          )
        )
      );


    //  =============================
    //  = Social Links              =
    //  =============================

    $wp_customize->add_setting('ymca_main_twitter', array(
        'default'        => '',
    ));

    $wp_customize->add_control('ymca_main_twitter', array(
        'label'      => 'Twitter URL',
        'section'    => 'ymca_social_settings',
        'settings'   => 'ymca_main_twitter',
    ));

    $wp_customize->add_setting('ymca_main_facebook', array(
        'default'        => '',
    ));

    $wp_customize->add_control('ymca_main_facebook', array(
        'label'      => 'Facebook URL',
        'section'    => 'ymca_social_settings',
        'settings'   => 'ymca_main_facebook',
    ));

    $wp_customize->add_setting('ymca_main_linkedin', array(
        'default'        => '',
    ));

    $wp_customize->add_control('ymca_main_linkedin', array(
        'label'      => 'Linkedin URL',
        'section'    => 'ymca_social_settings',
        'settings'   => 'ymca_main_linkedin',
    ));

    $wp_customize->add_setting('ymca_main_youtube', array(
        'default'        => '',
    ));

    $wp_customize->add_control('ymca_main_youtube', array(
        'label'      => 'Youtube URL',
        'section'    => 'ymca_social_settings',
        'settings'   => 'ymca_main_youtube',
    ));

    $wp_customize->add_setting('ymca_main_plus', array(
        'default'        => '',
    ));

    $wp_customize->add_control('ymca_main_plus', array(
        'label'      => 'Google+ URL',
        'section'    => 'ymca_social_settings',
        'settings'   => 'ymca_main_plus',
    ));

    $wp_customize->add_setting('ymca_main_phone', array(
        'default'        => '',
    ));

    $wp_customize->add_control('ymca_main_phone', array(
        'label'      => 'Header Phone Number',
        'section'    => 'ymca_social_settings',
        'settings'   => 'ymca_main_phone',
    ));

    $wp_customize->add_setting('ymca_main_btn_menu_title', array(
        'default'        => '',
    ));

    $wp_customize->add_control('ymca_main_btn_menu_title', array(
        'label'      => 'Button Menu Title',
        'section'    => 'ymca_social_settings',
        'settings'   => 'ymca_main_btn_menu_title',
    ));

  /*

    //  =============================
    //  = Radio Input               =
    //  =============================
    $wp_customize->add_setting('ymca_main_theme_options[color_scheme]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control('ymca_main_color_scheme', array(
        'label'      => __('Color Scheme', 'ymca_main'),
        'section'    => 'ymca_main_color_scheme',
        'settings'   => 'ymca_main_theme_options[color_scheme]',
        'type'       => 'radio',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));

    //  =============================
    //  = Checkbox                  =
    //  =============================
    $wp_customize->add_setting('ymca_main_theme_options[checkbox_test]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control('display_header_text', array(
        'settings' => 'ymca_main_theme_options[checkbox_test]',
        'label'    => __('Display Header Text'),
        'section'  => 'ymca_main_color_scheme',
        'type'     => 'checkbox',
    ));


    //  =============================
    //  = Select Box                =
    //  =============================
     $wp_customize->add_setting('ymca_main_theme_options[header_select]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));
    $wp_customize->add_control( 'example_select_box', array(
        'settings' => 'ymca_main_theme_options[header_select]',
        'label'   => 'Select Something:',
        'section' => 'ymca_main_color_scheme',
        'type'    => 'select',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));






    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('ymca_main_theme_options[link_color]', array(
        'default'           => '000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'ymca_main'),
        'section'  => 'ymca_main_color_scheme',
        'settings' => 'ymca_main_theme_options[link_color]',
    )));


    //  =============================
    //  = Page Dropdown             =
    //  =============================
    $wp_customize->add_setting('ymca_main_theme_options[page_test]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('ymca_main_page_test', array(
        'label'      => __('Page Test', 'ymca_main'),
        'section'    => 'ymca_main_color_scheme',
        'type'    => 'dropdown-pages',
        'settings'   => 'ymca_main_theme_options[page_test]',
    ));

  */
}

add_action('customize_register', 'ymca_main_customize_register');
