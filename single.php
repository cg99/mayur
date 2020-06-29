
		<?php get_header() ?>
		<div id="app">
			<div class="middle">
			    <main class="main">
		      		<!-- banner advertisement -->
		      							
			      	<section class="single-container">
				  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="single-post">

							<div class="single-category">
								<?php 
					            $colors = array("#00b9eb", "#f44", "#ff8922", "#ee6f00", "#d00", "#008b8b", "#444", "#00ff7f");
								$categories = get_the_category();
								if($categories[0]->name !== 'Uncategorized'){ 
									$count = 0;
									foreach($categories as $category){ 
									$color_num = rand(0, 7); ?>
									<span style="background-color: <?php echo $colors[$color_num]; ?>">
										<?php echo $category->name; $count++ ; if($count > 5)  break; ?>
									</span>
								<?php } } ?>
							</div>

							<figure class="single-featured-img">
								<img src="<?php 
									$pic = get_the_post_thumbnail_url();
									if(!$pic) {
										$site = get_template_directory_uri();
										$pic = $site . '/dist/img/post_img.png';
									}
									echo esc_url($pic); 
								?>" alt="thumbnail">
							</figure>

							<h3 class="single-post-title"><?php the_title(); ?></h3>

							<div class="single-post-date">
							<i class="ri-calendar-event-line"
								style="
								top: 3px; 
								position: relative;
								"></i>
								<?php echo get_the_date(); ?>
								<span>  
								<?php 
									$author = get_the_author(); 
									if( $author != "admin"){ echo ' - ' . $author;} 
								?>
								</span>
							</div>
							
							<div class="single-content">
								<?php the_content(); ?>
							</div>

							<div class="separator"></div>

							<div class="other-posts">
								<div class="prev-post">
									<?php previous_post_link( '<div><i class="ri-arrow-left-fill"></i> </div><strong>%link</strong>' ); ?> 
								</div>
								<div class="next-post">
									<?php next_post_link( '<div><i class="ri-arrow-right-fill"></i> </div><strong>%link</strong>' ); ?> 
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
											$categories = get_the_category();
											$cat_name = $categories[0]->slug;
											$post_id = get_the_ID();
											
											$args = array(
												'post_type' => 'post',
												'category_name' => $cat_name,
												'posts_per_page' => '3',
												'post__not_in' => array( $post_id )
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
						<?php get_sidebar() ?>
						
			      	</section>
			    </main>
			</div>
		</div>
		<?php get_footer() ?>