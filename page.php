
		<?php get_header() ?>
		<div id="app">
			<div class="middle">
			    <main class="main">
		      		<!-- banner advertisement -->
		      		<?php // get_template_part('template-parts/ads/ads', 'banner');?>

			      	<section class="single-container">
				  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="single-page">

							<h2 class="single-page-title" style="color: #333"><?php the_title(); ?></h2>
							
							<div class="single-page-content">
								<?php the_content(); ?>
							</div>
							
						</article>	
						<?php endwhile; else: ?>
						<p><?php _e('Sorry, no pages found.'); ?></p>
						<?php endif; ?>

						<?php get_sidebar() ?>
						
			      	</section>
			    </main>
			</div>
		</div>
		<?php get_footer() ?>