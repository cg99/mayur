<?php
// Advertisement
$wp_customize->add_section('advertisement', array(
    'title' => __('Advertisement', 'mayur'),
    'description' => sprintf(__('Place ads in different locations of the site', 'mayur')),
    'priority' => 101
));

// homepage ads
$wp_customize->add_setting('home_ads', array(
    'default' => get_bloginfo('template_directory').'/dist/img/a.gif',
    'type' => 'theme_mod'
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_ads', array(
    'label' => __('Body Top Banner', 'mayur'),
    'section' => 'advertisement',
    'settings' => 'home_ads',
    'priority' => 3
)));
?>