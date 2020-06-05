<?php    
    $wp_customize->add_section('theme_header', array(
		'title' => __('Theme Header', 'mayur'),
		'description' => sprintf(__('Customize Header of this theme', 'mayur')),
		'priority' => 100
	));
	// header banner
	$wp_customize->add_setting('header', array(
		'default' => get_bloginfo('template_directory').'/dist/img/leaderboard.png',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header', array(
		'label' => __('Header Image', 'mayur'),
		'section' => 'theme_header',
		'settings' => 'header',
		'priority' => 4
	)));

    // logo
	$wp_customize->add_setting('logo', array(
		'default' => get_bloginfo('template_directory').'/dist/img/logo.png',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
		'label' => __('Logo', 'mayur'),
		'section' => 'theme_header',
		'settings' => 'logo',
		'priority' => 5
	)));

	// news ticker options
	$wp_customize->add_setting('ticker', array(
		'default' => _x(true, 'mayur'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('ticker', array(
		'label' => __('Show Trending', 'mayur'),
		'section' => 'theme_header',
		'type' => 'radio',
		'priority' => 6,
		'choices' => array(
		    'show' => 'Show',
		    'hide' => 'Hide',
		)
	));
	
	$wp_customize->add_section('site-colors', array(
        'title' => __('change site colors', 'mayur'),
        'panel' => 'site-settings',
        'priority' => 160,
	));
	$wp_customize->add_setting('colors', array(
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('colors', array(
		'label' => __('Show Trending', 'mayur'),
		'section' => 'site-colors',
		'priority' => 6,	
	));
    
?>