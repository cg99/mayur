<?php 
require get_theme_file_path('/inc/customizer/customizer.php');

require get_theme_file_path('/inc/posts-route.php');


	add_action( 'wp_enqueue_scripts', 'startingScript' );
	function startingScript() {
		wp_enqueue_script( 'use_jquery', get_template_directory_uri() . '/src/assets/js/dependencies/timeago.js', array('jquery') );
		
		wp_enqueue_script( 'js_app', get_theme_file_uri('/dist/script.js'), NULL, microtime(), true ); //true is to show it in footer.

		wp_enqueue_script( 'js_depend', get_theme_file_uri('/src/assets/js/dependencies/timeago.js'), NULL, microtime(), true );
		
		wp_enqueue_style( 'css_app', get_template_directory_uri().'/dist/app.css', NULL, microtime() );

		wp_enqueue_style( 'font_awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

		wp_enqueue_style( 'remix_icons', '//cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css' );

		wp_localize_script( 'js_app', 'mayur', array(
			'root_url' => site_url(),
			'nonce' => wp_create_nonce( 'wp_rest' )
		));
	}


	add_theme_support( 'post-thumbnails' );


	/* add multiple widgets areas */
	function widget_registration($name, $id, $description,$beforeWidget, $afterWidget, $beforeTitle, $afterTitle){
		register_sidebar( array(
			'name' => $name,
			'id' => $id,
			'description' => $description,
			'before_widget' => $beforeWidget,
			'after_widget' => $afterWidget,
			'before_title' => $beforeTitle,
			'after_title' => $afterTitle,
		));
	}
	
	function multiple_widget_init(){
		widget_registration('Sidebar Widget 1', 'sidebar-1', '', '', '', '<div class="group-heading">
		<h3>', '</h3></div>');
		widget_registration('Footer widget 1', 'footer-sidebar-1', '', '', '', '<h2 class="footer-widget-title">', '</h2>');
		widget_registration('Footer widget 2', 'footer-sidebar-2', '', '', '', '<h2 class="footer-widget-title">', '</h2>');
		widget_registration('Footer widget 3', 'footer-sidebar-3', '', '', '', '<h2 class="footer-widget-title">', '</h2>');
	}
	
	add_action('widgets_init', 'multiple_widget_init');


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


	// add other panels in customizer
	// add_theme_support( 'custom-header' );
	// add_theme_support( 'custom-background' );


	// login page custom css
	// for creating custom url in logo of login page
	function loginHeaderURL()
	{
		return esc_url(site_url('/'));
	}

	// for adding css in login page
	function loginCSS()
	{
		wp_enqueue_style( 'mayur_stylesheet', get_stylesheet_uri() );
		wp_enqueue_style( 'google_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
	}

	// for changing main title of login page
	function loginTitle()
	{
		return get_bloginfo('name');
	}
	add_filter( 'login_headerurl', 'loginHeaderURL' );
	add_action('login_enqueue_scripts', 'loginCSS');
	add_filter( 'login_headertext', 'loginTitle' );

	
	//1. Add a new form element...
	add_action( 'register_form', 'myplugin_register_form' );
	function myplugin_register_form() {

		$first_name = ( ! empty( $_POST['first_name'] ) ) ? sanitize_text_field( $_POST['first_name'] ) : '';
			
		?>
		<p>
			<label for="first_name"><?php _e( 'First Name', 'mydomain' ) ?><br />
				<input type="text" name="first_name" id="first_name" class="input" value="<?php echo esc_attr(  $first_name  ); ?>" size="25" /></label>
		</p>
		<?php
	}

	//2. Add validation. In this case, we make sure first_name is required.
	add_filter( 'registration_errors', 'myplugin_registration_errors', 10, 3 );
	function myplugin_registration_errors( $errors, $sanitized_user_login, $user_email ) {
		
		if ( empty( $_POST['first_name'] ) || ! empty( $_POST['first_name'] ) && trim( $_POST['first_name'] ) == '' ) {
		$errors->add( 'first_name_error', sprintf('<strong>%s</strong>: %s',__( 'ERROR', 'mydomain' ),__( 'You must include a first name.', 'mydomain' ) ) );

		}

		return $errors;
	}

	//3. Finally, save our extra registration user meta.
	add_action( 'user_register', 'myplugin_user_register' );
	function myplugin_user_register( $user_id ) {
		if ( ! empty( $_POST['first_name'] ) ) {
			update_user_meta( $user_id, 'first_name', sanitize_text_field( $_POST['first_name'] ) );
		}
	}

?>