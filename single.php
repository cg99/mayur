
		<?php get_header() ?>
		<div id="single">
			<div class="middle">
			    <main class="main">
			      	<!-- banner advertisement -->
		      		<div style="margin: auto">
						<section class="advertise">
					    	<figure>
					      		<img src="<?php echo get_theme_mod('home_ads', 'default'); ?>">
					      		<figcaption class="hidden">Advertisement</figcaption>     
					    	</figure>
					  	</section>
					</div>

			      <section class="main-content">
				  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article>
						<div id="postID">
							<img src="<?php the_post_thumbnail_url('large') ?>" alt="thumbnail">

							<h3><?php the_title(); ?></h3>

							<div class="post-date">
								<?php echo get_the_date(); ?>
							</div>
							
							<div class="single-content">
								<?php the_content(); ?>
							</div>

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