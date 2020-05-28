<?php
// Advertisement
$wp_customize->add_section('advertisement', array(
    'title' => __('Advertisement', 'mayur'),
    'description' => sprintf(__('Place ads in different locations of the site', 'mayur')),
    'priority' => 101
));

// homepage ad 1
for($i = 1; $i <= 24; $i++){
    $wp_customize->add_setting('home_ad_'.$i, array(
        'default' => get_bloginfo('template_directory').'/dist/img/a.gif',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_ad_'.$i, array(
        'label' => __('Advertisement '.$i, 'mayur'),
        'section' => 'advertisement',
        'settings' => 'home_ad_'.$i,
        'priority' => 0 + $i
    )));
}
?>