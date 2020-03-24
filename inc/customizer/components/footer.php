<?php
// Footer Section
$wp_customize->add_section('theme_footer', array(
    'title' => __('Theme Footer', 'mayur'),
    'description' => sprintf(__('Options to customize footer content', 'mayur')),
    'priority' => 102
));

// address 1
$wp_customize->add_setting('address1', array(
    'default' => _x('Pokhara, NP', 'mayur'),
    'type' => 'theme_mod',
    'transport'   => 'postMessage',
));
$wp_customize->add_control('address1', array(
    'label' => __('Primary Address', 'mayur'),
    'section' => 'theme_footer',
    'priority' => 7
));

// address 2
$wp_customize->add_setting('address2', array(
    'default' => _x('Rambazar - 10', 'mayur'),
    'type' => 'theme_mod',
    'transport'   => 'postMessage',
));
$wp_customize->add_control('address2', array(
    'label' => __('Secondary Address', 'mayur'),
    'section' => 'theme_footer',
    'priority' => 8
));

// contact number
$wp_customize->add_setting('contact', array(
    'default' => _x('+9779806632775', 'mayur'),
    'type' => 'theme_mod',
    'transport'   => 'postMessage',
));
$wp_customize->add_control('contact', array(
    'label' => __('Contact Number', 'mayur'),
    'section' => 'theme_footer',
    'priority' => 1
));

//email
$wp_customize->add_setting('email', array(
    'default' => _x('info@mayur.com', 'mayur'),
    'type' => 'theme_mod'
));
$wp_customize->add_control('email', array(
    'label' => __('Email Address', 'mayur'),
    'section' => 'theme_footer',
    'priority' => 2
));
?>