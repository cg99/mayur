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

?>