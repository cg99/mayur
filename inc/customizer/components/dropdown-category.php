<?php

class My_Dropdown_Category_Control extends WP_Customize_Control {

	public $type = 'dropdown-category';

	protected $dropdown_args = false;

	protected function render_content() { ?>
    <label>
    <?php
		if ( ! empty( $this->label ) ) :
			?><span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span><?php
		endif;

		if ( ! empty( $this->description ) ) :
			?><span class="description customize-control-description"><?php echo $this->description; ?></span><?php
		endif;

		$dropdown_args = wp_parse_args( $this->dropdown_args, array(
			'taxonomy'          => 'category',
			'show_option_none'  => ' ',
			'selected'          => $this->value(),
			'show_option_all'   => '',
			'orderby'           => 'id',
			'order'             => 'ASC',
			'show_count'        => 1,
			'hide_empty'        => 1,
			'child_of'          => 0,
			'exclude'           => '',
			'hierarchical'      => 1,
			'depth'             => 0,
			'tab_index'         => 0,
			'hide_if_empty'     => false,
			'option_none_value' => 0,
			'value_field'       => 'term_id',
		) );

		$dropdown_args['echo'] = false;

		$dropdown = wp_dropdown_categories( $dropdown_args );
		$dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
		echo $dropdown;

		?></label><?php

	}
}

$wp_customize->add_section( 'home_post_category', array(
    'title' => esc_html_x( 'Group Post Category', 'customizer section title', 'mayur' ),
) );

// 1st group by category
$wp_customize->add_setting( 'category_1', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'category_1', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( 'Featured Group', 'mayur' ),
    'description'   => esc_html__( 'Select the category that the slider will show posts from.', 'mayur' ),
    // Uncomment to pass arguments to wp_dropdown_categories()
    //'dropdown_args' => array(
    //	'taxonomy' => 'post_tag',
    //),
) ) );

//2nd posts by category
$wp_customize->add_setting( 'category_2', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'category_2', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( 'Second Group', 'mayur' ),
    'description'   => esc_html__( 'Select the category.', 'mayur' ),
) ) );

//3rd posts by category
$wp_customize->add_setting( 'category_3', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'category_3', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( 'Third Group', 'mayur' ),
    'description'   => esc_html__( 'Select the category.', 'mayur' ),
) ) );

//4th posts by category
$wp_customize->add_setting( 'category_4', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'category_4', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( 'Fourth Group', 'mayur' ),
    'description'   => esc_html__( 'Select the category', 'mayur' ),
) ) );

//5th posts by category
$wp_customize->add_setting( 'category_5', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'category_5', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( 'Fifth Group', 'mayur' ),
    'description'   => esc_html__( 'Select the category.', 'mayur' ),
) ) );

//6th posts by category
$wp_customize->add_setting( 'category_6', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'category_6', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( 'Sixth Group', 'mayur' ),
    'description'   => esc_html__( 'Select the category.', 'mayur' ),
) ) );

//7th posts by category
$wp_customize->add_setting( 'category_7', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'category_7', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( 'Seventh Group', 'mayur' ),
    'description'   => esc_html__( 'Select the category.', 'mayur' ),
) ) );

//8th posts by category
$wp_customize->add_setting( 'category_8', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'category_8', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( 'Eight Group', 'mayur' ),
    'description'   => esc_html__( 'Select the category.', 'mayur' ),
) ) );



//1st sidebar posts by category
$wp_customize->add_setting( 'side_category_1', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'side_category_1', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( '1 Sidebar Group', 'mayur' ),
    'description'   => esc_html__( 'Select the category.', 'mayur' ),
) ) );

//2nd sidebar posts by category
$wp_customize->add_setting( 'side_category_2', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'side_category_2', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( '2 Sidebar Group', 'mayur' ),
    'description'   => esc_html__( 'Select the category.', 'mayur' ),
) ) );

//3rd sidebar posts by category
$wp_customize->add_setting( 'side_category_3', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'side_category_3', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( '3 Sidebar Group', 'mayur' ),
    'description'   => esc_html__( 'Select the category.', 'mayur' ),
) ) );

//4th sidebar posts by category
$wp_customize->add_setting( 'side_category_4', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'side_category_4', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( '4 Sidebar Group', 'mayur' ),
    'description'   => esc_html__( 'Select the category.', 'mayur' ),
) ) );

//5th sidebar posts by category
$wp_customize->add_setting( 'side_category_5', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'side_category_5', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( '5 Sidebar Group', 'mayur' ),
    'description'   => esc_html__( 'Select the category.', 'mayur' ),
) ) );
?>