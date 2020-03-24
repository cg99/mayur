<?php

class My_Dropdown_Category_Control extends WP_Customize_Control {

	public $type = 'dropdown-category';

	protected $dropdown_args = false;

	protected function render_content() {
		?><label><?php

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
    'title' => esc_html_x( 'Home Post Category', 'customizer section title', 'mayur' ),
) );

$wp_customize->add_setting( 'category_1', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'category_1', array(
    'section'       => 'home_post_category',
    'label'         => esc_html__( 'First Space', 'mayur' ),
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
    'label'         => esc_html__( 'Second Space', 'mayur' ),
    'description'   => esc_html__( 'Select the category that the slider will show posts from.', 'mayur' ),
) ) );

?>