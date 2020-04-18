<?php 
require get_theme_file_path('/inc/nepali_calendar/nepali_calendar.php');

require get_theme_file_path('/inc/customizer/customizer.php');

require get_theme_file_path('/inc/posts-route.php');

// require get_theme_file_path('/inc/theme-options.php');


	add_action( 'wp_enqueue_scripts', 'startingScript' );
	function startingScript() {
		wp_enqueue_script( 'use_jquery', get_template_directory_uri() . '/src/assets/js/dependencies/timeago.js', array('jquery') );
		
		wp_enqueue_script( 'js_app', get_theme_file_uri('/dist/script.js'), NULL, microtime(), true ); //true is to show it in footer.

		wp_enqueue_script( 'js_depend', get_theme_file_uri('/src/assets/js/dependencies/timeago.js'), NULL, microtime(), true );
		
		wp_enqueue_style( 'css_app', get_stylesheet_directory_uri().'/dist/app.css', NULL, microtime() );

		wp_enqueue_style( 'font_awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

		// for nepali date
		$cal = new Nepali_Calendar();
		$day = date("d");
		$month = date("m");
		$year = date("Y");

		wp_localize_script( 'js_app', 'mayur', array(
			'root_url' => get_site_url(),
			'np_date' => $cal->eng_to_nep($year, $month, $day),
			'nonce' => wp_create_nonce( 'wp_rest' )
		));
	}


	add_theme_support( 'post-thumbnails' );


	// add_action( 'rest_api_init', 'add_field_to_JSON' );
	// function add_field_to_JSON() {
	// 	//Add featured image thumbnail
	// 	register_rest_field( 
	// 	    'post', // Where to add the field (Here, blog posts. Could be an array)
	// 	    'featured_image_thumb', // Name of new field (You can call this anything)
	// 	    array(
	// 	        'get_callback'    => 'get_image_thumbnail',
	// 	        'update_callback' => null,
	// 	        'schema'          => null,
	// 	    )
	// 	);
	// 	//Add featured image full size
	// 	register_rest_field( 'post', 'featured_image_full', 
	// 		array(
	// 		'get_callback' => 'get_image_full' //leave the parameter empty
	// 	    )
	// 	);
	// 	//Add category name
	// 	register_rest_field( 'post', 'category_name', 
	// 		array(
	// 		'get_callback' => function() {return get_the_category();} //leave the parameter empty
	// 	    ));
	// 	//Add nepali date
	// 	register_rest_field( 'post', 'npDate', 
	// 		array(
	// 		'get_callback' => 'get_post_np_date' //leave the parameter empty
	// 	    )
	// 	);
	// }
	// function get_image_thumbnail( $object, $field_name, $request ) {
	//   	$feat_img_array = wp_get_attachment_image_src(
	//     	$object['featured_media'], // Image attachment ID
	//     	'medium',  // Size.  Ex. "thumbnail", "large", "full", etc..
	//     	true // Whether the image should be treated as an icon.
	//   	);
	//   	return $feat_img_array[0];
	// }
	// function get_image_full( $object, $field_name, $request ) {
	//   	$feat_img_array = wp_get_attachment_image_src(
	//     	$object['featured_media'], // Image attachment ID
	//     	'',  // Size.  Ex. "thumbnail", "large", "full", etc..
	//     	false // Whether the image should be treated as an icon.
	//   	);
	//   	return $feat_img_array[0];
	// }
	// function get_post_np_date( $dt ) {
	// 	$day = get_the_date("d");
	// 	$month = get_the_date("m");
	// 	$year = get_the_date("Y");

	// 	$date = new Nepali_Calendar();

	// 	$dt = $date->eng_to_nep($year, $month, $day);

	//   	return $dt;
	// }
 


 /**
 * Register our sidebars and widgetized areas.
 *
 */
	add_action( 'widgets_init', 'arphabet_widgets_init' );
	function arphabet_widgets_init() {
		register_sidebar( array(
			'name'          => 'Single right sidebar',
			'id'            => 'single_right_1',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		) );
	}


	// live preview for cutomizer
	add_action( 'customize_preview_init', 'mayur_customizer_live_preview' );
	function mayur_customizer_live_preview()
	{
		wp_enqueue_script( 
			  'mayur-themecustomizer',			//Give the script an ID
			  get_template_directory_uri().'/inc/customizer/customizer.js',//Point to file
			  array( 'jquery','customize-preview' ),	//Define dependencies
			  '',						//Define a version (optional) 
			  true						//Put script in footer?
		);
	}

	// navigation menu
	add_action( 'init', 'register_head_menus' );
	function register_head_menus() {
		register_nav_menus(
		  array(
			'header-menu' => __( 'Header Menu' ),
		   )
		 );
	   }

	// excerpt length
	function wpdocs_custom_excerpt_length( $length ) {
		return 32;
	}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

	// remove url comment field
	function remove_website_field($fields) {
		unset($fields['url']);
		return $fields;
	}
	add_filter('comment_form_default_fields', 'remove_website_field');
	
?>