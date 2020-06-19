	
		<article class="post">
			<a href="<?php the_permalink() ?>">
				<figure>
					<img src="<?php 
						$pic = get_the_post_thumbnail_url();
						if(!$pic) {
							$site = get_template_directory_uri();
							$pic = $site . '/dist/img/post_img.png';
						}
						echo $pic; 
					?>" alt="thumbnail">
				</figure>
			</a>
			<div class="post-details">
				<h3 class="post-title">
					<a href="<?php the_permalink() ?>">
						<?php the_title() ?>
					</a>
				</h3>

				<div class="post-date">
					<span style="display: flex">
						<i class="ri-time-line" style="margin-right: 2px"></i>
						<time class="timeago" datetime="<?php echo get_the_date('c') ?>"></time>
					</span>
				</div> 

				<div class="post-category">
					<?php 
					$categories = get_the_category();
					if($categories[0]->name !== 'Uncategorized'){ 
						$count = 0;
						foreach($categories as $category){ ?>
						<span>
							<?php echo $category->name; $count++ ; if($count > 5)  break; ?>
						</span>
					<?php } } ?>
				</div>

				<div class="post-excerpt">
                    <?php the_excerpt() ?>
                </div>
			</div>			
		</article>
