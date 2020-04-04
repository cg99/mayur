<!-- post group 2 -->

<div class="group-container">
    <div class="group">
        <div class="group-heading">
            <h3>Don't Miss</h3>
        </div>
        <div class="post-group" id="group2">
            <?php 
            // pull 5 posts 
                $args = array(
                    'post_type' => 'post',
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
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/img/icons/facebook_32.png" alt="facebook">
                        <figcaption>8,000 Fans</figcaption>
                    </figure>
                    <span>Like</span>
                </a>
                <a href="#">
                    <figure><img src="<?php echo get_theme_file_uri(); ?>/dist/img/icons/twitter_32.png" alt="twitter">
                        <figcaption>4,500 Followers</figcaption>
                    </figure>
                    <span>Follow</span>
                </a>
                <a href="#">
                    <figure><img style="width: 32px;background: red;" src="<?php echo get_theme_file_uri(); ?>/dist/img/icons/youtube.svg" alt="youtube">
                        <figcaption>5,500 Subscribers</figcaption>
                    </figure>
                    <span>Subscribe</span>
                </a>
            </div>
           <div class="bigyapan">
                <figure>
                    <figcaption class="">- Advertisement -</figcaption>     
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/img/post_img.png" alt="Bigyapan">
                </figure>
           </div>
        </div>
    </div>
</div>