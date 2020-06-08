<?php
// Advertisement
$wp_customize->add_panel( 'advertisement', array(
    'title' => __( 'Advertisement', 'mayur'),
    'description' => sprintf(__('Add ads to different sections on the page.')),
    'priority' => 100, 
  ) );

// homepage ads loop 1-20 is for main section and 20-32 is for others
$k = 1;
for($i = 1; $i <= 16; $i++){
    $wp_customize->add_section('advertisement'.$i, array(
        'title' => __('Ad Group '.$i, 'mayur'),
        'panel' => 'advertisement',
        'priority' => 160 + $k,
    ));
    for($j = 1; $j <= 2; $j++){
        // Ad image
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

        //Ad duration
        $wp_customize->add_setting('ad_expiry_date_'.$k, array(
            'default' => _x('none', 'mayur'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('ad_expiry_date_'.$k, array(
            'label' => __('Expiry Date for ad '.$k, 'mayur'),
            'section' => 'advertisement'.$i,
            'settings' => 'ad_expiry_date_'.$k,
            'priority' => 0 + $k,
            'type' => 'date'
        ));

        $k=$k+1;
    }
}

?>