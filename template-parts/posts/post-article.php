
		<article class="post">
			<a href="<?php the_permalink() ?>">
				<figure>
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Featured">
				</figure>
			</a>
			<div class="post-details">
				<h3 class="post-title">
					<a href="<?php the_permalink() ?>">
						<?php the_title() ?>
					</a>
				</h3>

				<div class="post-date">
					<span>
						<time class="timeago" datetime="<?php echo get_the_date('c') ?>"></time>
					</span>
				</div> 

				<div class="post-category">
					<?php 
					$categories = get_the_category();
					if($categories[0]->name !== 'Uncategorized'){ 
						foreach($categories as $category){ ?>
						<span>
							<?php echo $category->name; ?>
						</span>
					<?php } } ?>
				</div>

				<div class="post-excerpt">
                    <?php the_excerpt() ?>
                </div>
			</div>			
		</article>
