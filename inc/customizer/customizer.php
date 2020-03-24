<?php 

add_action( 'customize_register', 'themeCustomizer' );
function themeCustomizer($wp_customize)
{
	// advertisement section
	include get_theme_file_path('/inc/customizer/components/advertisement.php');

	// header section
	include get_theme_file_path('/inc/customizer/components/header.php');

	// footer section
	include get_theme_file_path('/inc/customizer/components/footer.php');

	// social section
	include get_theme_file_path('/inc/customizer/components/social.php');

	// homepage display post by category section
	include get_theme_file_path('/inc/customizer/components/dropdown-category.php');

}



?>