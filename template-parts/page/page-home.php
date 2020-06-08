<div>
<?php	
	$k = 1;
	for ($i = 1; $i <= 8; $i++) { 
		get_template_part('template-parts/groups/group', $i);
		?>

		<div class="adv-wrapper">
			<?php for ($j = 1; $j <= 2; $j++) { 
				$getExpiryDate = get_theme_mod('ad_expiry_date_'.$k, 'default');
				
				$expire = strtotime($getExpiryDate);
				$today = strtotime(date("Y-m-d"));
				
				if($expire > $today) { ?>
				<div class="advertise" id="ad<?php echo $k; ?>">
					<figure>
						<img src="<?php echo get_theme_mod('home_ad_'.$k, 'default'); $k=$k+1; ?>">
						<figcaption class="hidden">Advertisement</figcaption>     
					</figure>
				</div>
			<?php } 
			} ?>
		</div>

		<?php	
	}	
?>


	<!-- category post -->
	<!-- <h2> Local</h2>
	<div class="post-container">
		<?php /*
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
		<?php endif; */?>
			
	</div> -->

</div>