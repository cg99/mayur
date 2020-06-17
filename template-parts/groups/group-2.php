
<div class="group-container">
    <div class="group">
        <div class="group-heading">
            <h3>
            <?php 
                $cat = get_theme_mod('category_2');
                $cat = get_category($cat);
                $cat_post = $cat->name;  
                echo $cat_post;
            ?>
            </h3>
        </div>
        <div class="post-group" id="group2">
            <?php 
            // pull 5 posts                                                                                        
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
    </div>
    
    <div class="group-sidebar">
        <div class="group-heading">
            <h3>Stay Connected</h3>
        </div>
        <div class="sidebar">
            <div class="social-media">
                <a href="#">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/facebook_32.png" alt="facebook">
                        <figcaption>8,000 Fans</figcaption>
                    </figure>
                    <span>Like</span>
                </a>
                <a href="#">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/twitter_32.png" alt="twitter">
                        <figcaption>4,500 Followers</figcaption>
                    </figure>
                    <span>Follow</span>
                </a>
                <a href="#">
                    <figure><img style="width: 32px;background: red;" src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/youtube.svg" alt="youtube">
                        <figcaption>5,500 Subscribers</figcaption>
                    </figure>
                    <span>Subscribe</span>
                </a>
            </div>
            <?php
                $getExpiryDate = get_theme_mod('ad_expiry_date_21', 'default');
				$expire = strtotime($getExpiryDate);
				$today = strtotime(date("Y-m-d"));
				if($expire > $today) { ?>
                <div class="bigyapan">
                    <figure>
                        <figcaption class="">- Advertisement -</figcaption>     
                        <img src="<?php echo get_theme_mod('home_ad_21', 'default');?>" alt="Bigyapan">
                    </figure>
                </div>
           <?php } ?>
        </div>
    </div>
</div>