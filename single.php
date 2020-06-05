
		<?php get_header() ?>
		<div id="app">
			<div class="middle">
			    <main class="main">
		      		<!-- banner advertisement -->
		      		<?php // get_template_part('template-parts/ads/ads', 'banner');?>

			      	<section class="single-container">
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

							<div class="separator"></div>

							<div class="other-posts">
								<div class="prev-post">
									<?php previous_post_link( '<div>Previous </div><strong>%link</strong>' ); ?> 
								</div>
								<div class="next-post">
									<?php next_post_link( '<div>Next </div><strong>%link</strong>' ); ?> 
								</div>
							</div>
							
							<!-- post group 4 -->
							<div class="group-container">
								<div class="group">
									<div class="group-heading">
										<h3>Related News</h3>
									</div>
									<div class="post-group" id="group4">
										<?php 
										// pull 3 posts 
											$args = array(
												'post_type' => 'post',
												'posts_per_page' => '3'
											);
											$query = new WP_Query( $args );
										?>
										
										<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

											<?php get_template_part('template-parts/posts/post', 'article'); ?>

										<?php endwhile; wp_reset_postdata(); else: ?>
										<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
										<?php endif; ?>
									</div>
								</div>
							</div>

							<div class="separator"></div>
							
							<div>
								<?php
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								?>
							</div>		
						</article>	
						<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>

						<!-- sidebar -->
						<div class="single-sidebar">
							<div class="bigyapan">
								<figure>
									<!-- <figcaption class="">- Advertisement -</figcaption>      -->
									<img src="<?php echo get_theme_file_uri(); ?>/dist/img/post_img.png" alt="Bigyapan">
								</figure>
							</div>
							<div class="group-heading">
								<h3>Popular Posts</h3>
							</div>
							<div class="sidebar">
								<div class="popular-post-container">
									<div class="post-group popular-post">
										<?php 
										// pull 4 posts 
											$args = array(
												'post_type' => 'post',
												'posts_per_page' => '4'
											);
											$query = new WP_Query( $args );
										?>
										
										<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

											<?php get_template_part('template-parts/posts/post', 'article'); ?>

										<?php endwhile; wp_reset_postdata(); else: ?>
										<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
			      	</section>
			    </main>
			</div>
		</div>
		<?php get_footer() ?>