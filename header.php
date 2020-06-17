<!DOCTYPE html>
<html>
<head>
	<title>
		<?php bloginfo('name'); ?> - 
		<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
	</title>
	<meta charset="<?php bloginfo('charset') ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
	<div class="mob-menu">
		<span class="mobile-menu_close"><i class="ri-close-circle-line"></i></span>
		<?php 
			wp_nav_menu(
				array(
				'menu' => 'primary',
				'theme_location' => 'header-menu',
				'menu_class' => 'mobile-menu_items',
				'container' => '',
				'link_before' => '',
				'link_after' => '',
				)
			);
		?>
	</div>
	<div class="grid-container">
		<header class="navigation">
			
			<?php get_template_part('template-parts/header/header', 'top');?>

			<?php get_template_part('template-parts/header/header', 'logo');?>

			<div class="main-nav">
				<?php get_template_part('template-parts/header/header', 'nav');?>
				
				<?php if(get_theme_mod('ticker') == 'show') { ?>

					<?php get_template_part('template-parts/header/header', 'tick');?>

				<?php } ?>
			</div>
		</header>