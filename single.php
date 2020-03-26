
		<?php get_header() ?>
		<div id="app">
			<div class="middle">
			    <main class="main">
		      		<!-- banner advertisement -->
		      		<?php get_template_part('template-parts/ads/ads', 'banner');?>

			      <section class="main-content">
				  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="single-post">
							<figure>
								<img src="<?php the_post_thumbnail_url('large') ?>" alt="thumbnail">
							</figure>

							<h3 class="single-post-title"><?php the_title(); ?></h3>

							<div class="single-post-date">
								<?php echo get_the_date(); ?>
							</div>
							
							<div class="single-content">
								<?php the_content(); ?>
							</div>
					</article>
							
					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
					
			      </section>

			    </main>
			</div>
		</div>
		<?php //get_sidebar() ?>
		<?php get_footer() ?>