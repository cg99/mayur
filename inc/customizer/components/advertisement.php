<?php
// Advertisement
$wp_customize->add_panel( 'advertisement', array(
    'title' => __( 'Advertisement', 'mayur'),
    'description' => sprintf(__('Add ads to different sections on the page.')),
    'priority' => 100, 
  ) );

// homepage ads loop
$k = 1;
for($i = 1; $i <= 10; $i++){
    $wp_customize->add_section('advertisement'.$i, array(
        'title' => __('Ad Group '.$i, 'mayur'),
        'panel' => 'advertisement',
        'priority' => 160 + $k,
    ));
    for($j = 1; $j <= 2; $j++){
        $wp_customize->add_setting('home_ad_'.$k, array(
            'default' => get_bloginfo('template_directory').'/dist/img/a.gif',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_ad_'.$k, array(
            'label' => __('Advertisement '.$k, 'mayur'),
            'section' => 'advertisement'.$i,
            'settings' => 'home_ad_'.$k,
            'priority' => 0 + $k
        )));
        $k=$k+1;
    }
}

?>