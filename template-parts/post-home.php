<div>
	<!-- main posts -->
	<h1 class="post-header">Latest Updates</h1>
	<div class="post-container" id="postHome">
		<?php 
		// pull 5 posts 
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => '5'
			);
			$query = new WP_Query( $args );
		?>
		
    	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

			<?php get_template_part('template-parts/post', 'article'); ?>

		<?php endwhile; wp_reset_postdata(); else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	
	</div>

	<hr>

    <!-- category post -->
	<h1> Local</h1>
	<div class="post-container">
		<?php 
		// pull 5 posts 
			$cat = get_theme_mod('category_1');
			$cat = get_category($cat);
			$cat_post = $cat->name;

			$args = array(
				'post_type' => 'post',
				'category_name' => $cat_post,
				'posts_per_page' => '5'
			);
			$query = new WP_Query( $args );
		?>
		
    	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

			<?php get_template_part('template-parts/post', 'article'); ?>

		<?php endwhile; wp_reset_postdata(); else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	
	</div>

	<hr>

    <!-- category post -->
	<h1>International</h1>
	<div class="post-container">
		<?php 
		// pull 5 posts 
			$cat = get_theme_mod('category_2');
			$cat = get_category($cat);
			$cat_post = $cat->name;

			$args = array(
				'post_type' => 'post',
				'category_name' => $cat_post,
				'posts_per_page' => '5'
			);
			$query = new WP_Query( $args );
		?>
		
    	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

			<?php get_template_part('template-parts/post', 'article'); ?>

		<?php endwhile; wp_reset_postdata(); else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	
	</div>
</div>