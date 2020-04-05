<div>

	<?php get_template_part('template-parts/groups/group', '1'); ?> <!-- group 1 -->


	<?php get_template_part('template-parts/groups/group', '2'); ?> <!-- group 2 -->
	

	<?php get_template_part('template-parts/groups/group', '3'); ?> <!-- group 3 -->


	<?php get_template_part('template-parts/groups/group', '4'); ?> <!-- group 4 -->


	<div style="display:flex;width:100%;justify-content:center;justify-items:center;height:40rem;margin:auto;">
		<p style="align-self: center;">SEPARATOR</p>
	</div>


	<!-- latest posts -->
	<!-- <h2>Latest</h2>
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

			<?php get_template_part('template-parts/posts/post', 'article'); ?>

		<?php endwhile; wp_reset_postdata(); else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	
	</div>
			
	<hr> -->

    <!-- category post -->
	<!-- <h2> Local</h2>
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

			<?php get_template_part('template-parts/posts/post', 'article'); ?>

		<?php endwhile; wp_reset_postdata(); else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	
	</div>

	<hr> -->

    <!-- category post -->
	<!-- <h2>International</h2>
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

			<?php get_template_part('template-parts/posts/post', 'article'); ?>

		<?php endwhile; wp_reset_postdata(); else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	
	</div> -->
</div>