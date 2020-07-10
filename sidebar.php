<!-- sidebar -->
<div class="single-sidebar">
	<div class="wrapper">
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
			<div id="sidebar-one">
				<?php dynamic_sidebar('sidebar-1'); ?>
			</div>
		<?php } ?>
	</div>
	<div class="group-heading">
		<h3>
			<?php 
                $cat = get_theme_mod('side_category_5');
                $cat = get_category($cat);
                $cat_post = $cat->slug;  
                echo $cat->name;
                
            ?>
			<!-- Popular Posts -->
		</h3>
	</div>
	<div class="sidebar">
		<div class="popular-post-container">
			<div class="post-group popular-post">
				<?php 
				// pull 4 posts 
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => '4',
						'category_name' => $cat_post,
					);
					$query = new WP_Query( $args );
				?>
				
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php 
					if(!is_sticky()) {
						get_template_part('template-parts/posts/post', 'article');
					} 
				?>

				<?php endwhile; wp_reset_postdata(); else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div id="sidebar-two">
				<?php dynamic_sidebar('sidebar-2'); ?>
			</div>
		<?php } ?>
	</div>
</div>