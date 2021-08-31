<?php
// Social Links
$wp_customize->add_section('social_link', array(
    'title' => __('Social Links', 'mayur'),
    'description' => sprintf(__('Social Media Links', 'mayur')),
    'priority' => 107
));

//social instagram
$wp_customize->add_setting('socialInstagram', array(
    'default' => _x('https://www.instagram.com/um_es/', 'mayur'),
    'type' => 'theme_mod'
));
$wp_customize->add_control('socialInstagram', array(
    'label' => __('Intagram', 'mayur'),
    'section' => 'social_link',
    'priority' => 9
));

//social Facebook
$wp_customize->add_setting('socialFacebook', array(
    'default' => _x('https://www.facebook.com/Lafa.umes', 'mayur'),
    'type' => 'theme_mod'
));
$wp_customize->add_control('socialFacebook', array(
    'label' => __('Facebook', 'mayur'),
    'section' => 'social_link',
    'priority' => 10
));

//social Youtube
$wp_customize->add_setting('socialYoutube', array(
    'default' => _x('youtube.com/umessgm', 'mayur'),
    'type' => 'theme_mod'
));
$wp_customize->add_control('socialYoutube', array(
    'label' => __('Youtube', 'mayur'),
    'section' => 'social_link',
    'priority' => 11
));

//social Twitter
$wp_customize->add_setting('socialTwitter', array(
    'default' => _x('twitter.com/umessgm', 'mayur'),
    'type' => 'theme_mod'
));
$wp_customize->add_control('socialTwitter', array(
    'label' => __('Twitter', 'mayur'),
    'section' => 'social_link',
    'priority' => 12
));
?>