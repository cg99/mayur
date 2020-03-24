<!DOCTYPE html>
<html>
<head>
	<title>Mayur</title>
	<meta charset="<?php bloginfo('charset') ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
	<div class="mob-menu">
		<img class="mobile-menu_close" src="<?php echo get_theme_file_uri(); ?>/dist/img/close.png">	
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